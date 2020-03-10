@extends('adminlte::page')

@section('title', 'Evaluacion del entorno')

@section('content_header')
    <h1>Lista de resultados</h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-body">
                <table class="table table-hover table-bordered table-striped table">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Calificación</th>
                        <th></th>
                    </thead>

                    <tbody>
                        @foreach ($environments as $environment)
                            <td>    
                                {{$environment->id}}       
                            </td>

                            <td>
                                {{$environment->name}}
                            </td>

                            <td>
                                {{$environment->email}}
                            </td>

                            <td>
                                {{$environment->calification}} / 288
                            </td>

                            <td>
                                <a href="{{route('environment.detail', ['id' => $environment->id])}}" class="btn btn-primary">Ver reporte</a>
                            </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection