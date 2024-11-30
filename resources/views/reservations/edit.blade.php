@extends('layouts.base')

@section('title', 'Edit Reservation')

@section('content')
<div class="container">
    <h1>Edit Reservation</h1>
    <form action="{{ route('reservations.update', $reservation) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="guests" class="form-label">Number of Guests</label>
            <input type="number" name="guests" id="guests" class="form-control" value="{{ $reservation->guests }}" required>
        </div>
        <div class="mb-3">
            <label for="total_cost" class="form-label">Total Cost</label>
            <input type="number" step="0.01" name="total_cost" id="total_cost" class="form-control" value="{{ $reservation->total_cost }}" required>
        </div>
        <div class="mb-3">
            <label for="room_id" class="form-label">Room</label>
            <select name="room_id" id="room_id" class="form-control" required>
                @foreach($rooms as $room)
                <option value="{{ $room->id }}" {{ $room->id == $reservation->room_id ? 'selected' : '' }}>
                    {{ $room->number }}
                </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
