<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        // Mostrar lista de habitaciones
        $rooms = Room::all();
        return view('rooms', compact('rooms'));
    }

    public function show(Room $room)
    {
        // Mostrar detalles de una habitación
        return view('room', compact('room'));
    }

    public function create()
    {
        // Crear una nueva habitación
        return view('rooms.create');
    }

    public function store(Request $request)
    {
        // Guardar una nueva habitación
        $room = new Room();
        $room->name = $request->input('name');
        $room->description = $request->input('description');
        $room->price = $request->input('price');
        $room->save();
        return redirect()->route('rooms.index');
    }
}
