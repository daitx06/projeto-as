<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;



    Route::resource('rooms', RoomController::class);
    Route::resource('reservations', ReservationController::class);
    Route::resource('guests', GuestController::class);

