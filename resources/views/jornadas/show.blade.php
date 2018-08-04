    @extends('layouts.default')
     
    @section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Mostrar Registro</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('jornadas.index') }}"> Volver</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apellido:</strong>
                    {{ $jornada->apellido}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    {{ $jornada->nombre}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $jornada->email}}
                </div>
            </div>
        </div>
    @endsection