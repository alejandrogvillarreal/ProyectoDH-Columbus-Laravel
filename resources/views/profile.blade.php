@extends('template.base')

@section('title','Perfil')

@section('customJS')
  <script src="js/perfil.js"></script>
@endsection

@section('content')


<!-- SECCION DE PERFIL -->

  <div class="container">
    <h1 class="text-center mt-3">Perfil</h1>
    <hr>
    <div class="row">
      <!-- ACA EMPIEZA LA SECCION DE LA IZQUIERDA DE LA PANTALLA (FOTO) -->
      <div class="col-sm-3 mt-5"><!--left col-->
        <div class="text-center">
          <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
          {{-- <img src="images/avatars/" class="avatar img-circle img-thumbnail shadow-lg" alt="avatar"> --}}

          <div class="text-danger font-weight-bold">
            {{-- <ul> --}}
              {{-- FOREACH --}}
                {{-- <li> --}}
                  {{-- ACA IRIAN LOS ERRORES --}}
                {{-- </li> --}}

            {{-- </ul> --}}
          </div>
        </div>
      </div><!--/col-3-->
      <!-- ACA TERMINA LA SECCION DE LA IZQUIERDA DE LA PANTALLA (FOTO) -->

      <!-- ACA EMPIEZA LA SECCION DE LA DERECHA DE LA PANTALLA (DATOS) -->
      <div class="col-sm-9">
        {{-- <button class="btn btn-info float-right" type="submit" id="botonEditar">Editar Perfil</button> --}}
        <br>
        <br>
      <form class="form perfil-form clearfix" action="/profile/{{Auth::user()->id}}/update" method="post" id="registrationForm" enctype="multipart/form-data">
          @csrf
	        	{{ method_field('PUT') }}
          <!-- <h6>Subí tu foto...</h6>
          <div class="custom-file form-group">
            <label>Avatar</label>
            <input type="file" class="custom-file-input text-center center-block" id="customFile" name="userPhoto" disabled>
            <label class="custom-file-label text-left" for="customFile">Elegir</label>
            <span> <?php // echo $errorImg; ?></span>
          </div> -->
          <div class="form-group">
            <div class="form-row">
              <div class="col">
                <label><h6>Nombre: </h6></label>
              <input type="text" class="form-control" name="nombre" value="{{Auth::user()->name}}" disabled>
                <div class="invalid-feedback">
                </div>
              </div>
              <div class="col">
                <label><h6>Apellido:</h6></label>
                <input type="text" class="form-control" name="apellido" value="{{Auth::user()->lastname}}" disabled>
                <div class="invalid-feedback">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col">
                <label><h6>Nombre de Usuario:</h6></label>
                <input type="text" class="form-control" name="username" value="{{Auth::user()->username}}" disabled>
                <div class="invalid-feedback">
                </div>
              </div>
              <div class="col">
                <label><h6>Pais:</h6></label>
                <select id="inputState" class="form-control" name="pais" value="{{Auth::user()->country}}" disabled>
                  
                </select>
                <div class="invalid-feedback">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-6">
              <label><h6>Email:</h6></label>
              <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}" disabled>
              <div class="invalid-feedback">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col">
                <label><h6>Contraseña:</h6></label>
                <input type="password" class="form-control" name="password" value="" disabled>
                <div class="invalid-feedback">
                </div>
              </div>
              <div class="col">
                <label><h6>Confirmar contraseña:</h6></label>
                <input type="password" class="form-control" name="passwordR" value="" disabled>
                <div class="invalid-feedback">
                </div>
              </div>
            </div>
          </div>


          <h6>Subí tu foto...</h6>
          <div class="custom-file form-group">
            <input type="file" class="custom-file-input text-center center-block input-file-ale" id="customFile" name="userPhoto" disabled>
            <label class="custom-file-label text-left" for="customFile">Elegir</label>
            <span></span>
          </div>

          <div class="form-group">
            <div class="col-xs-12">
              <br>
              <button class="btn btn-danger float-left" type="reset" id="botonDescartar" hidden>Descartar</button>
              <button class="btn btn-success float-right" type="submit" id="botonGuardar" hidden>Guardar cambios</button>
              <!-- <button class="btn" type="reset">Resetear</button> -->
            </div>
          </div>
        </form>


      </div>
      <!-- ACA TERMINA LA SECCION DE LA DERECHA DE LA PANTALLA (DATOS) -->
    </div><!-- termina row -->
  </div><!--/tab-content-->

<!-- TERMINA SECCION DE PERFIL -->
{{-- <script src="js/paises.js"></script> --}}

@endsection
