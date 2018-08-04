    @extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Registracion de Personas a la Jornada</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('jornadas.create') }}"> Crear nuevo registro</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>Email</th>
                <th width="280px">Operation</th>
            </tr>
        @foreach ($jornadas as $jornada)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $jornada->nombre}}</td>
            <td>{{ $jornada->email}}</td>
            <td>
                <a class="btn btn-info" href="{{ route('jornadas.show',$jornada->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('jornadas.edit',$jornada->id) }}">Edit</a>
                {!! Form::open(['method' => 'DELETE','route' => ['jornadas.destroy', $jornada->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </table>
        {!! $jornadas->render() !!}
    @endsection