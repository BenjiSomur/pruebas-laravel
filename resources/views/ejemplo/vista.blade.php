@extends('usuarios.layout')

@section('content')
<div class="row">
    <div class="col-md-8">
        @include('partial.message')

        <br>
        <br>
        <br>

        <div class="panel panel-default">
            <table clas="table table-bordered">
                <thead>
                    <th>Nombre del artículo</th>
                    <th>Nombre de la partida</th>
                    <th>Unidad de medida</th>
                </thead>

                <tbody>
                    @foreach($articulos as $articulo)
                        <tr>
                            <td>{{$articulo->descripcion}}</td>
                            <td>{{$articulo->descripcion_grupo}}</td>
                            <td>{{$articulo->unidad_medida}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
            </div>
        </div>
    </div>
</div>
@endsection