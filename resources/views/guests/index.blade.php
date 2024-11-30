@extends('layouts.base')

@section('conteudo')
<h1>Guests</h1>
<a href="{{ route('guests.create') }}">New Guest</a>

<ul>
    @foreach($guests as $guest)
        <li>{{ $guest->name }} - {{ $guest->email }} - {{ $guest->phone }}</li>
    @endforeach
</ul>
@endsection