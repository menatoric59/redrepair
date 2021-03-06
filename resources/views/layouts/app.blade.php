@extends('layouts.limpio')
@section('menu')
    <nav class="navbar navbar-default navbar-static-top navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ Html::image('assets/index/logoRed.jpg','',['height'=>'50px']) }}
                    {{-- config('app.name', 'OllinSystems') --}}
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                
                {!! Menu::make( config('general.menuPagina'),'nav navbar-nav navbar-left' ) !!}
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        {{ Html::image('assets/index/conacytAzul.png','',['height'=>'50px']) }}
                       
                    @else
                        <li class="dropdown">
                            <a  href="#" class="dropdown-toggle" 
                                data-toggle="dropdown" role="button" 
                                aria-expanded="false">
                                {{ Html::image( auth()->user()->avatar,'',['height'=>'33px','class'=>'img-circle']) }}
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                {{--
                                <li>
                                    <a href="{{ route('avisos') }}">Avisos</a>
                                </li>
                                --}}
                                <li>
                                    <a href="{{route('entradas',['avisos','de-la-red'])}}">Avisos</a>
                                </li>
                                <li>
                                    <a href="{{ route('reuniones') }}">Reuniones</a>
                                </li>
                                @if( auth()->user()->type == 'superadmin')
                                <li>
                                    <a href="{{ route('importar-estados') }}">Importar estados</a>
                                </li>
                                <li>
                                    <a href="{{ route('importar-integrantes') }}">Importar integrantes</a>
                                </li>
                                @endif
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Salir
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>

                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

@endsection
