@extends('adminlte::page')

@section('title', 'Resultados')

@section('content_header')
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Sexo</th>
                        <th>Tipo de contrato</th>
                        <th>Empresa</th>
                        <th class="text-center">Resultado</th>
                    </thead>
            
                    <tbody>
                        @foreach ($surveys as $item)
                            <tr>
                                <td>
                                    {{ $item->id }}
                                </td>
            
                                <td>
                                    {{ $item->name}}
                                </td>
            
                                <td>
                                    {{ $item->email}}
                                </td>
            
                                <td>
                                    {{ $item->gender }}
                                </td>
            
                                <td>
                                    {{ $item->type_of_contract }}
                                </td>
            
                                <td>
                                    {{ $item->company->name }}
                                </td>
            
                                @if ($item->status == 'Requiere atención clinica')
                                    <td class="bg-yellow text-center">
                                        {{ $item->status}}
                                    </td>
                                @elseif($item->status == 'No requiere atención clinica')
                                    <td class="bg-green text-center">
                                        {{ $item->status}}
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
