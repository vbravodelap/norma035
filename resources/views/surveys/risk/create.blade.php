@extends('adminlte::page')

@section('title', 'Factores de riesgo')

@section('content_header')
    <h1>Resuelve le siguiente encuesta</h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="box box-primary">
            <form action="" method="POST">
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
                                    <input type="radio" name="question_1" value="siempre">
                                </td>

                                <td class="text-center">
                                    <input type="radio" name="question_1" value="casi_siempre">
                                </td>

                                <td class="text-center">
                                    <input type="radio" name="question_1" value="aveces">
                                </td>

                                <td class="text-center">
                                    <input type="radio" name="question_1" value="casi_nunca">
                                </td>

                                <td class="text-center">
                                    <input type="radio" name="question_1" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">2</td>
                                <td>Me preocupa sufrir un accidente en mi trabajo.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_2" value="siempre">
                                </td>
    
                                <td class="text-center">
                                    <input type="radio" name="question_2" value="casi_siempre">
                                </td>
    
                                <td class="text-center">
                                    <input type="radio" name="question_2" value="aveces">
                                </td>
    
                                <td class="text-center">
                                    <input type="radio" name="question_2" value="casi_nunca">
                                </td>
    
                                <td class="text-center">
                                    <input type="radio" name="question_2" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">3</td>
                                <td>Considero que las actividades que realizo son peligrosas.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_3" value="siempre">
                                </td>
        
                                <td class="text-center">
                                    <input type="radio" name="question_3" value="casi_siempre">
                                </td>
        
                                <td class="text-center">
                                    <input type="radio" name="question_3" value="aveces">
                                </td>
        
                                <td class="text-center">
                                    <input type="radio" name="question_3" value="casi_nunca">
                                </td>
        
                                <td class="text-center">
                                    <input type="radio" name="question_3" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">4</td>
                                <td>Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_4" value="siempre">
                                </td>
            
                                <td class="text-center">
                                    <input type="radio" name="question_4" value="casi_siempre">
                                </td>
            
                                <td class="text-center">
                                    <input type="radio" name="question_4" value="aveces">
                                </td>
            
                                <td class="text-center">
                                    <input type="radio" name="question_4" value="casi_nunca">
                                </td>
            
                                <td class="text-center">
                                    <input type="radio" name="question_4" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">5</td>
                                <td>Por la cantidad de trabajo que tengo debo trabajar sin parar.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_5" value="siempre">
                                </td>
                
                                <td class="text-center">
                                    <input type="radio" name="question_5" value="casi_siempre">
                                </td>
                
                                <td class="text-center">
                                    <input type="radio" name="question_5" value="aveces">
                                </td>
                
                                <td class="text-center">
                                    <input type="radio" name="question_5" value="casi_nunca">
                                </td>
                
                                <td class="text-center">
                                    <input type="radio" name="question_5" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">6</td>
                                <td>Considero que es necesario mantener un ritmo de trabajo acelerado.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_6" value="siempre">
                                </td>
                    
                                <td class="text-center">
                                    <input type="radio" name="question_6" value="casi_siempre">
                                </td>
                    
                                <td class="text-center">
                                    <input type="radio" name="question_6" value="aveces">
                                </td>
                    
                                <td class="text-center">
                                    <input type="radio" name="question_6" value="casi_nunca">
                                </td>
                    
                                <td class="text-center">
                                    <input type="radio" name="question_6" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">7</td>
                                <td>Mi trabajo exige que esté muy concentrado.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_7" value="siempre">
                                </td>
                        
                                <td class="text-center">
                                    <input type="radio" name="question_7" value="casi_siempre">
                                </td>
                        
                                <td class="text-center">
                                    <input type="radio" name="question_7" value="aveces">
                                </td>
                        
                                <td class="text-center">
                                    <input type="radio" name="question_7" value="casi_nunca">
                                </td>
                        
                                <td class="text-center">
                                    <input type="radio" name="question_7" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">8</td>
                                <td>Mi trabajo requiere que memorice mucha información.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_8" value="siempre">
                                </td>
                            
                                <td class="text-center">
                                    <input type="radio" name="question_8" value="casi_siempre">
                                </td>
                            
                                <td class="text-center">
                                    <input type="radio" name="question_8" value="aveces">
                                </td>
                            
                                <td class="text-center">
                                    <input type="radio" name="question_8" value="casi_nunca">
                                </td>
                            
                                <td class="text-center">
                                    <input type="radio" name="question_8" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">9</td>
                                <td>Mi trabajo exige que atienda varios asuntos al mismo tiempo.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_9" value="siempre">
                                </td>
                                
                                <td class="text-center">
                                    <input type="radio" name="question_9" value="casi_siempre">
                                </td>
                                
                                <td class="text-center">
                                    <input type="radio" name="question_9" value="aveces">
                                </td>
                                
                                <td class="text-center">
                                    <input type="radio" name="question_9" value="casi_nunca">
                                </td>
                                
                                <td class="text-center">
                                    <input type="radio" name="question_9" value="nunca">
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
                                    <input type="radio" name="question_10" value="siempre">
                                </td>
                                    
                                <td class="text-center">
                                    <input type="radio" name="question_10" value="casi_siempre">
                                </td>
                                    
                                <td class="text-center">
                                    <input type="radio" name="question_10" value="aveces">
                                </td>
                                    
                                <td class="text-center">
                                    <input type="radio" name="question_10" value="casi_nunca">
                                </td>
                                    
                                <td class="text-center">
                                    <input type="radio" name="question_10" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">11</td>
                                <td>Respondo ante mi jefe por los resultados de toda mi área de trabajo.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_11" value="siempre">
                                </td>
                                        
                                <td class="text-center">
                                    <input type="radio" name="question_11" value="casi_siempre">
                                </td>
                                        
                                <td class="text-center">
                                    <input type="radio" name="question_11" value="aveces">
                                </td>
                                        
                                <td class="text-center">
                                    <input type="radio" name="question_11" value="casi_nunca">
                                </td>
                                        
                                <td class="text-center">
                                    <input type="radio" name="question_11" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">12</td>
                                <td>En mi trabajo me dan órdenes contradictorias.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_12" value="siempre">
                                </td>
                                            
                                <td class="text-center">
                                    <input type="radio" name="question_12" value="casi_siempre">
                                </td>
                                            
                                <td class="text-center">
                                    <input type="radio" name="question_12" value="aveces">
                                </td>
                                            
                                <td class="text-center">
                                    <input type="radio" name="question_12" value="casi_nunca">
                                </td>
                                            
                                <td class="text-center">
                                    <input type="radio" name="question_12" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">13</td>
                                <td>Considero que en mi trabajo me piden hacer cosas innecesarias.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_13" value="siempre">
                                </td>
                                                
                                <td class="text-center">
                                    <input type="radio" name="question_13" value="casi_siempre">
                                </td>
                                                
                                <td class="text-center">
                                    <input type="radio" name="question_13" value="aveces">
                                </td>
                                                
                                <td class="text-center">
                                    <input type="radio" name="question_13" value="casi_nunca">
                                </td>
                                                
                                <td class="text-center">
                                    <input type="radio" name="question_13" value="nunca">
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
                                    <input type="radio" name="question_14" value="siempre">
                                </td>
                                                    
                                <td class="text-center">
                                    <input type="radio" name="question_14" value="casi_siempre">
                                </td>
                                                    
                                <td class="text-center">
                                    <input type="radio" name="question_14" value="aveces">
                                </td>
                                                    
                                <td class="text-center">
                                    <input type="radio" name="question_14" value="casi_nunca">
                                </td>
                                                    
                                <td class="text-center">
                                    <input type="radio" name="question_14" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">15</td>
                                <td>Mi trabajo me exige laborar en días de descanso, festivos o fines de semana.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_15" value="siempre">
                                </td>
                                                        
                                <td class="text-center">
                                    <input type="radio" name="question_15" value="casi_siempre">
                                </td>
                                                        
                                <td class="text-center">
                                    <input type="radio" name="question_15" value="aveces">
                                </td>
                                                        
                                <td class="text-center">
                                    <input type="radio" name="question_15" value="casi_nunca">
                                </td>
                                                        
                                <td class="text-center">
                                    <input type="radio" name="question_15" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">16</td>
                                <td>Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_16" value="siempre">
                                </td>
                                                            
                                <td class="text-center">
                                    <input type="radio" name="question_16" value="casi_siempre">
                                </td>
                                                            
                                <td class="text-center">
                                    <input type="radio" name="question_16" value="aveces">
                                </td>
                                                            
                                <td class="text-center">
                                    <input type="radio" name="question_16" value="casi_nunca">
                                </td>
                                                            
                                <td class="text-center">
                                    <input type="radio" name="question_16" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">17</td>
                                <td>Pienso en las actividades familiares o personales cuando estoy en mi trabajo.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_17" value="siempre">
                                </td>
                                                                
                                <td class="text-center">
                                    <input type="radio" name="question_17" value="casi_siempre">
                                </td>
                                                                
                                <td class="text-center">
                                    <input type="radio" name="question_17" value="aveces">
                                </td>
                                                                
                                <td class="text-center">
                                    <input type="radio" name="question_17" value="casi_nunca">
                                </td>
                                                                
                                <td class="text-center">
                                    <input type="radio" name="question_17" value="nunca">
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
                                    <input type="radio" name="question_18" value="siempre">
                                </td>
                                                                    
                                <td class="text-center">
                                    <input type="radio" name="question_18" value="casi_siempre">
                                </td>
                                                                    
                                <td class="text-center">
                                    <input type="radio" name="question_18" value="aveces">
                                </td>
                                                                    
                                <td class="text-center">
                                    <input type="radio" name="question_18" value="casi_nunca">
                                </td>
                                                                    
                                <td class="text-center">
                                    <input type="radio" name="question_18" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">19</td>
                                <td>En mi trabajo puedo aspirar a un mejor puesto.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_19" value="siempre">
                                </td>
                                                                        
                                <td class="text-center">
                                    <input type="radio" name="question_19" value="casi_siempre">
                                </td>
                                                                        
                                <td class="text-center">
                                    <input type="radio" name="question_19" value="aveces">
                                </td>
                                                                        
                                <td class="text-center">
                                    <input type="radio" name="question_19" value="casi_nunca">
                                </td>
                                                                        
                                <td class="text-center">
                                    <input type="radio" name="question_19" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">20</td>
                                <td>Durante mi jornada de trabajo puedo tomar pausas cuando las necesito.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_20" value="siempre">
                                </td>
                                                                            
                                <td class="text-center">
                                    <input type="radio" name="question_20" value="casi_siempre">
                                </td>
                                                                            
                                <td class="text-center">
                                    <input type="radio" name="question_20" value="aveces">
                                </td>
                                                                            
                                <td class="text-center">
                                    <input type="radio" name="question_20" value="casi_nunca">
                                </td>
                                                                            
                                <td class="text-center">
                                    <input type="radio" name="question_20" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">21</td>
                                <td>Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_21" value="siempre">
                                </td>
                                                                                
                                <td class="text-center">
                                    <input type="radio" name="question_21" value="casi_siempre">
                                </td>
                                                                                
                                <td class="text-center">
                                    <input type="radio" name="question_21" value="aveces">
                                </td>
                                                                                
                                <td class="text-center">
                                    <input type="radio" name="question_21" value="casi_nunca">
                                </td>
                                                                                
                                <td class="text-center">
                                    <input type="radio" name="question_21" value="nunca">
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">22</td>
                                <td>Puedo cambiar el orden de las actividades que realizo en mi trabajo.</td>
                                <td class="text-center">
                                    <input type="radio" name="question_22" value="siempre">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input type="radio" name="question_22" value="casi_siempre">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input type="radio" name="question_22" value="aveces">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input type="radio" name="question_22" value="casi_nunca">
                                </td>
                                                                                    
                                <td class="text-center">
                                    <input type="radio" name="question_22" value="nunca">
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
                        </tbody>
                    </table>
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