@extends('adminlte::page')

@section('title', 'Acontecimientos Traumaticos')

@section('content_header')
    <h1>Resuelve le siguiente encuesta</h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="box box-primary">
            <form action="{{route('traumatic.store')}}" method="POST">
                @csrf
                <div class="box-header">
                    <h3 class="text-center text-bold">
                        CUESTIONARIO PARA IDENTIFICAR A LOS TRABAJADORES QUE FUERON SUJETOS A ACONTECIMIENTOS TRAUMÁTICOS SEVEROS			
                    </h3>

                    <h4 class="text-center">
                        INSTRUCCIONES: LEER DETENIDAMENTE LAS PREGUNTAS Y CONTESTAR <span class="text-red">SI</span> O <span class="text-red">NO</span>.
                    </h4>

                    <br>

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
                            <th>Pregunta/Sección</th>
                            <th class="text-center">
                                Si
                            </th>
                            <th class="text-center">
                                No
                            </th>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                 <span class="text-bold bg-primary">I.- Acontecimiento traumático severo</span>   

                                    <ul>
                                        <li>
                                            ¿Ha presenciado o sufrido alguna vez, durante o con motivo del trabajo un acontecimiento como los siguientes:
                                        </li>
                                        <li>
                                            ¿Accidente que tenga como consecuencia la muerte, la pérdida de un miembro o una lesión grave?
                                        </li>

                                        <li>
                                            Asaltos?
                                        </li>

                                        <li>
                                            Actos violentos que derivaron en lesiones graves?
                                        </li>

                                        <li>
                                            Secuestro o amenazas?
                                        </li>

                                        <li>
                                            Cualquier otro que ponga en riesgo su vida o salud, y/o la de otras personas?
                                        </li>
                                    </ul>
                                </td>

                                <td class="text-center">
                                    <input type="radio" name="question_1" value="yes">
                                    <i class="fas fa-check text-green"></i>
                                </td>

                                <td class="text-center">
                                    <input type="radio" name="question_1" value="no">
                                    <i class="fas fa-times text-red"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                   <span class="text-bold bg-primary">II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes):</span> 
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    ¿Ha tenido recuerdos recurrentes sobre el acontecimiento que le provocan malestares?
                                </td>

                                <td class="text-center">
                                    <input type="radio" name="question_2" value="yes">
                                    <i class="fas fa-check text-green"></i>
                                </td>

                                <td class="text-center">
                                    <input type="radio" name="question_2" value="no">
                                    <i class="fas fa-times text-red"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    ¿Ha tenido sueños de carácter recurrente sobre el acontecimiento, que le producen malestar?
                                </td>
    
                                <td class="text-center">
                                    <input type="radio" name="question_3" value="yes">
                                    <i class="fas fa-check text-green"></i>
                                </td>
    
                                <td class="text-center">
                                    <input type="radio" name="question_3" value="no">
                                    <i class="fas fa-times text-red"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                  <span class="text-bold bg-primary">III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento (durante el último mes):</span>  		
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    ¿Se ha esforzado por evitar todo tipo de sentimientos, conversaciones o situaciones que le puedan recordar el acontecimiento?
                                </td>

                                <td class="text-center">
                                    <input type="radio" name="question_4" value="yes">
                                    <i class="fas fa-check text-green"></i>
                                </td>
        
                                <td class="text-center">
                                    <input type="radio" name="question_4" value="no">
                                    <i class="fas fa-times text-red"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    ¿Se ha esforzado por evitar todo tipo de actividades, lugares o personas que motivan recuerdos del acontecimiento?
                                </td>
        
                                <td class="text-center">
                                    <input type="radio" name="question_5" value="yes">
                                    <i class="fas fa-check text-green"></i>
                                </td>
                
                                <td class="text-center">
                                    <input type="radio" name="question_5" value="no">
                                    <i class="fas fa-times text-red"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    ¿Ha tenido dificultad para recordar alguna parte importante del evento?
                                </td>
            
                                <td class="text-center">
                                    <input type="radio" name="question_6" value="yes">
                                    <i class="fas fa-check text-green"></i>
                                </td>
                    
                                <td class="text-center">
                                    <input type="radio" name="question_6" value="no">
                                    <i class="fas fa-times text-red"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    ¿Ha disminuido su interés en sus actividades cotidianas?
                                </td>
                
                                <td class="text-center">
                                    <input type="radio" name="question_7" value="yes">
                                    <i class="fas fa-check text-green"></i>
                                </td>
                        
                                <td class="text-center">
                                    <input type="radio" name="question_7" value="no">
                                    <i class="fas fa-times text-red"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    ¿Se ha sentido usted alejado o distante de los demás?
                                </td>
                    
                                <td class="text-center">
                                    <input type="radio" name="question_8" value="yes">
                                    <i class="fas fa-check text-green"></i>
                                </td>
                            
                                <td class="text-center">
                                    <input type="radio" name="question_8" value="no">
                                    <i class="fas fa-times text-red"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    ¿Ha notado que tiene dificultad para expresar sus sentimientos?
                                </td>
                        
                                <td class="text-center">
                                    <input type="radio" name="question_9" value="yes">
                                    <i class="fas fa-check text-green"></i>
                                </td>
                                
                                <td class="text-center">
                                    <input type="radio" name="question_9" value="no">
                                    <i class="fas fa-times text-red"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    ¿Ha tenido la impresión de que su vida se va a acortar, que va a morir antes que otras personas o que tiene un futuro limitado?
                                </td>
                            
                                <td class="text-center">
                                    <input type="radio" name="question_10" value="yes">
                                    <i class="fas fa-check text-green"></i>
                                </td>
                                    
                                <td class="text-center">
                                    <input type="radio" name="question_10" value="no">
                                    <i class="fas fa-times text-red"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="text-bold bg-primary">IV. Afectación (durante el último mes):</span>  		
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    ¿Ha tenido usted dificultades para dormir?
                                </td>
                                
                                <td class="text-center">
                                    <input type="radio" name="question_11" value="yes">
                                    <i class="fas fa-check text-green"></i>
                                </td>
                                        
                                <td class="text-center">
                                    <input type="radio" name="question_11" value="no">
                                    <i class="fas fa-times text-red"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    ¿Ha estado particularmente irritable o le han dado arranques de coraje?
                                </td>
                                    
                                <td class="text-center">
                                    <input type="radio" name="question_12" value="yes">
                                    <i class="fas fa-check text-green"></i>
                                </td>
                                            
                                <td class="text-center">
                                    <input type="radio" name="question_12" value="no">
                                    <i class="fas fa-times text-red"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    ¿Ha tenido dificultad para concentrarse?
                                </td>
                                        
                                <td class="text-center">
                                    <input type="radio" name="question_13" value="yes">
                                    <i class="fas fa-check text-green"></i>
                                </td>
                                                
                                <td class="text-center">
                                    <input type="radio" name="question_13" value="no">
                                    <i class="fas fa-times text-red"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    ¿Ha estado nervioso o constantemente en alerta?
                                </td>
                                            
                                <td class="text-center">
                                    <input type="radio" name="question_14" value="yes">
                                    <i class="fas fa-check text-green"></i>
                                </td>
                                                    
                                <td class="text-center">
                                    <input type="radio" name="question_14" value="no">
                                    <i class="fas fa-times text-red"></i>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    ¿Se ha sobresaltado fácilmente por cualquier cosa?
                                </td>
                                                
                                <td class="text-center">
                                    <input type="radio" name="question_15" value="yes">
                                    <i class="fas fa-check text-green"></i>
                                </td>
                                                        
                                <td class="text-center">
                                    <input type="radio" name="question_15" value="no">
                                    <input type="hidden" name="user_id" value="{{\Auth::user()->id}}">
                                    <i class="fas fa-times text-red"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="box-footer">
                    <button class="col-md-offset-5 btn btn-primary" type="submit">
                        Enviar
                    </button>
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