@extends('template.base')

@section('title','FAQ')

@section('content')

      <div class="col-md-12">
        <h1 class="text-center mt-3">Preguntas Frecuentes</h1>
        <hr>
      </div>
      <!-- ACA EMPIEZA EL CONTENEDOR CENTRAL DE LA PANTALLA (PREGUNTAS)-->
      <div class="col-md-8 offset-md-2">
        <div class="bd-example">
          <div id="accordion" aria-multiselectable="true" class="shadow-lg">
            <!-- INICIO PREGUNTA -->
            <div class="card shadow">
              <div class="card-header">
                <div>
                  <a data-toggle="collapse" href="#preguntas1" aria-expanded="false" class="collapsed">
                    <h3 class="link-german">Cómo comprar en Columbus?</h3>
                  </a>
                </div>
              </div>
              <div id="preguntas1" class="collapse" aria-expanded="false">
                <div class="card-block">
                  <p>
                    Comprar en Columbus es muy fácil y seguro.
                  </p>
                  <p>
                    A continuación te brindamos algunos datos importantes que pueden ayudarte al momento de realizar tu compra.
                    Recordá que también podemos despejar tus dudas en nuestro Centro de Atención al Cliente.
                  </p>
                  <ul>
                    <li><p>En primer lugar, tenés que registrarte en nuestro sitio.</p></li>
                    <li><p>Podés encontrar tus productos utilizando la barra de categorías localizada en la parte superior del sitio.</p></li>
                    <li><p>También podés realizar la búsqueda ingresando la palabra clave o marca en nuestro buscador.</p></li>
                    <li><p>Hace Click en la foto del producto que te gusta para acceder a los detalles del mismo.</p></li>
                    <li><p>Elegí tu talle y hacé click en Comprar.</p></li>
                    <li><p>Luego de agregar un producto al carrito de compras podés continuar comprando y sumar otros productos.</p></li>
                    <li><p>Por útimo, seleccioná el método de pago y envio y hace click en Finalizar compra.</p></li>
                  </ul>

                  </p>
                </div>
              </div>
            </div>
            <!-- FIN PREGUNTA -->

            <!-- INICIO PREGUNTA -->
            <div class="card shadow">
              <div class="card-header">
                <div>
                  <a data-toggle="collapse" href="#preguntas2" aria-expanded="false" class="collapsed">
                    <h3 class="link-german">Cómo creo una cuenta en Columbus?</h3>
                  </a>
                </div>
              </div>
              <div id="preguntas2" class="collapse" aria-expanded="false">
                <div class="card-block">
                  <p>
                    Para registrarte en Columbus hacé click <a href="/register">Acá</a>
                  </p>
                </div>
              </div>
            </div>

            <div class="card shadow">
              <div class="card-header">
                <div>
                  <a data-toggle="collapse" href="#preguntas3" aria-expanded="false" class="collapsed">
                    <h3 class="link-german">Dónde veo los detalles del producto?</h3>
                  </a>
                </div>
              </div>
              <div id="preguntas3" class="collapse" aria-expanded="false">
                <div class="card-block">
                  <p>
                    Te informamos que cada producto publicado en Columbus cuenta con una ficha de detalles, donde se informa material, medidas, color, etc. Podés acceder a esta información al pie del producto elegido.
                  </p>
                </div>
              </div>
            </div>
            <!-- FIN PREGUNTA -->


            <!-- INICIO PREGUNTA -->
            <div class="card shadow">
              <div class="card-header">
                <div>
                  <a data-toggle="collapse" href="#preguntas4" aria-expanded="false" class="collapsed">
                    <h3 class="link-german">Qué hago si olvidé mi contraseña?</h3>
                  </a>
                </div>
              </div>
              <div id="preguntas4" class="collapse" aria-expanded="false">
                <div class="card-block">
                  <p>
                    <a href="{{ route('password.request') }}">Hacé click Acá</a> para acceder a "Olvidé mi contraseña". Ingresá tu mail registrado para que te enviemos una nueva contraseña de acceso.
                    Para tu seguridad, en lugar de enviarte tu contraseña anterior crearemos una nueva.
                  </p>
                </div>
              </div>
            </div>
            <!-- FIN PREGUNTA -->

          </div>
        </div>
      </div>
      <!-- ACA TERMINA EL CONTENEDOR CENTRAL DE LA PANTALLA (PREGUNTAS)-->

@endsection
