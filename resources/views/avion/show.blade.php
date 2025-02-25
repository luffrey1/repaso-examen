<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Avión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Detalles del Avión</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Avión: {{ $avion->marca }} {{ $avion->modelo }}</h5>
                <p class="card-text"><strong>ID:</strong> {{ $avion->id }} </p>
                <p class="card-text"><strong>Marca:</strong> {{ $avion->marca }}</p>
                <p class="card-text"><strong>Modelo:</strong> {{ $avion->modelo }}</p>
                <p class="card-text"><strong>Máximo Pasajeros:</strong> {{ $avion->maximoPasajeros }}</p>
                <p class="card-text"><strong>Pasajeros:</strong> {{ $avion->pasajeros }}</p>
            </div>
        </div>

        <a href="/" class="btn btn-secondary mt-3">Volver a la lista de aviones</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
