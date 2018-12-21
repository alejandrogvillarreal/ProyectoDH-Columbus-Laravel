@extends('template.base')

@section('title','Home')

@section('content')


<!-- ESTE ES EL CARROUSEL -->

<div class="container">
  <div class="slider_ale col-md-12">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 shadow" src="images/foto1.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 shadow" src="images/foto2.jpeg" alt="Second slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
  </div>
</div>

<!-- ACA TERMINA DEL CARROUSEL -->


<!-- ACA VAN LOS PRODUCTOS -->

<div class="container">
  <div class="row">
    <div class="col-md-12 mb-5 mt-3">
      <h1 class="text-center">Categorias</h1>
      <hr>
    </div>
  </div>
</div>

<!-- ACA VA LA SECCION DE MUJERES -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center">Mujeres</h1>
      <hr>
    </div>
    <div class="d-flex flex-wrap justify-content-around">
      <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 zoom mb-4">
        <h5 class="text-center">Sandalias</h5>
        <a href="categories/1">
          <img class="mx-auto d-block shadow-lg rounded" src="images/ropa/Mujer/Categorias/sandalias.jpg" alt="Sandalias" />
        </a>

      </div>

      <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 zoom mb-4">
        <h5 class="text-center">Remeras</h5>
        <a href="categories/3">
          <img class="mx-auto d-block shadow-lg rounded" src="images/ropa/Mujer/Categorias/remeras.jpg" alt="Remeras" />
        </a>

      </div>

      <!-- <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 zoom mb-4">
        <h5 class="text-center">Camperas</h5>
        <a href="categories/1">
          <img class="mx-auto d-block shadow-lg rounded zoom" src="https://dafitistaticar-a.akamaihd.net/cms/promo_750ndu_170718.jpg" alt="Camperas" />
        </a>

      </div> -->

      <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 zoom mb-4">
        <h5 class="text-center">Pantalones</h5>
        <a href="categories/7">
          <!-- <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/1009-onsitemasc-camisasjeanspant-25offextra.jpg" alt="Pantalones" /> -->
          <img class="mx-auto d-block shadow-lg rounded" src="images/ropa/Mujer/Categorias/pantalones.jpg" alt="Pantalones" />
        </a>

      </div>

      <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 zoom mb-4">
        <h5 class="text-center">Camisas</h5>
        <a href="categories/2">
          <img class="mx-auto d-block shadow-lg rounded" src="images/ropa/Mujer/Categorias/camisas.jpg" alt="Camisas" />
        </a>

      </div>

      <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 zoom mb-4">
        <h5 class="text-center">Blusas</h5>
        <a href="categories/8">
          <img class="mx-auto d-block shadow-lg rounded" src="images/ropa/Mujer/Categorias/blusas.jpg" alt="Blusas" />
        </a>

      </div>

      <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 zoom mb-4">
        <h5 class="text-center">Vestidos</h5>
        <a href="categories/9">
          <img class="mx-auto d-block shadow-lg rounded" src="images/ropa/Mujer/Categorias/vestidos.jpg" alt="Vestidos" />
        </a>

      </div>
    </div>
  </div>
</div>
  <!-- CATEGORIAS DE MUJERES -->

  <!-- CATEGORIAS DE HOMBRES -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Hombres</h1>
        <hr>
      </div>
      <div class="d-flex flex-wrap justify-content-around">
        <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 zoom mb-4">
          <h5 class="text-center">Pantalones</h5>
          <a href="categories/7">
            <!-- <img class="mx-auto d-block" src="https://dafitistaticar-a.akamaihd.net/cms/1009-onsitemasc-camisasjeanspant-25offextra.jpg" alt="Pantalones" /> -->
            <img class="mx-auto d-block shadow-lg rounded zoom" src="images/ropa/Hombre/Categorias/pantalones.jpg" alt="Pantalones" />
          </a>

        </div>

        <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 zoom mb-4">
          <h5 class="text-center">Camisas</h5>
          <a href="categories/2">
            <img class="mx-auto d-block shadow-lg rounded zoom" src="images/ropa/Hombre/Categorias/camisas.jpg" alt="Camisas" />
          </a>

        </div>

        <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 zoom mb-4">
          <h5 class="text-center">Zapatillas</h5>
          <a href="categories/4">
            <img class="mx-auto d-block shadow-lg rounded zoom" src="images/ropa/Hombre/Categorias/zapatillas.jpg" alt="Zapatillas" />
          </a>

        </div>

        <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 zoom mb-4">
          <h5 class="text-center">Buzos</h5>
          <a href="categories/6">
            <img class="mx-auto d-block shadow-lg rounded zoom" src="images/ropa/Hombre/Categorias/buzos.jpg" alt="Buzos" />
          </a>

        </div>

        <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 zoom mb-4">
          <h5 class="text-center">Remeras</h5>
          <a href="categories/3">
            <img class="mx-auto d-block shadow-lg rounded zoom" src="images/ropa/Hombre/Categorias/remeras.jpg" alt="Remeras" />
          </a>

        </div>
      </div>
    </div>
  </div>
<!-- TERMINA LA CATEGORIA DE HOMBRES -->

<!-- ACA TERMINA DE SECCION DE LOS PRODUCTOS -->


@endsection
