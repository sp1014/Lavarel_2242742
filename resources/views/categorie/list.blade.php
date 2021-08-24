@extends('layout')
@section('title','Categories')
@section('encabezado','Lista de marcas')
@section('content')

@if (session()->has('messageD'))
<div class="alert alert-danger">
    {{ session()->get('messageD') }}
</div>
@endif

@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif

<a href="{{ route('categorie.form') }}" class="btn btn-primary" >Nueva Categoria</a>
<table class="table table-striped table-hover">
<thead>
<tr>
<th>Name</th>
<th>Description</th>

<th></th>
</tr>
</thead>

<tbody>
@foreach ($list as $categorie)

<tr>
<td>{{ $categorie -> name }}</td>
<td>

    <a href="{{ route('categorieDelete', ['id' => $categorie->id]) }}" class="btn btn-danger">Borrar</a>
    <a href="{{ route('categorie.form', ['id'=>$categorie->id]) }}" class="btn btn-warning">Editar</a>
    <!--<a href="/product/delete/{{ $categorie->id }}" class="btn btn-danger">Borrar</a>-->

</td>
</tr>

@endforeach
</tbody>
</table>
@endsection
