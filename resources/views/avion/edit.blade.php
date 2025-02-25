<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Avión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container mt-5">
        <h2>Editar Avión</h2>
        <form action="{{ route('avion.update', $avion->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" value="{{ old('marca', $avion->marca) }}">
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="modelo" name="modelo" value="{{ old('modelo', $avion->modelo) }}">
            </div>

            <div class="mb-3">
                <label for="maximoPasajeros" class="form-label">Máximo de Pasajeros</label>
                <input type="number" class="form-control" id="maximoPasajeros" name="maximoPasajeros" value="{{ old('maximoPasajeros', $avion->maximoPasajeros) }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
            <a href="{{ route('aeropuerto.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
