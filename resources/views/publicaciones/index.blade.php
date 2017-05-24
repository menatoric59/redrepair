@extends('layouts.app')

@section('content')

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-book"></i> Publicaciones</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       
        <ul class="nav navbar-nav center-block">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
            </li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
             @if(auth()->check())
                <a  href="{{ route('publicacion.nueva') }}" 
                    class="btn btn-sm pull-right">+ Nueva
                </a>
            @endif
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<table class="data-table">
    <thead>
        <th></th>
        <th>Titulo</th>
      
        @if(auth()->check())
        <th></th>
        @endif
    </thead>
    <tbody>
        @foreach($publicaciones as $publicacion)
            
        <tr>
            <th>
                <img src="{{ $publicacion->imagen }}" alt="" class="img-responsive">    
            </th>
            <td>
                <em>{{ $publicacion['titulo']}}</em>,
                {{ $publicacion['ciudad'] }},
                {{ $publicacion['anio'] }},
                {{ $publicacion->tipo['nombre'] }}
            </td>
            @if(auth()->check())
            <td>
                <a href="{{ route('publicacion.editar',$publicacion->id)}}"
                    class="btn btn-sm cyan darken-4">
                    <i class="fa fa-pencil"> </i>
                </a>
            </td>
            @endif
        </tr>

        @endforeach
    </tbody>
</table>
    
@endsection()