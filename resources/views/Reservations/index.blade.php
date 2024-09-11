<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Reservas') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-4">
                <div class="flex justify-between items-center mb-4">
                    <a href="{{ route('reservations.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
                        Crear Reserva
                    </a>
                    <a href="{{ route('reservations.report') }}" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5">
                        Generar Reporte PDF
                    </a>
                </div>

                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nombre de la Sala</th>
                            <th scope="col" class="px-6 py-3">Fecha de Reserva</th>
                            <th scope="col" class="px-6 py-3">Hora de Inicio</th>
                            <th scope="col" class="px-6 py-3">Hora de Fin</th>
                            <th scope="col" class="px-6 py-3">Nombre del Cliente</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <a href="{{ route('reservations.show', $reservation->id) }}" class="text-blue-500 hover:underline">
                                        {{ $reservation->room_name }}
                                    </a>
                                </th>
                                <td class="px-6 py-4">
                                    {{ $reservation->reservation_date }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $reservation->start_time }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $reservation->end_time }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $reservation->client_name }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $reservations->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
