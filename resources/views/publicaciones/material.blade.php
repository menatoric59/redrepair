
@extends('layouts.app')
@extends('publicaciones.partials.breadcrumbs')
@section('titulo')
    Materia didáctico
@endsection
@section('links')
<li><i class="fa fa-pencil-square"></i> Material didáctico</li>
@endsection
@section('content')
    <div class="container">
        @include('material.partials.tabla')
    </div>
@endsection