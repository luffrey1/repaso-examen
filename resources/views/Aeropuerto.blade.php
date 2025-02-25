<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aviones y Pasajeros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="container mt-5">
    <h1 class="mb-4">Aviones</h1>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="list-group">
        @foreach($aviones as $avion)
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong>{{ $avion->marca }} {{ $avion->modelo }}</strong> (Máximo {{ $avion->maximoPasajeros }} pasajeros)
                </div>
                <div>
                    <a href="{{route('avion.edit', $avion) }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{route('avion.destroy', $avion) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{ $avion->id }}">
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>


    <h1 class="mb-4 mt-5">Pasajeros</h1>
    <div class="list-group">
        @foreach($pasajeros as $pasajero)
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong>{{ $pasajero->nombre }} {{ $pasajero->apellidos }}</strong> (Edad: {{ $pasajero->edad }})
                </div>
                <div>
                    <a href="" class="btn btn-primary btn-sm">Editar</a>
                    <form action="" method="POST" class="d-inline-block">
                        @csrf
                        <input type="hidden" name="id" value="">
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Agregar el script de Bootstrap -->
    
</body>
</html>
