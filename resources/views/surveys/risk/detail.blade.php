@extends('adminlte::page')

@section('title', 'Detalle del reporte')

@section('content_header')
    <h1>Encuesta de <span class="text-primary">{{$survey->name}}</span></h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>
                                    {{$survey->calification ?? 'Sin datos'}}
                                </h3>
                          
                                <p>Riesgo {{$calificacionFinal ?? 'Sin datos'}}</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-plus"></i>
                            </div>
                                    
                        </div>
                    </div>

                    @if($calificacionFinal == 'Muy alto')
                    <div class="col-lg-8 alert alert-danger">
                        <p>Se requiere realizar el análisis de cada categoría
                        y dominio para establecer las acciones de intervención apropiadas,
                        mediante un Programa de intervención que deberá incluir evaluaciones
                        específicas1, y contemplar campañas de sensibilización,
                        revisar la política de prevención de riesgos psicosociales y programas
                        para la prevención de los factores de riesgo psicosocial, la promoción
                        de un entorno organizacional favorable y la prevención de la violencia
                        laboral, así como reforzar su aplicación y difusión.</p>
                    </div>
                    @endif

                    @if($calificacionFinal == 'Alto')
                    <div class="col-lg-8 alert alert-warning">
                        <p>Se requiere realizar un análisis de cada categoría y dominio, de manera
                        que se puedan determinar las acciones de intervención apropiadas a través de
                        un Programa de intervención, que podrá incluir una evaluación específica1 y deberá
                        incluir una campaña de sensibilización, revisar la política de prevención de
                        riesgos psicosociales y programas para la prevención de los factores de riesgo
                        psicosocial, la promoción de un entorno organizacional favorable y la prevención
                        de la violencia laboral, así como reforzar su aplicación y difusión.</p>
                    </div>
                    @endif

                    @if($calificacionFinal == 'Medio')
                    <div class="col-lg-8 alert alert-info">
                        <p>Se requiere revisar la política de prevención de riesgos psicosociales y programas
                        para la prevención de los factores de riesgo psicosocial, la promoción de un entorno
                        organizacional favorable y la prevención de la violencia laboral, así como reforzar su
                        aplicación y difusión, mediante un Programa de intervención.</p>
                    </div>
                    @endif

                    @if($calificacionFinal == 'Bajo')
                    <div class="col-lg-8 alert alert-success">
                        <p>Es necesario una mayor difusión de la política de prevención de riesgos psicosociales
                        y programas para: la prevención de los factores de riesgo psicosocial, la promoción
                        de un entorno organizacional favorable y la prevención de la violencia laboral.</p>
                    </div>
                    @endif

                    @if($calificacionFinal == 'Nulo')
                    <div class="col-lg-8 alert alert-info">
                        <p>El riesgo resulta despreciable por lo que no se requiere medidas adicionales.</p>
                    </div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="text-center">Calificación por categoría</h3>
                        <table class="table table-hover table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Categoría</th>
                                    <th>Calificación</th>
                                    <th>Riesgo</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Ambiente de trabajo</td>
                                    <td>{{$survey->ambiente_trabajo}}</td>
                                    @if($survey->ambiente_trabajo <3)
                                    <td class="bg-green">NULO</td>
                                    @elseif($survey->ambiente_trabajo >=3 && $survey->ambiente_trabajo <5)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($survey->ambiente_trabajo >=5 && $survey->ambiente_trabajo <7)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($survey->ambiente_trabajo >=7 && $survey->ambiente_trabajo <9)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($survey->ambiente_trabajo >=9)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Factores propios de la actividad</td>
                                    <td>{{$survey->factores_propios}}</td>
                                    @if($survey->factores_propios <10)
                                    <td class="bg-green">NULO</td>
                                    @elseif($survey->factores_propios >=10 && $survey->factores_propios <20)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($survey->factores_propios >=20 && $survey->factores_propios <30)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($survey->factores_propios >=30 && $survey->factores_propios <40)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($survey->factores_propios >=40)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Organización del tiempo de trabajo</td>
                                    <td>{{$survey->organizacion_tiempo}}</td>
                                    @if($survey->organizacion_tiempo <4)
                                    <td class="bg-green">NULO</td>
                                    @elseif($survey->organizacion_tiempo >=4 && $survey->organizacion_tiempo <6)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($survey->organizacion_tiempo >=6 && $survey->organizacion_tiempo <9)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($survey->organizacion_tiempo >=9 && $survey->organizacion_tiempo <12)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($survey->organizacion_tiempo >=12)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Liderazgo y relaciones en el trabajo</td>
                                    <td>{{$survey->liderazgo_trabajo}}</td>
                                    @if($survey->liderazgo_trabajo <10)
                                    <td class="bg-green">NULO</td>
                                    @elseif($survey->liderazgo_trabajo >=10 && $survey->liderazgo_trabajo <18)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($survey->liderazgo_trabajo >=18 && $survey->liderazgo_trabajo <28)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($survey->liderazgo_trabajo >=28 && $survey->liderazgo_trabajo <38)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($survey->liderazgo_trabajo >=38)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-6">
                        <h3 class="text-center">Calificación por dominio</h3>
                        <table class="table table-hover table-striped table-bordered">
                            <thead>
                                <th>Dominio</th>
                                <th>Calificación</th>
                                <th>Riesgo</th>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Condiciones en el ambiente de trabajo</td>
                                    <td>{{$survey->condiciones_ambiente}}</td>
                                    @if($survey->condiciones_ambiente <4)
                                    <td class="bg-green">NULO</td>
                                    @elseif($survey->condiciones_ambiente >=4 && $survey->condiciones_ambiente <6)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($survey->condiciones_ambiente >=6 && $survey->condiciones_ambiente <9)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($survey->condiciones_ambiente >=9 && $survey->condiciones_ambiente <12)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($survey->condiciones_ambiente >=12)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Carga de trabajo</td>
                                    <td>{{$survey->carga_trabajo}}</td>
                                    @if($survey->carga_trabajo <12)
                                    <td class="bg-green">NULO</td>
                                    @elseif($survey->carga_trabajo >=12 && $survey->carga_trabajo <16)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($survey->carga_trabajo >=16 && $survey->carga_trabajo <20)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($survey->carga_trabajo >=20 && $survey->carga_trabajo <24)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($survey->carga_trabajo >=24)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Falta de control sobre el trabajo</td>
                                    <td>{{$survey->falta_control}}</td>
                                    @if($survey->falta_control <5)
                                    <td class="bg-green">NULO</td>
                                    @elseif($survey->falta_control >=5 && $survey->falta_control <8)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($survey->falta_control >=8 && $survey->falta_control <11)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($survey->falta_control >=11 && $survey->falta_control <14)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($survey->falta_control >=14)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Jornada de trabajo</td>
                                    <td>{{$survey->jornada_trabajo}}</td>
                                    @if($survey->jornada_trabajo <1)
                                    <td class="bg-green">NULO</td>
                                    @elseif($survey->jornada_trabajo >=1 && $survey->jornada_trabajo <2)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($survey->jornada_trabajo >=2 && $survey->jornada_trabajo <4)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($survey->jornada_trabajo >=4 && $survey->jornada_trabajo <6)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($survey->jornada_trabajo >=6)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Interferencia de la relación trabajo y familia</td>
                                    <td>{{$survey->trabajo_familia}}</td>
                                    @if($survey->trabajo_familia <1)
                                    <td class="bg-green">NULO</td>
                                    @elseif($survey->trabajo_familia >=1 && $survey->trabajo_familia <2)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($survey->trabajo_familia >=2 && $survey->trabajo_familia <4)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($survey->trabajo_familia >=4 && $survey->trabajo_familia <6)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($survey->trabajo_familia >=6)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Liderazgo</td>
                                    <td>{{$survey->liderazgo}}</td>
                                    @if($survey->liderazgo <3)
                                    <td class="bg-green">NULO</td>
                                    @elseif($survey->liderazgo >=3 && $survey->liderazgo <5)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($survey->liderazgo >=5 && $survey->liderazgo <8)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($survey->liderazgo >=8 && $survey->liderazgo <11)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($survey->liderazgo >=11)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Relaciones en el trabajo</td>
                                    <td>{{$survey->relaciones_trabajo}}</td>
                                    @if($survey->relaciones_trabajo <5)
                                    <td class="bg-green">NULO</td>
                                    @elseif($survey->relaciones_trabajo >=5 && $survey->relaciones_trabajo <8)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($survey->relaciones_trabajo >=8 && $survey->relaciones_trabajo <11)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($survey->relaciones_trabajo >=11 && $survey->relaciones_trabajo <14)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($survey->relaciones_trabajo >=14)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Violencia</td>
                                    <td>{{$survey->violencia}}</td>
                                    @if($survey->violencia <7)
                                    <td class="bg-green">NULO</td>
                                    @elseif($survey->violencia >=7 && $survey->violencia <10)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($survey->violencia >=10 && $survey->violencia <13)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($survey->violencia >=13 && $survey->violencia <16)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($survey->violencia >=16)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <canvas id="ctxCategoria"></canvas>
                    </div>

                    <div class="col-lg-6">
                        <canvas id="ctxDominio"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')
