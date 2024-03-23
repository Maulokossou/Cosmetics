<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.reservations.index', [
            'my_actions' => $this->reservation_actions(),
            'my_attributes' => $this->reservation_columns(),
            'reservations' => Reservation::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        return view('app.reservations.show', [
            'reservation' => $reservation
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }


    private function reservation_columns()
    {
        $columns = (object) [
            'customer_fullname' => 'Client',
            'ticket_infos' => 'Ticket',
            'nb_tickets' => 'Nombre',
            'fmt_date' => 'Date',
        ];
        return $columns;
    }

    private function reservation_actions()
    {
        $actions = (object) array(
            'show' => 'Voir',
        );
        return $actions;
    }
}
