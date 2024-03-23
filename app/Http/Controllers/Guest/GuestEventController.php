<?php

namespace App\Http\Controllers\Guest;

use Exception;
use App\Models\Event;
use App\Models\EventTicket;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Mail\OrderInvoiceMail;
use LaravelDaily\Invoices\Invoice;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use LaravelDaily\Invoices\Classes\Party;
use PHPUnit\Framework\Attributes\Ticket;
use RealRashid\SweetAlert\Facades\Alert;
use function PHPUnit\Framework\returnSelf;

use App\Http\Requests\GuestCustomerRequest;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class GuestEventController extends Controller
{
    public function index()
    {
        return view('guest.events.index', [
            'events' => Event::paginate(9)
        ]);
    }

    public function showEvent($slug)
    {
        $event = Event::where('slug', $slug)->first();
        return view('guest.events.show', [
            'event' => $event
        ]);
    }

    public function customer($slug, $ticket)
    {
        $event = Event::where('slug', $slug)->first();
        $ticket = EventTicket::find($ticket);
        return view('guest.events.customer', [
            'event' => $event,
            'ticket' => $ticket,
        ]);
    }

    public function storeCustomer(GuestCustomerRequest $request, $slug, $ticket)
    {
        $evt_ticket = EventTicket::firstWhere('id', $ticket);
        session()->put('reservation', array_merge($request->except('_token'), [
            'ticket_id' => $evt_ticket->id,
        ]));
        return redirect()->route('guest.event.payment', ['slug' => $slug, 'ticket' => $ticket]);
    }

    public function ticketPayment($slug, $ticket)
    {
        $event = Event::where('slug', $slug)->first();
        $ticket = EventTicket::find($ticket);
        return view('guest.events.payment', [
            'event' => $event,
            'ticket' => $ticket,
            'customer' => session()->get('reservation')
        ]);
    }

    public function paymentSuccess(Request $request)
    {
        try {
            $kkiapay = new \Kkiapay\Kkiapay('37f817b0e88e11eea78e89385bd9312c',
            'tpk_37f83ec1e88e11eea78e89385bd9312c',
            'tsk_37f865d0e88e11eea78e89385bd9312c',
            $sandbox = true);
            $transaction = $kkiapay->verifyTransaction($request->transaction_id);
            $session_values = session()->get('reservation');
            $reservation = Reservation::where('tr_reference', $transaction->transactionId)->first();
            if($reservation) {
                Alert::info('Ce paiement a déja été éffectuée', 'Consultez votre boite mail pour obtenir votre facture');
                return view('guest.events.payment_success', [
                    'reservation' => $reservation
                ]);   
            }
            $reservation = new Reservation();
            $reservation->fill($session_values);
            $evt_ticket = EventTicket::find($session_values['ticket_id']);
            $reservation->nb_tickets = $transaction->amount / $evt_ticket->price;
            $reservation->tr_reference = $transaction->transactionId;
            $reservation->invoice = $this->generateOrderPDF($reservation, $transaction);
            $reservation->total_amount = $transaction->amount;
            $reservation->save();
            // Mail::to($reservation->customer_email)->send(new OrderInvoiceMail($reservation));
            Alert::success('Le paiement a été effectué !', 'Consultez votre boite mail pour obtenir votre facture');
            return view('guest.events.payment_success', [
                'reservation' => $reservation
            ]);
        } catch(Exception $e) {
            Alert::error('Oops ! Une erreur est survenue.', $e->getMessage());
            return redirect()->route('guest.events.index');
        }
    }

    private function generateOrderPDF(Reservation $reservation, $transaction)
    {

        $client = new Party([
            'name' => 'VAL Beauté',
            'custom_fields' => [
                'telephone' => '+229 97 00 00 00',
                'email' => 'val@beauté.com',
                'addresse' => 'Cotonou, NY 10012, Bénin',
            ],
        ]);

        $customer = new Party([
            'name' => $reservation->customer_fullname,
            'custom_fields' => [
                'telephone' => $reservation->customer_phone,
                'email' => $reservation->customer_email,
                'addresse' => 'Cotonou, Bénin',
            ],
        ]);

        $items = [
            (new InvoiceItem())
                ->title($reservation->ticket->event_name . ' - ' . $reservation->ticket->name)
                ->pricePerUnit($reservation->ticket->price)
                ->quantity($reservation->nb_tickets),
        ];

        $invoice = Invoice::make('receipt')->template('custom')
            ->name('Recu de paiement')
            ->series('VALPROD')
        // ability to include translated invoice status
        // in case it was paid
            ->status(__('invoices::invoice.paid'))
            ->sequence(now()->timestamp)
            ->serialNumberFormat('{SERIES}-00{SEQUENCE}')
            ->seller($client)
            ->buyer($customer)
            ->date(now())
            ->dateFormat('d-m-Y')
        // ->payUntilDays(14)
            ->currencySymbol('CFA')
            ->currencyCode('XOF')
            ->currencyFormat('{VALUE} {SYMBOL}')
            ->currencyThousandsSeparator(' ')
            ->currencyDecimalPoint(',')
            ->filename('Invoices/VALBEAUTE-Facture_N-' . now()->timestamp . '_' . $customer->name)
            ->setCustomData($transaction)
            ->addItems($items)
            ->logo(public_path('assets/images/image1.jpeg'))
        // You can additionally save generated invoice to configured disk
            ->save('public');

        // $link = $invoice->url();
        // Then send email to party with link

        // And return invoice itself to browser or have a different view
        return $invoice->url();
    }
}
