@extends('layouts.base')

@section('conteudo')
<h1>Reservations</h1>
<a href="{{ route('reservations.create') }}">New Reservations</a>

<ul>
    @foreach($reservations as $reservation)
        <li>{{ $reservation->guests }} - {{ $reservation->total_cost }}</li>
    @endforeach
</ul>
@endsection