<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 p-6">
            <h2 class="text-3xl font-extrabold text-blue-700 dark:text-blue-400 mb-6 tracking-wide">Detalles de la Reservación</h2>

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-blue-600 dark:bg-blue-800">
                    <tr>
                        <th scope="col" class="px-6 py-3">Campo</th>
                        <th scope="col" class="px-6 py-3">Detalles</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800">
                    <tr class="border-b dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Nombre de la Sala</td>
                        <td class="px-6 py-4">{{ $reservation->room_name }}</td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Fecha de Reserva</td>
                        <td class="px-6 py-4">{{ $reservation->reservation_date }}</td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Hora de Inicio</td>
                        <td class="px-6 py-4">{{ $reservation->start_time }}</td>
                    </tr>
                    <tr class="border-b dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Hora de Fin</td>
                        <td class="px-6 py-4">{{ $reservation->end_time }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Nombre del Cliente</td>
                        <td class="px-6 py-4">{{ $reservation->client_name }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-6 flex justify-between">
                <a href="{{ route('reservations.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                    Regresar
                </a>

                <a href="{{ route('reservations.edit', $reservation->id) }}" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                    Editar
                </a>

                <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta reserva?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        Eliminar
                    </button>
                </form>

                <!-- Botón para generar reporte de esta reservación -->
                <a href="{{ route('reservations.specific_report', $reservation->id) }}" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                    Generar Reporte
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
