@extends('layouts.app')

@section('content')
    <h1>Crear nueva reserva</h1>

    <form action="{{ route('reservations.store') }}" method="post">
        @csrf

        <label for="room_id">Habitación:</label>
        <select name="room_id" id="room_id">
            @foreach($rooms as $room)
                <option value="{{ $room->id }}">{{ $room->name }} ({{ $room->capacity }} personas)</option>
            @endforeach
        </select>

        <label for="guest_name">Nombre del huésped:</label>
        <input type="text" name="guest_name" id="guest_name">

        <label for="checkin_date">Fecha de entrada:</label>
        <input type="date" name="checkin_date" id="checkin_date">

        <label for="checkout_date">Fecha de salida:</label>
        <input type="date" name="checkout_date" id="checkout_date">

        <button type="submit">Crear reserva</button>
    </form>
@endsection