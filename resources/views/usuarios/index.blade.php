@extends('usuarios.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modelos creados con Laravel - Prueba</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert-container" id="contenedor-alert">
            <div class="alert success">
                <span class="closebtn">&times;</span>
                <p id="test">{{ $message }}</p>
            </div>
        </div>
    @elseif ($errors->any())
        <div class="alert-container" id="contenedor-alert">
            <div class="alert alert-danger">
                <span class="closebtn">&times;</span>
                <strong>Whoops!</strong> Hay problemas con los datos que ingresaste.<br><br>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        </div>
    @elseif ($message = Session::get('warning'))
        <div class="alert-container" id="contenedor-alert">
            <div class="alert warning">
                <span class="closebtn">&times;</span>
                <p id="test">{{ $message }}</p>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12 margin-tb header">
            <h4 class="pull-left nombre-ventana">Vista general de los usuarios</h4>
            @include('usuarios.create')
            <div class="pull-right">
                <a class="btn btn-agregar" data-toggle="modal" href="#createUsuario"> Crear Nuevo Usuario</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="panel-group" id="accordion">
                @foreach ($usuarios as $usuario)
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title" id="headingOne">
                            <p class="titulo-panel">{{ $usuario->apellidoP }} {{ $usuario->apellidoM }}
                                <button id="verUsuario" class="btn btn-left pull-right btn-usuario" data-toggle="collapse" data-target="#collapseUsuario" aria-expanded="true" aria-controls="collapseOne">
                                    <i id="iconoDesplegar" class="fas fa-chevron-circle-down desplegar"></i>
                                </button>
                            </p>
                        </div>
                    </div>
                    <div id="collapseUsuario" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th width="280px">Opciones</th>
                                </tr>
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $usuario->nombre }}</td>
                                    <td>{{ $usuario->apellidoP }}</td>
                                    <td>{{ $usuario->apellidoM }}</td>
                                    <td>
                                        <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST">

                                            <a class="btn btn-info" href="{{ route('usuarios.show',$usuario->id) }}">Mostrar</a>

                                            <a class="btn btn-primary" href="{{ route('usuarios.edit',$usuario->id) }}">Editar</a>

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/paneles.js') }}"></script>
    {!! $usuarios->links() !!}

@endsection