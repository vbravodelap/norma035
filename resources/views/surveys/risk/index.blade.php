@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Lista de resultados</h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-body table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Empresa
                            </th>
                            <th>
                                Calificación
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($riskSurveys as $item)
                            <tr>
                                <td>
                                    {{$item->id}}
                                </td>
                                <td>
                                    {{$item->name}}
                                </td>
                                <td>
                                    {{$item->user_id}}
                                </td>
                                <td>
                                    {{$item->calification}}
                                </td>

                                <td class="col-md-1">
                                    <a href="{{route('risk.detail', ['id' => $item->id])}}" class="btn btn-primary">Ver reporte</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
