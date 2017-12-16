
@extends('layouts.app')
@section('titulo')
    Reuniones de la Red Mexciteg
@endsection
@section('content')
    @extends('reuniones.partials.breadcrumbs')

    <div class="container">
        @if(auth()->check())
            <a href="{{ route('reuniones.nuevo') }}" class="btn purple lighten-2">
                <i class="fa fa-plus-circle"></i>
                Nueva
            </a>
        @endif
        @include('reuniones.partials.tabla')
        @include('reuniones.partials.scripts')
    </div>


@endsection