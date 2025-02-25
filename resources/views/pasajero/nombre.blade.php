<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasajeros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Pasajeros Encontrados</h1>

        @if($pasajeros->isEmpty())
            <p>No se han encontrado pasajeros con ese nombre.</p>
        @else
            <ul class="list-group">
                @foreach($pasajeros as $pasajero)
                    <li class="list-group-item">
                        <strong>{{ $pasajero->nombre }} {{ $pasajero->apellidos }}</strong> (Edad: {{ $pasajero->edad }})
                    </li>
                @endforeach
            </ul>
        @endif

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
