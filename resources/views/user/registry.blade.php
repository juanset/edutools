@extends('template.main')

@section('icon')
    <a class="navbar-brand" href="{{ url('/Public') }}">
        <img src="{{ asset('img/EduTools3.png') }}" width="auto" height="89px" alt="Logo Editor" title="Logo Editor">
    </a>
@endsection

@section('title','Registro')

@section('content')

    {{-- @include('messages.errors.errors')--}}

        <div class="well" style="margin-left: 10px">
            <div class="form-group">
                {!! Form::open(['route' => 'Store.store', 'class' => 'form-horizontal col-lg-offset-1','method' => 'POST']) !!}
                <legend>Registro</legend>
                <div class="form-group">

                    {!! Form::text('name',null,['class' => 'form-control col-lg-offset-1', 'placeholder' => 'Nombre completo']) !!}
                </div>
                <div class="form-group">

                    {!! Form::text('username',null,['class' => 'form-control col-lg-offset-1', 'placeholder' => 'Username']) !!}
                </div>
                <div class="form-group">

                    {!! Form::text('email',null,['class' => 'form-control col-lg-offset-1', 'placeholder' => 'example@gmail.com']) !!}
                </div>
                <div class="form-group">

                    {!! Form::password('password1',['class' => 'form-control col-lg-offset-1', 'placeholder' => 'password']) !!}
                </div>
                <div class="form-group">

                    {!! Form::password('password2',['class' => 'form-control col-lg-offset-1', 'placeholder' => 'confirmar password']) !!}
                </div>
                <div class="form-group">

                    {!! Form::submit('Registrarse', ['class' => 'btn btn-primary btn-info pull-right col-lg-offset-1']) !!}

                </div>
                {!! Form::close() !!}
            </div>
        </div>

@endsection