<div class="pull-right hidden-xs">
        Anything you want
    </div>
      
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
@stop

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            var data = [];
            survey_id = $('#survey_id').val();
            axios.get('{{route('risk.dominio', ['id' => $survey->id])}}').then(function(response) {
                carga_trabajo = response.data.carga_trabajo;
                falta_control = response.data.falta_control;
                jornada_trabajo = response.data.jornada_trabajo;
                liderazgo = response.data.liderazgo
                relaciones_trabajo = response.data.relaciones_trabajo;
                trabajo_familia = response.data.trabajo_familia;
                violencia = response.data.violencia;

                data.push(carga_trabajo, falta_control, jornada_trabajo, liderazgo, relaciones_trabajo, trabajo_familia, violencia);


                var radarDominio = new Chart(ctxDominio, {
                    type: 'radar',
                    data: {
                        labels: [
                            
                            "Carga de trabajo",
                            "Falta de control sobre el trabajo",
                            "Jornada de trabajo", "Liderazgo", 
                            "Relaciones en el trabajo",
                            "Interferencia trabajo y familia",
                            "Violencia"
                        ],

                        datasets: [
                            {
                                data: data,
                                label: 'Riesgo',
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                            }
                        ]
                        
                    }
                });

                console.log(data);
            }).catch(function(response) {
                
            })

            axios.get('{{route('risk.categoria', ['id' => $survey->id])}}')
                .then(function(response) {
                    var data = [];
                    ambiente_trabajo = response.data.ambiente_trabajo;
                    factores_propios = response.data.factores_propios;
                    liderazgo_trabajo = response.data.liderazgo_trabajo;
                    organizacion_tiempo = response.data.organizacion_tiempo;

                    data.push(ambiente_trabajo, factores_propios, liderazgo_trabajo, organizacion_tiempo);

                    var radarCategoria = new Chart(ctxCategoria, {
                    type: 'radar',
                    data: {
                        labels: [
                            
                            "Ambiente de trabajo",
                            "Factores propios de la actividad",
                            "Organizacion del tiempo de trabajo", 
                            "Liderazgo y relaciones en el trabajo"
                        ],

                        datasets: [
                            {
                                data: data,
                                label: 'Riesgo',
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                            }
                        ]
                        
                    }
                });

                    console.log(data);
                })
                .catch(function(response) {
                    console.log(response);
                })
        })
    </script>
@stop
