<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Lista de Pasajeros</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Filtrar Pasajeros por Edad</h2>

    <form method="GET" action="{{ route('pasajero.edad') }}" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <label for="min">Edad mínima:</label>
                <input type="number" id="min" name="min" class="form-control" value="{{ request('min', 0) }}" required>
            </div>
            <div class="col-md-4">
                <label for="max">Edad máxima:</label>
                <input type="number" id="max" name="max" class="form-control" value="{{ request('max', 150) }}" required>
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-primary w-100">Filtrar</button>
            </div>
        </div>
    </form>

    @if($pasajeros->isEmpty())
        <div class="alert alert-warning">No se encontraron pasajeros en este rango de edad.</div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Asistencia</th>
                    <th>Avión</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pasajeros as $pasajero)
                    <tr>
                        <td>{{ $pasajero->id }}</td>
                        <td>{{ $pasajero->nombre }}</td>
                        <td>{{ $pasajero->apellidos }}</td>
                        <td>{{ $pasajero->edad }}</td>
                        <td>{{ $pasajero->asistencia ? '✅ Sí' : '❌ No' }}</td>
                        <td>{{ $pasajero->avion ? $pasajero->avion->modelo : 'Sin asignar' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('aeropuerto.index') }}" class="btn btn-secondary">Volver</a>
</div>

</body>
</html>
