<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Document')</title> <!-- Permite definir títulos dinámicos -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100 dark:bg-gray-900">
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-lg font-semibold">@yield('header', 'Reserva App')</h1> 
        </div>
    </header>

    <main class="container mx-auto py-8">
        {{ $slot }} <!-- Contenido principal -->
    </main>

    <footer class="bg-blue-600 text-white p-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Reserva App. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>
