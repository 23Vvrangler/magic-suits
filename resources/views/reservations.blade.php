
@extends('layouts.app')

@section('content')
    <h1>Reservas</h1>

    <ul>
        @foreach($reservations as $reservation)
            <li>
                Habitación {{ $reservation->room_id }} - {{ $reservation->guest_name }} ({{ $reservation->checkin_date }} - {{ $reservation->checkout_date }})
            </li>
        @endforeach
    </ul>

    <a href="{{ route('reservations.create') }}">Crear nueva reserva</a>
@endsection