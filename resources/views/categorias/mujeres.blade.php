@extends('template.base')

@section('title','Categorias')

@section('content')

  <!-- ACA VAN LOS PRODUCTOS -->

          <div class="col-12">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                      <li class="breadcrumb-item"><a href="categorias.php">Mujeres</a></li>
                  </ol>
              </nav>
          </div>

  <!-- ACA TERMINA EL SEGUNDO MENU -->


        <!-- ESTE ES EL MENU LATERAL IZQUIERDO -->
          <div class="col-12 col-sm-4 col-md-3">
              <div class="card bg-light mb-3">
                  <div class="card-header bg-dark text-white text-uppercase">Categorias</div>
                  <ul class="list-group category_block">
                      @foreach ($categories as $oneCategory)
                  <li class="list-group-item"><a href="categories/{{$oneCategory->id}}" class="text-secondary">{{$oneCategory->name}}</a></li>
                      @endforeach
                  </ul>
              </div>
              <!--<div class="card bg-light mb-3">
                  <div class="card-header bg-success text-white text-uppercase">Last product</div>
                  <div class="card-body shadow-lg">
                      <img class="img-fluid" src="https://dummyimage.com/600x400/55595c/fff" />
                      <h5 class="card-title">Nombre del producto</h5>
                      <p class="card-text text-secondary">Breve descripción.</p>
                      <p class="bloc_left_price">$600</p>
                  </div>
              </div>-->
          </div>
          <!-- FIN DEL EL MENU LATERAL IZQUIERDO -->

              
          <!-- ACA EMPIEZA LA SECCION DERECHA DE LA PAGINA(PRODUCTOS) -->
          <div class="col">
              <div class="row">
                  <div class="col-12 col-md-6 col-lg-4 mb-5">
                      <div class="card zoom">
                          <a href="producto.php">
                            <img class="card-img-top" src="images/ropa/Hombre/Buzos/buzo-1.jpg" alt="Card image cap">
                          </a>
                          <div class="card-body shadow-lg">
                          <h4 class="card-title"><a href="" class="card-link text-dark" title="View Product">Nombre del producto</a></h4>
                              <p class="card-text text-secondary">Breve descripción.</p>
                              <div class="row">
                                  <div class="col">
                                      <p class="btn btn-dark btn-block">$600</p>
                                  </div>
                                  <div class="col">
                                      <a href="#" class="btn btn-success btn-block">Comprar</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 mb-5">
                      <div class="card zoom">
                          <a href="producto.php">
                            <img class="card-img-top" src="images/ropa/Hombre/Buzos/buzo-2.jpg" alt="Card image cap">
                          </a>
                          <div class="card-body shadow-lg">
                              <h4 class="card-title"><a href="producto.php" class="card-link text-dark" title="View Product">Nombre del producto</a></h4>
                              <p class="card-text text-secondary">Breve descripción.</p>
                              <div class="row">
                                  <div class="col">
                                      <p class="btn btn-dark btn-block">$600</p>
                                  </div>
                                  <div class="col">
                                      <a href="#" class="btn btn-success btn-block">Comprar</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 mb-5">
                      <div class="card zoom">
                          <a href="producto.php">
                            <img class="card-img-top" src="images/ropa/Hombre/Buzos/buzo-3.jpg" alt="Card image cap">
                          </a>
                          <div class="card-body shadow-lg">
                              <h4 class="card-title"><a href="producto.php" class="card-link text-dark" title="View Product">Nombre del producto</a></h4>
                              <p class="card-text text-secondary">Breve descripción.</p>
                              <div class="row">
                                  <div class="col">
                                      <p class="btn btn-dark btn-block">$600</p>
                                  </div>
                                  <div class="col">
                                      <a href="#" class="btn btn-success btn-block">Comprar</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 mb-5">
                      <div class="card zoom">
                          <a href="producto.php">
                            <img class="card-img-top" src="images/ropa/Hombre/Buzos/buzo-4.jpg" alt="Card image cap">
                          </a>
                          <div class="card-body shadow-lg">
                              <h4 class="card-title"><a href="producto.php" class="card-link text-dark" title="View Product">Nombre del producto</a></h4>
                              <p class="card-text text-secondary">Breve descripción.</p>
                              <div class="row">
                                  <div class="col">
                                      <p class="btn btn-dark btn-block">$600</p>
                                  </div>
                                  <div class="col">
                                      <a href="#" class="btn btn-success btn-block">Comprar</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 mb-5">
                      <div class="card zoom">
                          <a href="producto.php">
                            <img class="card-img-top" src="images/ropa/Hombre/Buzos/buzo-5.jpg" alt="Card image cap">
                          </a>
                          <div class="card-body shadow-lg">
                              <h4 class="card-title"><a href="producto.php" class="card-link text-dark" title="View Product">Nombre del producto</a></h4>
                              <p class="card-text text-secondary">Breve descripción.</p>
                              <div class="row">
                                  <div class="col">
                                      <p class="btn btn-dark btn-block">$600</p>
                                  </div>
                                  <div class="col">
                                      <a href="#" class="btn btn-success btn-block">Comprar</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-4 mb-5">
                      <div class="card zoom">
                          <a href="producto.php">
                            <img class="card-img-top" src="images/ropa/Hombre/Buzos/buzo-6.jpg" alt="Card image cap">
                          </a>
                          <div class="card-body shadow-lg">
                              <h4 class="card-title"><a href="producto.php" class="card-link text-dark" title="View Product">Nombre del producto</a></h4>
                              <p class="card-text text-secondary">Breve descripción.</p>
                              <div class="row">
                                  <div class="col">
                                      <p class="btn btn-dark btn-block">$600</p>
                                  </div>
                                  <div class="col">
                                      <a href="#" class="btn btn-success btn-block">Comprar</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <nav>
                          <ul class="pagination justify-content-center">
                              <li class="page-item disabled">
                                  <a class="page-link" href="#" tabindex="-1">Anterior</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item active">
                                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                  <a class="page-link" href="#">Siguiente</a>
                              </li>
                          </ul>
                      </nav>
                  </div>
              </div>
          </div>
          <!-- ACA TERMINA LA SECCION DERECHA DE LA PAGINA(PRODUCTOS) -->

  <!-- ACA TERMINA DE SECCION DE LOS PRODUCTOS -->


@endsection
