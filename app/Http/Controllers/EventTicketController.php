<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Event;
use App\Models\EventTicket;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreEventTicketRequest;
use App\Http\Requests\UpdateEventTicketRequest;

class EventTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.tickets.index', [
            'event_tickets' => EventTicket::all(),
            'my_actions' => $this->ticket_actions(),
            'my_fields' => $this->ticket_fields(),
            'my_attributes' => $this->ticket_columns(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventTicketRequest $request)
    {
        try {
            $ticket = new EventTicket();
            $ticket->fill($request->except('_token', 'event'));
            $ticket->event_id = $request->event;
            $ticket->save();
            Alert::toast('Le ticket a été crée', 'success');
            return redirect()->route('event_tickets.index');
        } catch (Exception $e) {
            Alert::error('Une erreur est survenue', $e->getMessage())->autoclose(20000);
            return redirect()->route('event_tickets.index')->withInput($request->input());   
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(EventTicket $eventTicket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EventTicket $eventTicket)
    {
        return view('app.tickets.edit', [
            'my_fields' => $this->ticket_fields(),
            'ticket' => $eventTicket
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventTicketRequest $request, EventTicket $eventTicket)
    {
        try {
            $eventTicket->fill($request->except('_token', 'event'));
            $eventTicket->event_id = $request->event;
            $eventTicket->save();
            Alert::toast('Le ticket a été modifié', 'success');
            return redirect()->route('event_tickets.index');
        } catch (Exception $e) {
            Alert::error('Une erreur est survenue', $e->getMessage())->autoclose(20000);
            return redirect()->route('event_tickets.index')->withInput($request->input());   
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventTicket $eventTicket)
    {
        //
    }

    private function ticket_columns()
    {
        $columns = (object) [
            'event_name' => 'Evenement',
            'name' => 'Nom',
            'num_left' => 'Disponibles',
        ];
        return $columns;
    }

    private function ticket_actions()
    {
        $actions = (object) array(
            'edit' => "Modifier",
        );
        return $actions;
    }

    private function ticket_fields()
    {
        $fields = [
            'event' => [
                'title' => "Evenement",
                'field' => 'model',
                'options' => Event::all(),
                'required' => true,
                'required_on_edit' => true,
            ],
            'name' => [
                'title' => "Nom du ticket",
                'placeholder' => 'Ex: VIP',
                'field' => 'text',
                'required' => true,
                'required_on_edit' => true,
            ],
            'price' => [
                'title' => "Prix",
                'placeholder' => 'Ex: 30 000',
                'field' => 'number',
                'required' => true,
                'required_on_edit' => true,
            ],
            'description' => [
                'title' => "Description",
                'placeholder' => 'Ex: Une petite description',
                'field' => 'textarea',
            ],
            'num_left' => [
                'title' => "Nombre disponible",
                'placeholder' => 'Ex: 30',
                'field' => 'number',
                'required' => true,
                'required_on_edit' => true,
            ],
        ];
        return $fields;
    }
}
