@extends('template.base')

@section('title','pantalones')

@section('content')

 <div class="col-12">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
                      <li class="breadcrumb-item"><a href="">Pantalones</a></li>
                      <li class="breadcrumb-item"><a href="/product">Ver todos los productos</a></li>
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
                        <li class="list-group-item"><a href="{{$oneCategory->id}}" class="text-secondary">{{$oneCategory->name}}</a></li>
                    @endforeach
                      {{-- @foreach ($categories as $oneCategory)
                  <li class="list-group-item"><a href="categories/{{$oneCategory->id}}" class="text-secondary">{{$oneCategory->name}}</a></li>
                      @endforeach --}}
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
            @forelse ($products as $oneProduct)
                        <div class="col-12 col-md-6 col-lg-4 mb-5">
                            <div class="card zoom">
                                <a href="/product/{{$oneProduct->id}}">
                                    <img class="card-img-top" src="{{ Storage::url('products/' . $oneProduct->image) ?? 'default.png' }}" alt="Ropa">
                                </a>
                                <div class="card-body shadow-lg">
                                <h5 class="card-title"><a href="/product/{{$oneProduct->id}}" class="card-link text-dark" title="View Product">{{ $oneProduct->name }}</a></h5>
                                    <p class="card-text text-secondary mt-2">{{ $oneProduct->category->name ?? 'No tiene categoría' }}</p>
                                    <p class="card-text text-secondary">{{ $oneProduct->brand->name ?? 'No tiene marca' }}</p>
                                    <div class="row">
                                        <div class="col">
                                            <p class="card-text text-info">${{ $oneProduct->price }}</p>
                                        </div>
                                        <div class="col">
                                        <a href="/product/{{$oneProduct->id}}" class="btn btn-success btn-block" id="color-german">Comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
            @endforelse
                        <div class="col-12 justify-content-center">
                        </div>       
                    </div>
  </div>

@endsection