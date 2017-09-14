@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="jumbotron">
            <h1 class="text-center thin">Acceso</h1>
            <h2 class="text-center thin">Plataforma de la Red Mexciteg</h2>
            <p class="text-center">
                <a href="{{ route('social','google' ) }}" class="btn btn-danger btn-lg">
                    <i class="fa fa-google-plus-circle fa-2x"></i>
                    Acceder con la cuenta de Google
                </a>
            </p>

            {{--<div class="panel">
                <div class="panel-heading cyan darken-4 white-text"><i class="fa fa-sign-in"></i> Login</div>
                <div class="panel-body">
                    {!! Form::open(['url'=>'/login','method'=>'post','class'=>'form-horizontal']) !!}
                        {!! Field::email('email',null,['required']) !!}
                        {!! Field::password('password',['required']) !!}
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn cyan darken-4 white-text">
                                    Acceder
                                </button>
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
            --}}
        </div>

    </div>
</div>
@endsection
