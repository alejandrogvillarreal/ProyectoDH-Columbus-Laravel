@extends('template.base')

@section('title','Carrito')

@section('content')


<!-- SECCION DE CARRITO -->

<div class="col-sm-12">
  <table class="table table-hover">
    <thead>
      <tr>
          <th>Producto</th>
          <th>Cantidad</th>
          <th class="text-center">Precio</th>
          <th class="text-center">Total</th>
          <th> </th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td class="col-sm-8 col-md-6">
          <div class="media">
            <a class="thumbnail pull-left" href="#">
              <img class="media-object mr-3" src="" style="width: 72px; height: 72px;">
            </a>
            <div class="media-body my-auto">
              <h4 class="media-heading"><a href="">Remera</a></h4>
              <h5 class="media-heading">Marca: <a href="">RipCurl</a></h5>
              <!-- <span>Stock: </span><span class="text-success"><strong>En Stock</strong></span> -->
            </div>
          </div>
          </td>
          <td class="col-sm-1 col-md-1 text-center"><input type="number" class="form-control" value="3"></td>
          <td class="col-sm-1 col-md-1 text-center"><strong>$300</strong></td>
          <td class="col-sm-1 col-md-1 text-center"><strong>$900</strong></td>
          <td class="col-sm-1 col-md-1"><button type="button" class="btn btn-danger">Quitar</button></td>
        </tr>

        <tr>
            <td>   </td>
            <td>   </td>
            <td>   </td>
            <td><h5>Subtotal</h5></td>
            <td class="text-right"><h5><strong>$900</strong></h5></td>
        </tr>
        <tr>
            <td>   </td>
            <td>   </td>
            <td>   </td>
            <td><h5>Precio de envío</h5></td>
            <td class="text-right"><h5><strong>$100</strong></h5></td>
        </tr>
        <tr>
            <td>   </td>
            <td>   </td>
            <td>   </td>
            <td><h3>Total</h3></td>
            <td class="text-right"><h3><strong>$1000</strong></h3></td>
        </tr>
        <tr>
            <td>   </td>
            <td>   </td>
            <td>   </td>
            <td><a href="index.php"><button type="button" class="btn btn-default">Seguir comprando</button></a></td>
            <td><a href="index.php"><button type="button" class="btn btn-success ">Comprar</button></a></td>
        </tr>
    </tbody>
  </table>
</div>


<!-- TERMINA SECCION DE CARRITO -->

@endsection
