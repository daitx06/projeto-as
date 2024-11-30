@extends('layouts.base')

@section('title', 'Edit Guest')

@section('content')
<div class="container">
    <h1>Edit Guest</h1>
    <form action="{{ route('guests.update', $guest) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $guest->name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $guest->email }}" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $guest->phone }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('guests.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
