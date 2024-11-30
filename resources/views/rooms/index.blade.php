@extends('layouts.base')

@section('conteudo')
<h1>Rooms</h1>
<a href="{{ route('rooms.create') }}">New Room</a>

<ul>
    @foreach($rooms as $room)
        <li>{{ $room->number }} - {{ $room->price }} - {{ $room->capacity }}</li>
    @endforeach
</ul>
@endsection