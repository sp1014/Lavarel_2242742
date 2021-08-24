@extends('layout')
@section('title', $categorie ->id ? 'Actualizar Categoria' : 'Nueva Categoria' )
@section('encabezado',$categorie ->id ? 'Actualizar Categoria' : 'Nueva Categoria')
@section('content')


   <form action="{{ route('categorie.save') }}" method="POST">
@csrf
<input type="hidden" name="id" value="{{ old('id') ? old('id') :  $categorie->id }}">
    <div class="col-md-4 mb-3">
        <label for="name">Name</label><br/>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                </div>
          <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ? old('name') :  $categorie->name  }}">

        </div>
        @error('name')
        <p class="text text-danger">
            {{ $message }}
        </p>
        @enderror
      </div>

      <div class="col-md-4 mb-3">
        <label for="description">Descripcion</label><br/>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                </div>
          <input type="text" class="form-control" id="description" name="description" value="{{ old('description') ? old('description') :  $categorie->description  }}">

        </div>
        @error('description')
        <p class="text text-danger">
            {{ $message }}
        </p>
        @enderror
      </div>



      <br/><a href="/categories" class="btn btn-danger ">Cancelar</Button></a>

     <button class="btn btn-success ">Guardar</Button>

   </form>


@endsection
