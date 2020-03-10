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
                        <div class="col-md-2 form-group">
                            <input type="text" name="name" class="form-control" placeholder="Nombre completo" required>
                        </div>

                        <div class="col-md-2 form-group">
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
                            <select name="company_id" class="form-control" required>
                                <option value="">Seleciona empresa</option>
                                @foreach ($companies as $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-2 form-group">
                            <select name="type_of_contract" class="form-control">
                                <option value="">Selecciona contrato</option>
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
                                    Para responder las preguntas siguientes considere las condiciones de su centro de trabajo, así como la cantidad y ritmo de trabajo.
                                </td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                            </tr>

                            <tr>
                                <td class="text-center">1</td>
                                <td>Mi trabajo me exige hacer mucho esfuerzo físico.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_1" value="4">
                                </td>

                                <td class="text-center">
                                    <input required type="radio" name="question_1" value="3">
                                </td>

                                <td class="text-center">
                                    <input required type="radio" name="question_1" value="2">
                                </td>

                                <td class="text-center">
                                    <input required type="radio" name="question_1" value="1">
                                </td>

                                <td class="text-center">
                                    <input required type="radio" name="question_1" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">2</td>
                                <td>Me preocupa sufrir un accidente en mi trabajo.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_2" value="4">
                                </td>
    
                                <td class="text-center">
                                    <input required type="radio" name="question_2" value="3">
                                </td>
    
                                <td class="text-center">
                                    <input required type="radio" name="question_2" value="2">
                                </td>
    
                                <td class="text-center">
                                    <input required type="radio" name="question_2" value="1">
                                </td>
    
                                <td class="text-center">
                                    <input required type="radio" name="question_2" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">3</td>
                                <td>Considero que las actividades que realizo son peligrosas.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_3" value="4">
                                </td>
        
                                <td class="text-center">
                                    <input required type="radio" name="question_3" value="3">
                                </td>
        
                                <td class="text-center">
                                    <input required type="radio" name="question_3" value="2">
                                </td>
        
                                <td class="text-center">
                                    <input required type="radio" name="question_3" value="1">
                                </td>
        
                                <td class="text-center">
                                    <input required type="radio" name="question_3" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">4</td>
                                <td>Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_4" value="4">
                                </td>
            
                                <td class="text-center">
                                    <input required type="radio" name="question_4" value="3">
                                </td>
            
                                <td class="text-center">
                                    <input required type="radio" name="question_4" value="2">
                                </td>
            
                                <td class="text-center">
                                    <input required type="radio" name="question_4" value="1">
                                </td>
            
                                <td class="text-center">
                                    <input required type="radio" name="question_4" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">5</td>
                                <td>Por la cantidad de trabajo que tengo debo trabajar sin parar.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_5" value="4">
                                </td>
                
                                <td class="text-center">
                                    <input required type="radio" name="question_5" value="3">
                                </td>
                
                                <td class="text-center">
                                    <input required type="radio" name="question_5" value="2">
                                </td>
                
                                <td class="text-center">
                                    <input required type="radio" name="question_5" value="1">
                                </td>
                
                                <td class="text-center">
                                    <input required type="radio" name="question_5" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">6</td>
                                <td>Considero que es necesario mantener un ritmo de trabajo acelerado.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_6" value="4">
                                </td>
                    
                                <td class="text-center">
                                    <input required type="radio" name="question_6" value="3">
                                </td>
                    
                                <td class="text-center">
                                    <input required type="radio" name="question_6" value="2">
                                </td>
                    
                                <td class="text-center">
                                    <input required type="radio" name="question_6" value="1">
                                </td>
                    
                                <td class="text-center">
                                    <input required type="radio" name="question_6" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">7</td>
                                <td>Mi trabajo exige que esté muy concentrado.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_7" value="4">
                                </td>
                        
                                <td class="text-center">
                                    <input required type="radio" name="question_7" value="3">
                                </td>
                        
                                <td class="text-center">
                                    <input required type="radio" name="question_7" value="2">
                                </td>
                        
                                <td class="text-center">
                                    <input required type="radio" name="question_7" value="1">
                                </td>
                        
                                <td class="text-center">
                                    <input required type="radio" name="question_7" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">8</td>
                                <td>Mi trabajo requiere que memorice mucha información.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_8" value="4">
                                </td>
                            
                                <td class="text-center">
                                    <input required type="radio" name="question_8" value="3">
                                </td>
                            
                                <td class="text-center">
                                    <input required type="radio" name="question_8" value="2">
                                </td>
                            
                                <td class="text-center">
                                    <input required type="radio" name="question_8" value="1">
                                </td>
                            
                                <td class="text-center">
                                    <input required type="radio" name="question_8" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">9</td>
                                <td>Mi trabajo exige que atienda varios asuntos al mismo tiempo.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_9" value="4">
                                </td>
                                
                                <td class="text-center">
                                    <input required type="radio" name="question_9" value="3">
                                </td>
                                
                                <td class="text-center">
                                    <input required type="radio" name="question_9" value="2">
                                </td>
                                
                                <td class="text-center">
                                    <input required type="radio" name="question_9" value="1">
                                </td>
                                
                                <td class="text-center">
                                    <input required type="radio" name="question_9" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="bg-primary"></td>
                                <td class="bg-primary">
                                    Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene.
                                </td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                            </tr>

                            <tr>
                                <td class="text-center">10</td>
                                <td>En mi trabajo soy responsable de cosas de mucho valor.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_10" value="4">
                                </td>
                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_10" value="3">
                                </td>
                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_10" value="2">
                                </td>
                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_10" value="1">
                                </td>
                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_10" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">11</td>
                                <td>Respondo ante mi jefe por los resultados de toda mi área de trabajo.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_11" value="4">
                                </td>
                                        
                                <td class="text-center">
                                    <input required type="radio" name="question_11" value="3">
                                </td>
                                        
                                <td class="text-center">
                                    <input required type="radio" name="question_11" value="2">
                                </td>
                                        
                                <td class="text-center">
                                    <input required type="radio" name="question_11" value="1">
                                </td>
                                        
                                <td class="text-center">
                                    <input required type="radio" name="question_11" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">12</td>
                                <td>En mi trabajo me dan órdenes contradictorias.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_12" value="4">
                                </td>
                                            
                                <td class="text-center">
                                    <input required type="radio" name="question_12" value="3">
                                </td>
                                            
                                <td class="text-center">
                                    <input required type="radio" name="question_12" value="2">
                                </td>
                                            
                                <td class="text-center">
                                    <input required type="radio" name="question_12" value="1">
                                </td>
                                            
                                <td class="text-center">
                                    <input required type="radio" name="question_12" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">13</td>
                                <td>Considero que en mi trabajo me piden hacer cosas innecesarias.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_13" value="4">
                                </td>
                                                
                                <td class="text-center">
                                    <input required type="radio" name="question_13" value="3">
                                </td>
                                                
                                <td class="text-center">
                                    <input required type="radio" name="question_13" value="2">
                                </td>
                                                
                                <td class="text-center">
                                    <input required type="radio" name="question_13" value="1">
                                </td>
                                                
                                <td class="text-center">
                                    <input required type="radio" name="question_13" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="bg-primary"></td>
                                <td class="bg-primary">
                                    Las preguntas siguientes están relacionadas con el tiempo destinado a su trabajo y sus responsabilidades familiares.
                                </td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                            </tr>

                            <tr>
                                <td class="text-center">14</td>
                                <td>Trabajo horas extras más de tres veces a la semana.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_14" value="4">
                                </td>
                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_14" value="3">
                                </td>
                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_14" value="2">
                                </td>
                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_14" value="1">
                                </td>
                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_14" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">15</td>
                                <td>Mi trabajo me exige laborar en días de descanso, festivos o fines de semana.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_15" value="4">
                                </td>
                                                        
                                <td class="text-center">
                                    <input required type="radio" name="question_15" value="3">
                                </td>
                                                        
                                <td class="text-center">
                                    <input required type="radio" name="question_15" value="2">
                                </td>
                                                        
                                <td class="text-center">
                                    <input required type="radio" name="question_15" value="1">
                                </td>
                                                        
                                <td class="text-center">
                                    <input required type="radio" name="question_15" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">16</td>
                                <td>Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_16" value="4">
                                </td>
                                                            
                                <td class="text-center">
                                    <input required type="radio" name="question_16" value="3">
                                </td>
                                                            
                                <td class="text-center">
                                    <input required type="radio" name="question_16" value="2">
                                </td>
                                                            
                                <td class="text-center">
                                    <input required type="radio" name="question_16" value="1">
                                </td>
                                                            
                                <td class="text-center">
                                    <input required type="radio" name="question_16" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">17</td>
                                <td>Pienso en las actividades familiares o personales cuando estoy en mi trabajo.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_17" value="4">
                                </td>
                                                                
                                <td class="text-center">
                                    <input required type="radio" name="question_17" value="3">
                                </td>
                                                                
                                <td class="text-center">
                                    <input required type="radio" name="question_17" value="2">
                                </td>
                                                                
                                <td class="text-center">
                                    <input required type="radio" name="question_17" value="1">
                                </td>
                                                                
                                <td class="text-center">
                                    <input required type="radio" name="question_17" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="bg-primary"></td>
                                <td class="bg-primary">
                                        Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo.
                                </td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                            </tr>

                            <tr>
                                <td class="text-center">18</td>
                                <td>Mi trabajo permite que desarrolle nuevas habilidades.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_18" value="0">
                                </td>
                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_18" value="1">
                                </td>
                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_18" value="2">
                                </td>
                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_18" value="3">
                                </td>
                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_18" value="4" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">19</td>
                                <td>En mi trabajo puedo aspirar a un mejor puesto.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_19" value="0">
                                </td>
                                                                        
                                <td class="text-center">
                                    <input required type="radio" name="question_19" value="1">
                                </td>
                                                                        
                                <td class="text-center">
                                    <input required type="radio" name="question_19" value="2">
                                </td>
                                                                        
                                <td class="text-center">
                                    <input required type="radio" name="question_19" value="3">
                                </td>
                                                                        
                                <td class="text-center">
                                    <input required type="radio" name="question_19" value="4" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">20</td>
                                <td>Durante mi jornada de trabajo puedo tomar pausas cuando las necesito.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_20" value="0">
                                </td>
                                                                            
                                <td class="text-center">
                                    <input required type="radio" name="question_20" value="1">
                                </td>
                                                                            
                                <td class="text-center">
                                    <input required type="radio" name="question_20" value="2">
                                </td>
                                                                            
                                <td class="text-center">
                                    <input required type="radio" name="question_20" value="3">
                                </td>
                                                                            
                                <td class="text-center">
                                    <input required type="radio" name="question_20" value="4" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">21</td>
                                <td>Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_21" value="0">
                                </td>
                                                                                
                                <td class="text-center">
                                    <input required type="radio" name="question_21" value="1">
                                </td>
                                                                                
                                <td class="text-center">
                                    <input required type="radio" name="question_21" value="2">
                                </td>
                                                                                
                                <td class="text-center">
                                    <input required type="radio" name="question_21" value="3">
                                </td>
                                                                                
                                <td class="text-center">
                                    <input required type="radio" name="question_21" value="4" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">22</td>
                                <td>Puedo cambiar el orden de las actividades que realizo en mi trabajo.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_22" value="0">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_22" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_22" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_22" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_22" value="4" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="bg-primary"></td>
                                <td class="bg-primary">
                                    Las preguntas siguientes están relacionadas con la capacitación e información que recibe sobre su trabajo.
                                </td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                            </tr>

                            <tr>
                                <td class="text-center">23</td>
                                <td>Me informan con claridad cuáles son mis funciones.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_23" value="0">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_23" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_23" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_23" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_23" value="4" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">24</td>
                                <td>Me explican claramente los resultados que debo obtener en mi trabajo.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_24" value="0">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_24" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_24" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_24" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_24" value="4" required>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="text-center">25</td>
                                <td>Me informan con quién puedo resolver problemas o asuntos de trabajo.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_25" value="0">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_25" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_25" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_25" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_25" value="4" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">26</td>
                                <td>Me permiten asistir a capacitaciones relacionadas con mi trabajo.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_26" value="0">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_26" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_26" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_26" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_26" value="4" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">27</td>
                                <td>Recibo capacitación útil para hacer mi trabajo.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_27" value="0">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_27" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_27" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_27" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_27" value="4" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">28</td>
                                <td>Mi jefe tiene en cuenta mis puntos de vista y opiniones.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_28" value="0">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_28" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_28" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_28" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_28" value="4" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">29</td>
                                <td>Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_29" value="0">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_29" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_29" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_29" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_29" value="4" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">30</td>
                                <td>Puedo confiar en mis compañeros de trabajo.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_30" value="0">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_30" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_30" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_30" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_30" value="4" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">31</td>
                                <td>Cuando tenemos que realizar trabajo de equipo los compañeros colaboran.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_31" value="0">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_31" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_31" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_31" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_31" value="4" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">32</td>
                                <td>Mis compañeros de trabajo me ayudan cuando tengo dificultades.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_32" value="0">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_32" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_32" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_32" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_32" value="4" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">33</td>
                                <td>En mi trabajo puedo expresarme libremente sin interrupciones.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_33" value="0">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_33" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_33" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_33" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_33" value="4" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">34</td>
                                <td>Recibo críticas constantes a mi persona y/o trabajo.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_34" value="4">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_34" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_34" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_34" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_34" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">35</td>
                                <td>Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_35" value="4">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_35" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_35" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_35" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_35" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">36</td>
                                <td>Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_36" value="4">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_36" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_36" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_36" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_36" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">37</td>
                                <td>Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_37" value="4">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_37" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_37" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_37" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_37" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">38</td>
                                <td>Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_38" value="4">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_38" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_38" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_38" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_38" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">39</td>
                                <td>Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo.</td>
                                <td class="text-center">
                                    <input required type="radio" name="question_39" value="4">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_39" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_39" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_39" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required type="radio" name="question_39" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">40</td>
                                <td>He presenciado actos de violencia en mi centro de trabajo.</td>
                                <td class="text-center">
                                    <input required id="question_40" type="radio" name="question_40" value="4">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required id="question_40" type="radio" name="question_40" value="3">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required id="question_40" type="radio" name="question_40" value="2">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required id="question_40" type="radio" name="question_40" value="1">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input required id="question_40" type="radio" name="question_40" value="0" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="bg-primary"></td>
                                <td class="bg-primary">
                                    Las siguientes preguntas son opcionales, contestalas si en tu trabajo se requiere atención al cliente.
                                </td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                            </tr>

                            <tr>
                                <td class="text-center">41</td>
                                <td>Atiendo clientes o usuarios muy enojados.</td>
                                <td class="text-center">
                                    <input required id="question_41" type="radio" name="question_41" value="4">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_41" type="radio" name="question_41" value="3">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_41" type="radio" name="question_41" value="2">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_41" type="radio" name="question_41" value="1">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_41" type="radio" name="question_41" value="0">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">42</td>
                                <td>Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas.</td>
                                <td class="text-center">
                                    <input required id="question_42" type="radio" name="question_42" value="4">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_42" type="radio" name="question_42" value="3">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_42" type="radio" name="question_42" value="2">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_42" type="radio" name="question_42" value="1">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_42" type="radio" name="question_42" value="0">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">43</td>
                                <td>Para hacer mi trabajo debo demostrar sentimientos distintos a los míos.</td>
                                <td class="text-center">
                                    <input required id="question_43" type="radio" name="question_43" value="4">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_43" type="radio" name="question_43" value="3">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_43" type="radio" name="question_43" value="2">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_43" type="radio" name="question_43" value="1">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_43" type="radio" name="question_43" value="0">
                                </td>
                            </tr>

                            <tr>
                                <td class="bg-primary"></td>
                                <td class="bg-primary">
                                    Las siguientes preguntas están relacionadas con las actitudes de los trabajadores que supervisan.</td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                                <td class="bg-primary"></td>
                            </tr>

                            <tr>
                                <td class="text-center">44</td>
                                <td>Comunican tarde los asuntos de trabajo.</td>
                                <td class="text-center">
                                    <input required id="question_44" type="radio" name="question_44" value="4">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_44" type="radio" name="question_44" value="3">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_44" type="radio" name="question_44" value="2">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_44" type="radio" name="question_44" value="1">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_44" type="radio" name="question_44" value="0">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">45</td>
                                <td>Dificultan el logro de los resultados del trabajo.</td>
                                <td class="text-center">
                                    <input required id="question_45" type="radio" name="question_45" value="4">
                                </td>

                                <input required type="hidden" name="user_id" value="{{\Auth::user()->id}}">
                                                                                        
                                <td class="text-center">
                                    <input required id="question_45" type="radio" name="question_45" value="3">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_45" type="radio" name="question_45" value="2">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_45" type="radio" name="question_45" value="1">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_45" type="radio" name="question_45" value="0">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">46</td>
                                <td>Ignoran las sugerencias para mejorar su trabajo.</td>
                                <td class="text-center">
                                    <input required id="question_46" type="radio" name="question_46" value="4">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_46" type="radio" name="question_46" value="3">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_46" type="radio" name="question_46" value="2">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_46" type="radio" name="question_46" value="1">
                                </td>
                                                                                        
                                <td class="text-center">
                                    <input required id="question_46" type="radio" name="question_46" value="0">
                                </td>
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

@section('js')
    <script>
        $(document).ready(function() {
            $('#question_40').is(':checked', function() {
                console.log('mensaje')
            });
        })
    </script>
@stop