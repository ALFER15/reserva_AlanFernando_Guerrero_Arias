<x-app-layout>
    <div class="mt-6">
        <a href="{{ route('reservations.index') }}" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">
            Regresar
        </a>
    </div>

    <div class="mt-12">
        <h2 class="text-4xl font-extrabold text-blue-600 dark:text-white mb-12 text-center">Crear Nueva Reserva</h2>
    </div>

    <form action="{{ route('reservations.store') }}" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg dark:bg-gray-800">
        @csrf
        <div class="mb-6">
            <label for="room_name" class="block mb-2 text-sm font-semibold text-blue-700 dark:text-white">Nombre de la Sala</label>
            <input type="text" id="room_name" name="room_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>

        <div class="mb-6">
            <label for="reservation_date" class="block mb-2 text-sm font-semibold text-blue-700 dark:text-white">Fecha de Reserva</label>
            <input type="date" id="reservation_date" name="reservation_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>

        <div class="mb-6">
            <label for="start_time" class="block mb-2 text-sm font-semibold text-blue-700 dark:text-white">Hora de Inicio</label>
            <input type="time" id="start_time" name="start_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>

        <div class="mb-6">
            <label for="end_time" class="block mb-2 text-sm font-semibold text-blue-700 dark:text-white">Hora de Fin</label>
            <input type="time" id="end_time" name="end_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>

        <div class="mb-6">
            <label for="client_name" class="block mb-2 text-sm font-semibold text-blue-700 dark:text-white">Nombre del Cliente</label>
            <input type="text" id="client_name" name="client_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>

        <div class="text-center">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Guardar</button>
        </div>
    </form>
</x-app-layout>
