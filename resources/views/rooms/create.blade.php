@extends('layouts.base')

@section('conteudo')
<h1>New Room</h1>

<form action="{{ route('rooms.store') }}" method="POST">
    @csrf
    <label>numero de hospedes:</label>
    <input type="text" name="number" required>
    
    <label>preço:</label>
    <input type="text" name="price" required>

    <label>capacidade:</label>
    <input type="text" name="capacity" required>
    
    <button type="submit">Salvar</button>
</form>
@endsection