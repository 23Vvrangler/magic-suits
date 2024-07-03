<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Room; // Importar el modelo Room

class ReservationController extends Controller
{
    public function index()
    {
        // Mostrar lista de reservas
        $reservations = Reservation::all();
        return view('reservations', compact('reservations'));
    }

    public function create()
    {
        // Obtener lista de habitaciones disponibles
        $rooms = Room::all();

        // Crear una nueva reserva
        return view('reservations.create', compact('rooms'));
    }

    public function store(Request $request)
    {
        // Guardar una nueva reserva
        $reservation = new Reservation();
        $reservation->room_id = $request->input('room_id');
        $reservation->guest_name = $request->input('guest_name');
        $reservation->checkin_date = $request->input('checkin_date');
        $reservation->checkout_date = $request->input('checkout_date');
        $reservation->save();
        return redirect()->route('reservations.index');
    }
    public function edit($id)
    {
        // Obtener la reserva por ID
        $reservation = Reservation::find($id);
        $rooms = Room::all();
        return view('reservations.edit', compact('reservation', 'rooms'));
    }
    public function update(Request $request, $id)
    {
        // Actualizar la reserva
        $reservation = Reservation::find($id);
        $reservation->room_id = $request->input('room_id');
        $reservation->guest_name = $request->input('guest_name');
        $reservation->checkin_date = $request->input('checkin_date');
        $reservation->checkout_date = $request->input('checkout_date');
        $reservation->save();
        return redirect()->route('reservations.index');
    }
    public function destroy($id)
    {
        // Eliminar la reserva
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect()->route('reservations.index');
    }
}