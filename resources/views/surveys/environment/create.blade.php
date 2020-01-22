@extends('adminlte::page')

@section('title', 'Factores de riesgo')

@section('content_header')
    <h1>Resuelve le siguiente encuesta</h1>
@stop

@section('content')
    <div class="col-md-12">
        @include('partials.message')
        <div class="box box-primary">
            <form action="{{route('risk.store')}}" method="POST">
                @csrf
                <div class="box-header">
                    <h3 class="text-center text-bold">
                        CUESTIONARIO PARA IDENTIFICAR LOS FACTORES DE RIESGO PSICOSOCIAL EN LOS CENTROS DE TRABAJO
                    </h3>

                    <h4 class="text-center text-bold">
                        DATOS DEL TRABAJADOR.
                    </h4>

                    <div class="row form-group" style="margin-top: 70px;">
                        <div class="col-md-3 form-group">
                            <input type="text" name="name" class="form-control" placeholder="Nombre completo" required>
                        </div>

                        <div class="col-md-3 form-group">
                            <input type="email" name="email" class="form-control" placeholder="Correo electronico" required>
                        </div>

                        <div class="col-md-2 form-group">
                            <select name="gender" class="form-control" required>
                                <option value="">Selecciona un sexo</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>

                        <div class="col-md-2 form-group">
                            <input type="text" name="occupation" class="form-control" placeholder="Ocupación" required>
                        </div>

                        <div class="col-md-2 form-group">
                            <select name="type_of_contract" class="form-control">
                                <option value="">Selecciona tipo de contrato</option>
                                <option value="Indefinido">Indefinido</option>
                                <option value="Definido">Definido</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="box-body table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <th class="col-md-1 text-center">#</th>
                            <th class="col-md-7">Pregunta/Sección</th>
                            <th class="text-center">
                                Siempre
                            </th>
                            <th class="text-center">
                                Casi siempre
                            </th>
                            <th class="text-center">
                                Aveces
                            </th>
                            <th class="text-center">
                                Casi nunca
                            </th>
                            <th class="text-center">
                                Nunca
                            </th>
                        </thead>

                        <tbody>

                            <tr>
                                <td class="bg-primary"></td>
                                <td class="bg-primary">
                                    Para responder las preguntas siguientes considere las
                                    condiciones de su centro de trabajo, así como la cantidad y ritmo de trabajo.
                                </td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                            </tr>


                        </tbody>
                    </table>
                </div> 
                
                <div class="box-footer">
                    <button class="btn btn-primary col-md-offset-5" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@stop

@section('footer')
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.13
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
@stop