<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Aumentar Edad de Pasajeros</h1>
    <form method="POST" action="{{ route('pasajero.aumentarEdad', $incremento) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-4">
                <label for="incremento">Incremento de Edad:</label>
                <input type="number" id="incremento" name="incremento" class="form-control" value="{{ old('incremento', 1) }}" required>
            </div>
            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-primary w-100">Aumentar Edad</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>