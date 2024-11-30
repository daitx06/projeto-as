@extends('layouts.base')

@section('title', 'Edit Room')

@section('content')
<div class="container">
    <h1>Edit Room</h1>
    <form action="{{ route('rooms.update', $room) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="number" class="form-label">Room Number</label>
            <input type="text" name="number" id="number" class="form-control" value="{{ $room->number }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ $room->price }}" required>
        </div>
        <div class="mb-3">
            <label for="capacity" class="form-label">Capacity</label>
            <input type="number" name="capacity" id="capacity" class="form-control" value="{{ $room->capacity }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
