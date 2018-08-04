    @extends('layouts.default')
    @section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Agregar Nuevo Registro</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('jornadas.index') }}"> Volver</a>
                </div>
            </div>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Hubo algun inconveniente para agregar el registro.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {!! Form::open(array('route' => 'jornadas.store','method'=>'POST')) !!}
             @include('jornadas.form')
        {!! Form::close() !!}
    @endsection