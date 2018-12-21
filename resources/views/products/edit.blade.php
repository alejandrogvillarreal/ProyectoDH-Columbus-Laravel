@extends('template.base')

@section('title', 'Editar')

@section('content')

	<h2 class="col-md-12 mt-3">Editar producto: "{{ $product->name }}"</h2>
	
		<img class="mb-4 mt-4 ml-4" src="{{ Storage::url('products/' . $product->image) }}" width="225" height="225">
	<form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
		@csrf
		{{ method_field('PUT') }}
		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<label for="name">Nombre:</label>
					<input type="text" name="name" id="name"
						class="form-control {{ $errors->has('name') ? 'is-invalid' : null }}"
						value="{{ old('name', $product->name) }}"
					>
					<span class="invalid-feedback">
						@if ($errors->has('name'))
							{{ $errors->first('name') }}
						@endif
					</span>
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label for="price">Precio:</label>
					<input type="text" name="price" id="price"
						class="form-control {{ $errors->has('price') ? 'is-invalid' : null }}"
						value="{{ old('price', $product->price) }}"
					>
					<span class="invalid-feedback">
						{{ $errors->has('price') ? $errors->first('price') : null}}
					</span>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<label for="brand_id">Marca:</label>
					<select name="brand_id"  id="brand_id"
						class="form-control {{ $errors->has('brand_id') ? 'is-invalid' : null }}"
					>
						<option value="">Seleccioná</option>
						@foreach ($brands as $oneBrand)
							<option value="{{ $oneBrand->id }}"
								{{ $product->brand_id == $oneBrand->id ? 'selected' : null }}
							>
								{{ $oneBrand->name }}
							</option>
						@endforeach
					</select>
					<span class="invalid-feedback">
						{{ $errors->has('brand_id') ? $errors->first('brand_id') : null}}
					</span>
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label for="category_id">Categoria:</label>
					<select name="category_id" id="category_id"
						class="form-control {{ $errors->has('category_id') ? 'is-invalid' : null }}"
					>
						<option value="">Seleccioná</option>
						@foreach ($categories as $oneCategory)
							<option value="{{ $oneCategory->id }}"
								{{ $product->category_id == $oneCategory->id ? 'selected' : null }}
							>
								{{ $oneCategory->name }}
							</option>
						@endforeach
					</select>
					<span class="invalid-feedback">
						{{ $errors->has('category_id') ? $errors->first('category_id') : null}}
					</span>
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label for="color">Color:</label>
					<select name="color" id="color"
						class="form-control {{ $errors->has('color') ? 'is-invalid' : null }}"
					>
						<option value="">Seleccioná</option>
						@foreach ($colors as $oneColor)
							<option value="{{ $oneColor->id }}"
								{{ old('color') == $oneColor->id ? 'selected' : null }}
							>
								{{ $oneColor->name }}
							</option>
						@endforeach
					</select>
					<span class="invalid-feedback">
						{{ $errors->has('color') ? $errors->first('color') : null}}
					</span>
				</div>
			</div>
			<div class="col-6">
				<div class="form-group mt-4">
						@foreach ($subcategories as $oneSubcategory)
							<div class="form-check">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
								<label class="form-check-label" for="">
									{{$oneSubcategory->name}}
								</label>
							</div>
						@endforeach
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					<label for="category_id">Subí una imagen:</label>
					<div class="custom-file">
					   <input type="file"  id="image" name="image"
							class="custom-file-input {{ $errors->has('image') ? 'is-invalid' : null }}"
						>
					   <label class="custom-file-label" for="image">Elegí una imagen</label>

						<span class="invalid-feedback">
							{{ $errors->has('image') ? $errors->first('image') : null}}
						</span>
					 </div>
				</div>
			</div>
		</div>

		<button type="submit" class="btn btn-success">Guardar cambios</button>
	</form>
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <script>
            
              $('#image').on('change',function(){
                  //get the file name
                  var fileName = $(this).val();
                  //replace the "Choose a file" label
                  $(this).next('.custom-file-label').html(fileName);
              })
  </script>
@endsection
