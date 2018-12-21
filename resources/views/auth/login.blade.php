@extends('template.base')

@section('title','Login')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center mt-3">Iniciar Sesion</h1>
      <hr>
    </div>

    <!-- ACA EMPIEZA LA COLUMNA IZQUIERDA DE LA PANTALLA (FOTOS)-->
    <div class="col-md-8 banner-sec">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="images/carrousel-form-1.jpeg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <div class="banner-text">
                <h2>Empeza a sumar puntos</h2>
                <p>Obtene puntos y canjealos para un mayor descuento</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="images/carrousel-form-2.jpeg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <div class="banner-text">
                <h2>Te estamos esperando</h2>
                <p>Enterate de todas nuestras promociones y descuentos</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="images/carrousel-form-3.jpeg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <div class="banner-text">
                <h2>Calidad y variedad</h2>
                <p>Contamos con una extensa linea de indumentaria</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ACA TERMINA LA COLUMNA IZQUIERDA DE LA PANTALLA (FOTOS)-->
    <!-- ACA EMPIEZA LA COLUMNA DERECHA DE LA PANTALLA (FORM)-->
    <div class="col-md-4 login-sec">


      <form class="login-form clearfix" action="{{ route('login') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label>Email</label>
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autofocus>

          @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
          <div class="invalid-feedback">
              {{-- javascript --}}
          </div>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">

          @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
          <div class="invalid-feedback">
              {{-- javascript --}}
          </div>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <small>Recordarme</small>
          </label>
        </div>
        <button type="submit" class="btn btn-success float-right">Ingresar</button>
      </form>

      <div class="text-danger font-weight-bold">
        <ul>

        </ul>
      </div>
      <div class="etc-login-form clearfix mt-2">

        <div class="text-center">Olvidaste tu contraseña? <a href="{{ route('password.request') }}">Click Acá</a></div>
        <div class="text-center">Aún no tenes cuenta? <a href="{{ route('register') }}">Registrate acá</a></div>
      </div>

      <!-- PARA IMPRIMIR LOS ERRORES -->



    </div>
    <!-- ACA TERMINA LA COLUMNA DERECHA DE LA PANTALLA (FORM)-->
  </div>
</div>
<script src="js/login.js"></script>
@endsection
