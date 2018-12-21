@extends('template.base')

@section('title', 'Mis productos')

@section('content')

<h2 class="mt-3">Mis productos</h2>
<table class="table mt-4">

  <thead class="thead-dark">
    <tr>
      <th scope="col">Nro</th>
      <th scope="col">Producto</th>
      <th scope="col">Precio</th>
      <th scope="col">Marca</th>
      <th scope="col">Stock</th>
      <th scope="col">Categoria</th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
@foreach ($product as $oneProduct)

  @if ($oneProduct->user_id == Auth::user()->id)
    <tbody>
      <tr>
      <th scope="row">{{$oneProduct->id}}</th>
        <td>{{$oneProduct->name}}</td>
        <td>${{$oneProduct->price}}</td>
        <td>{{$oneProduct->brand->name}}</td>
        <td>{{$oneProduct->stock}}</td>
        <td>{{$oneProduct->category->name}}</td>
        <td><a href="/product/{{$oneProduct->id}}/edit" class="btn btn-warning" id="color-german">Editar</a></td>
          <td>
              <form action="/product/{{$oneProduct->id}}/destroy" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <button id="delete" type="submit" class="btn btn-danger">Borrar</button>
              </form>
        </td>
      </tr>
    </tbody>
  @endif

@endforeach
</table>

@endsection
