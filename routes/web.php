<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

// Ruta principal que redirige al listado de reservaciones
Route::get('/', function () {
    return redirect()->route('reservations.index');
});

// Rutas para el CRUD de reservaciones
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/reservations/{reservation}', [ReservationController::class, 'show'])->name('reservations.show');
Route::get('/reservations/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
Route::put('/reservations/{reservation}', [ReservationController::class, 'update'])->name('reservations.update');
Route::delete('/reservations/{reservation}', [ReservationController::class, 'destroy'])->name('reservations.destroy');

// Ruta para generar el reporte general en PDF
Route::get('/reservations-report', [ReservationController::class, 'report'])->name('reservations.report');

// Ruta para generar el reporte específico de una reservación en PDF
Route::get('/reservations/{reservation}/specific-report', [ReservationController::class, 'specificReport'])->name('reservations.specific_report');
