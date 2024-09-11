<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // Importación correcta del Facade de DomPDF

class ReservationController extends Controller
{
    // Mostrar la lista de reservaciones
    public function index()
    {
        // Obtiene todas las reservaciones ordenadas por ID de forma descendente y las paginamos de 10 en 10
        $reservations = Reservation::orderBy('id', 'desc')->paginate(10);
        return view('reservations.index', compact('reservations'));
    }

    // Mostrar formulario para crear una nueva reservación
    public function create()
    {
        // Retorna la vista de creación de reservaciones
        return view('reservations.create');
    }

    // Almacenar una nueva reservación
    public function store(Request $request)
    {
        // Validación de los datos ingresados en el formulario
        $request->validate([
            'room_name' => 'required|string|max:255',
            'reservation_date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required',
            'client_name' => 'required|string|max:255',
        ]);

        // Crea una nueva reservación con los datos validados
        Reservation::create($request->all());

        // Redirige al índice con un mensaje de éxito
        return redirect()->route('reservations.index')->with('success', 'Reserva creada exitosamente.');
    }

    // Mostrar una reservación específica
    public function show(Reservation $reservation)
    {
        // Muestra los detalles de una reservación específica
        return view('reservations.show', compact('reservation'));
    }

    // Mostrar formulario para editar una reservación
    public function edit(Reservation $reservation)
    {
        // Muestra el formulario de edición para una reservación específica
        return view('reservations.edit', compact('reservation'));
    }

    // Actualizar una reservación
    public function update(Request $request, Reservation $reservation)
    {
        // Validación de los datos ingresados en el formulario de edición
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

    // Eliminar una reservación
    public function destroy(Reservation $reservation)
    {
        // Elimina la reservación especificada
        $reservation->delete();

        // Redirige al índice con un mensaje de éxito
        return redirect()->route('reservations.index')->with('success', 'Reserva eliminada exitosamente.');
    }

    // Generar un reporte en PDF de todas las reservaciones
    public function report()
    {
        // Obtiene todas las reservaciones
        $reservations = Reservation::all();

        // Carga la vista de reporte con los datos de las reservaciones
        $pdf = Pdf::loadView('reservations.report', compact('reservations'));

        // Genera y descarga el PDF
        return $pdf->download('reporte_reservas.pdf');
    }
}
