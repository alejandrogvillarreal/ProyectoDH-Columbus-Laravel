@extends('template.base')

@section('title','Contacto')

@section('content')
      <!-- SECCION DE LA IMAGEN -->
      <div class="col-12 col-lg-6 mt-3">
        <div class="map">
          <iframe class="shadow-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3309494285704!2d-58.38378924951871!3d-34.621076080359025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ea8781cb%3A0xb791570f7236c962!2sDigital+House!5e0!3m2!1ses!2sar!4v1541188280662" width="100%" height="550px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      <!-- FIN SECCION IMAGEN -->

      <!-- SECCION DEL PRODUCTO -->
      <div class="col-12 col-lg-6 add_to_cart_block">
        <h1 class="text-center mt-3">Contactanos</h1>
        <hr>
        <form class="login-form clearfix" action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-group">
              <label>Nombre</label>
              <input type="text" class="form-control" placeholder="" name="nombre" value="" id="name">
              <div class="invalid-feedback">
              </div>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" placeholder="" name="email" value="">
              <div class="invalid-feedback">
              </div>
            </div>
          </div>
          <textarea class="form-control" placeholder="Dejanos tu mensaje..." rows="8" name="texto"></textarea>
          <br>
          <button type="submit" class="btn btn-success float-right disabled">Contactar</button>
        </form>
      </div>
      <!-- FIN DE SECCION DEL PRODUCTO -->
  </div>
</div>

<!-- TERMINA SECCION DE CONTACTO -->

@endsection
