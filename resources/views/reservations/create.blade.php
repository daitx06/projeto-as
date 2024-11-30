@extends('layouts.base')

@section('conteudo')
<h1>New Reservations</h1>

<form action="{{ route('reservation.store') }}" method="POST">
    @csrf
    <label>guests:</label>
    <input type="text" name="guests" required>
    
    <label>Custo:</label>
    <input type="text" name="total_cost" required>
    
    <button type="submit">Salvar</button>
</form>
@endsection