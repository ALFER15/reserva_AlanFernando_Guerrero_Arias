<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Reporte de Reservaciones</title>
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">Reporte de Reservaciones</h2>
        <table class="table table-bordered">
            <thead class="table-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre de la Sala</th>
                <th scope="col">Fecha de Reserva</th>
                <th scope="col">Hora de Inicio</th>
                <th scope="col">Hora de Fin</th>
                <th scope="col">Nombre del Cliente</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <th scope="row">{{ $reservation->id }}</th>
                        <td>{{ $reservation->room_name }}</td>
                        <td>{{ $reservation->reservation_date }}</td>
                        <td>{{ $reservation->start_time }}</td>
                        <td>{{ $reservation->end_time }}</td>
                        <td>{{ $reservation->client_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ku0YI+0ObeZJaHVE4wm6zyCMF5JhQlSvzGRXdfxFGxvczGh/9JMHTeTPl4DLI05j" crossorigin="anonymous"></script>
</body>
</html>
