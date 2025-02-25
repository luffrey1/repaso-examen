<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Pasajero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card p-4 shadow-sm">
        <h2 class="text-center mb-4">Registro de Pasajero</h2>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form method="POST" action="{{ route('pasajero.store') }}">
            @csrf
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="avion_id" class="form-label">Avión:</label>
                <select name="avion_id" id="avion_id" class="form-select" required>
                    @foreach($aviones as $avion)
                        <option value="{{ $avion->id }}">{{ $avion->id }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" name="edad" id="edad" class="form-control" required>
            </div>
            
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" name="asistencia" value="1" id="asistencia">
                <label class="form-check-label" for="asistencia">Asistencia</label>
            </div>
            
            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña:</label>
                <input type="password" name="contrasena" id="contrasena" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="contrasena_confirmation" class="form-label">Confirmar Contraseña:</label>
                <input type="password" name="contrasena_confirmation" id="contrasena_confirmation" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary w-100">Registrar Pasajero</button>
        </form>
        
        <p class="mt-3 text-center"><a href="/login">¿Ya tienes cuenta? Inicia sesión aquí</a></p>
    </div>
</body>
</html>