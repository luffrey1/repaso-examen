<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Registrar Pasajero</title>
</head>
<body>
<section class="vh-100" style="background: radial-gradient(circle, rgb(255, 243, 77) 0%, rgb(61, 127, 224) 100%);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        </div>
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://bahiaxip.com/image/post/main/ic8Py6OvnFyJCUHCxM1J1s0DPkHnLnPmLAZsU6Mu.jpeg"
                alt="register form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:850px" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form method="POST" action="{{ route('pasajero.store') }}">
              @csrf
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-user fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Registro de Pasajero</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Registra un nuevo pasajero</h5>

                  <!-- Nombre del pasajero -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Introduce el nombre" class="form-control form-control-lg" required />
                  </div>

                  <!-- Apellidos del pasajero -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" placeholder="Introduce los apellidos" class="form-control form-control-lg" required />
                  </div>
                   <div class="form-group">
        <label for="avion_id">Avión</label>
        <select class="form-control" id="avion_id" name="avion_id" required>
            @foreach($aviones as $avion)
                <option value="{{ $avion->id }}">{{ $avion->id }}</option>
            @endforeach
        </select>
    </div>

                  <!-- Edad del pasajero -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="edad">Edad</label>
                    <input type="number" name="edad" id="edad" placeholder="Introduce la edad" class="form-control form-control-lg" required />
                  </div>

                  <!-- Asistencia (si está presente en un vuelo o evento) -->
                  <div class="mb-3 form-check">
                 <input type="checkbox" class="form-check-input" name="asistencia" value="1">
                <label class="form-check-label" for="asistencia">Asistencia</label>
                  </div>

                  <!-- Contraseña del pasajero -->
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="contrasena">Contraseña</label>
                    <input type="password" name="contrasena" id="contrasena" placeholder="Introduce la contraseña" class="form-control form-control-lg" required />
                  </div>
                  <div class="form-group">
        <label for="contrasena_confirmation">Confirmar Contraseña</label>
        <input type="password" class="form-control" id="contrasena_confirmation" name="contrasena_confirmation" required>
    </div>

                  <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit">Registrar Pasajero</button>
                  </div>

                  <a class="small text-muted" href="#!">Olvidé la contraseña</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">¿Ya tienes cuenta? <a href="/login"
                      style="color: #393f81;">Inicia sesión aquí</a></p>
                  <a href="#!" class="small text-muted">Términos de uso.</a>
                  <a href="#!" class="small text-muted">Política de privacidad</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
</html>
