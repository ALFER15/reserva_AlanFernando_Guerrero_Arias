<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::orderBy('id', 'desc')->paginate(10);
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_name' => 'required|string|max:255',
            'reservation_date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
            'client_name' => 'required|string|max:255',
        ]);

        Reservation::create($request->all());

        return redirect()->route('reservations.index')->with('success', 'Reserva creada exitosamente.');
    }

    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'room_name' => 'required|string|max:255',
            'reservation_date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
            'client_name' => 'required|string|max:255',
        ]);

        // Actualiza la reservación con los datos validados
        $reservation->update($request->all());

        // Redirige al índice con un mensaje de éxito
        return redirect()->route('reservations.index')->with('success', 'Reserva actualizada exitosamente.');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return redirect()->route('reservations.index')->with('success', 'Reserva eliminada exitosamente.');
    }

    public function report()
    {
        $reservations = Reservation::all();

        $pdf = Pdf::loadView('reservations.report', compact('reservations'));

        return $pdf->download('reporte_reservas.pdf');
    }
}
