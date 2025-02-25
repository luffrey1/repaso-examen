<!-- resources/views/avion/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Avión</title>
    <!-- Puedes agregar un enlace a Bootstrap si lo necesitas -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <h1>Crear Avión</h1>

        <!-- Formulario para crear un avión -->
        <form action="{{ route('avion.store') }}" method="POST">
            @csrf <!-- Token CSRF para seguridad -->

            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" required>
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="modelo" name="modelo" required>
            </div>

            <div class="mb-3">
                <label for="maximoPasajeros" class="form-label">Máximo Pasajeros</label>
                <input type="number" class="form-control" id="maximoPasajeros" name="maximoPasajeros" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear Avión</button>
        </form>
    </div>

</body>
</html>
