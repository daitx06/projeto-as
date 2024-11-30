@extends('layouts.base')

@section('conteudo')
<h1>New Guest</h1>

<form action="{{ route('guests.store') }}" method="POST">
    @csrf
    <label>Nome:</label>
    <input type="text" name="name" required>
    
    <label>Email:</label>
    <input type="text" name="email" required>

    <label>Telefone:</label>
    <input type="text" name="phone" required>
    
    <button type="submit">Salvar</button>
</form>
@endsection