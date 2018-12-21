@extends('template.base')

@section('title','Producto')

@section('customJS')

  <script>

    $(document).ready(function(){
        var quantity = 1;

        $('.quantity-right-plus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            $('#quantity').val(quantity + 1);
        });

        $('.quantity-left-minus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            if(quantity > 1){
                $('#quantity').val(quantity - 1);
            }
        });

    });
  </script>


@endsection

@section('content')



<div class="col-12">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/product">Ver todos los productos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Producto</li>
        </ol>
    </nav>
</div>

<!-- ACA VAN LOS PRODUCTOS -->


<!-- SECCION DE LA IMAGEN -->
<div class="col-12 col-lg-6">
    <div class="card bg-light">
        <div class="card-body">
            {{-- <a href="" data-toggle="modal" data-target="#productModal"> --}}
                <!-- <img class="img-fluid" src="https://dummyimage.com/800x800/55595c/fff" /> -->
                <img class="img-fluid img-thumbnail rounded mx-auto d-block shadow-lg" src="{{ Storage::url('products/' . $product->image)}}"/>
            {{-- </a> --}}
        </div>
    </div>
</div>
<!-- FIN SECCION IMAGEN -->

<!-- SECCION DEL PRODUCTO -->
<div class="col-12 col-lg-6 add_to_cart_block">
    <div class="card bg-light">
        <div class="card-body">

           <h1>{{$product->name}}</h1>
            <span class="label label-primary">Categoria: {{$product->category->name}}</span>
            {{-- <span class="">Nro. 1960140180</span> --}}
              <p class="description">
                Stock: {{$product->stock}}
              </p>
              <p class="description">
                Marca: {{$product->brand->name}}
              </p>
            <h2 class="product-price">${{$product->price}}</h2>
            <hr>
            <div>
                <div class="form-group">
                    <label for="colors">Talle:</label>
                    <select class="custom-select" id="colors">
                        <option selected>Elegir..</option>
                        <option value="1">S</option>
                        <option value="2">M</option>
                        <option value="3">L</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Cantidad:</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                -
                            </button>
                        </div>
                        <input type="text" class="form-control"  id="quantity" name="quantity" min="1" max="100" value="1">
                        <div class="input-group-append">
                            <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                +
                            </button>
                        </div>
                    </div>
                </div>
                <a href="/cart" class="btn btn-success disabled btn-lg btn-block text-uppercase" id="color-german">Agregar al carrito</a>
            </div>
        </div>
    </div>
</div>
<!-- FIN DE SECCION DEL PRODUCTO -->

<!-- ACA TERMINA DE SECCION DE LOS PRODUCTOS -->

@endsection
