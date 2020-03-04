@extends('adminlte::page')

@section('title', 'Evaluacion del entorno')

@section('content_header')
    <h1>Encuesta de {{$environment->name}}</h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-body">
                <div class="row">

                    <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>
                                    {{$environment->calification ?? 'Sin datos'}}
                                </h3>
                          
                                <p>Riesgo {{$calificacionFinal ?? 'Sin datos'}}</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-plus"></i>
                            </div>
                                    
                        </div>
                    </div>

                    @if($calificacionFinal == 'Muy alto')
                    <div class="col-md-8 alert alert-danger">
                        <p>Se requiere realizar el análisis de cada categoría    
                        y dominio para establecer las acciones de intervención apropiadas,
                        mediante un Programa de intervención que deberá incluir evaluaciones específicas
                        , y contemplar campañas de sensibilización, revisar la política de prevención de riesgos psicosociales
                        y programas para la prevención de los factores de riesgo psicosocial, la promoción
                        de un entorno organizacional favorable y la prevención de la violencia laboral, así
                        como reforzar su aplicación y difusión.</p>
                    </div>
                    @endif

                    @if($calificacionFinal == 'Alto')
                    <div class="col-md-8 alert alert-warning">
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
                    <div class="col-md-8 alert alert-info">
                        <p>Se requiere revisar la política de prevención de riesgos psicosociales y programas
                        para la prevención de los factores de riesgo psicosocial, la promoción de un entorno
                        organizacional favorable y la prevención de la violencia laboral, así como reforzar su
                        aplicación y difusión, mediante un Programa de intervención.</p>
                    </div>
                    @endif

                    @if($calificacionFinal == 'Bajo')
                    <div class="col-md-8 alert alert-success">
                        <p>Es necesario una mayor difusión de la política de prevención de riesgos psicosociales
                        y programas para: la prevención de los factores de riesgo psicosocial, la promoción
                        de un entorno organizacional favorable y la prevención de la violencia laboral.</p>
                    </div>
                    @endif

                    @if($calificacionFinal == 'Nulo')
                    <div class="col-md-8 alert alert-info">
                        <p>El riesgo resulta despreciable por lo que no se requiere medidas adicionales.</p>
                    </div>
                    @endif

                </div>

                <hr>

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
                                    <td>{{$environment->ambiente_trabajo}}</td>
                                    @if($environment->ambiente_trabajo <3)
                                    <td class="bg-green">NULO</td>
                                    @elseif($environment->ambiente_trabajo >=3 && $environment->ambiente_trabajo <5)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($environment->ambiente_trabajo >=5 && $environment->ambiente_trabajo <7)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($environment->ambiente_trabajo >=7 && $environment->ambiente_trabajo <9)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($environment->ambiente_trabajo >=9)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Factores propios de la actividad</td>
                                    <td>{{$environment->factores_propios}}</td>
                                    @if($environment->factores_propios <10)
                                    <td class="bg-green">NULO</td>
                                    @elseif($environment->factores_propios >=10 && $environment->factores_propios <20)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($environment->factores_propios >=20 && $environment->factores_propios <30)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($environment->factores_propios >=30 && $environment->factores_propios <40)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($environment->factores_propios >=40)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Organización del tiempo de trabajo</td>
                                    <td>{{$environment->organizacion_tiempo}}</td>
                                    @if($environment->organizacion_tiempo <4)
                                    <td class="bg-green">NULO</td>
                                    @elseif($environment->organizacion_tiempo >=4 && $environment->organizacion_tiempo <6)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($environment->organizacion_tiempo >=6 && $environment->organizacion_tiempo <9)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($environment->organizacion_tiempo >=9 && $environment->organizacion_tiempo <12)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($environment->organizacion_tiempo >=12)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Liderazgo y relaciones en el trabajo</td>
                                    <td>{{$environment->liderazgo_trabajo}}</td>
                                    @if($environment->liderazgo_trabajo <10)
                                    <td class="bg-green">NULO</td>
                                    @elseif($environment->liderazgo_trabajo >=10 && $environment->liderazgo_trabajo <18)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($environment->liderazgo_trabajo >=18 && $environment->liderazgo_trabajo <28)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($environment->liderazgo_trabajo >=28 && $environment->liderazgo_trabajo <38)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($environment->liderazgo_trabajo >=38)
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
                                    <td>{{$environment->condiciones_ambiente}}</td>
                                    @if($environment->condiciones_ambiente <4)
                                    <td class="bg-green">NULO</td>
                                    @elseif($environment->condiciones_ambiente >=4 && $environment->condiciones_ambiente <6)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($environment->condiciones_ambiente >=6 && $environment->condiciones_ambiente <9)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($environment->condiciones_ambiente >=9 && $environment->condiciones_ambiente <12)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($environment->condiciones_ambiente >=12)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Carga de trabajo</td>
                                    <td>{{$environment->carga_trabajo}}</td>
                                    @if($environment->carga_trabajo <12)
                                    <td class="bg-green">NULO</td>
                                    @elseif($environment->carga_trabajo >=12 && $environment->carga_trabajo <16)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($environment->carga_trabajo >=16 && $environment->carga_trabajo <20)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($environment->carga_trabajo >=20 && $environment->carga_trabajo <24)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($environment->carga_trabajo >=24)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Falta de control sobre el trabajo</td>
                                    <td>{{$environment->falta_control}}</td>
                                    @if($environment->falta_control <5)
                                    <td class="bg-green">NULO</td>
                                    @elseif($environment->falta_control >=5 && $environment->falta_control <8)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($environment->falta_control >=8 && $environment->falta_control <11)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($environment->falta_control >=11 && $environment->falta_control <14)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($environment->falta_control >=14)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Jornada de trabajo</td>
                                    <td>{{$environment->jornada_trabajo}}</td>
                                    @if($environment->jornada_trabajo <1)
                                    <td class="bg-green">NULO</td>
                                    @elseif($environment->jornada_trabajo >=1 && $environment->jornada_trabajo <2)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($environment->jornada_trabajo >=2 && $environment->jornada_trabajo <4)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($environment->jornada_trabajo >=4 && $environment->jornada_trabajo <6)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($environment->jornada_trabajo >=6)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Interferencia de la relación trabajo y familia</td>
                                    <td>{{$environment->trabajo_familia}}</td>
                                    @if($environment->trabajo_familia <1)
                                    <td class="bg-green">NULO</td>
                                    @elseif($environment->trabajo_familia >=1 && $environment->trabajo_familia <2)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($environment->trabajo_familia >=2 && $environment->trabajo_familia <4)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($environment->trabajo_familia >=4 && $environment->trabajo_familia <6)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($environment->trabajo_familia >=6)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Liderazgo</td>
                                    <td>{{$environment->liderazgo}}</td>
                                    @if($environment->liderazgo <3)
                                    <td class="bg-green">NULO</td>
                                    @elseif($environment->liderazgo >=3 && $environment->liderazgo <5)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($environment->liderazgo >=5 && $environment->liderazgo <8)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($environment->liderazgo >=8 && $environment->liderazgo <11)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($environment->liderazgo >=11)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Relaciones en el trabajo</td>
                                    <td>{{$environment->relaciones_trabajo}}</td>
                                    @if($environment->relaciones_trabajo <5)
                                    <td class="bg-green">NULO</td>
                                    @elseif($environment->relaciones_trabajo >=5 && $environment->relaciones_trabajo <8)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($environment->relaciones_trabajo >=8 && $environment->relaciones_trabajo <11)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($environment->relaciones_trabajo >=11 && $environment->relaciones_trabajo <14)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($environment->relaciones_trabajo >=14)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>

                                <tr>
                                    <td>Violencia</td>
                                    <td>{{$environment->violencia}}</td>
                                    @if($environment->violencia <7)
                                    <td class="bg-green">NULO</td>
                                    @elseif($environment->violencia >=7 && $environment->violencia <10)
                                    <td class="bg-green">BAJO</td>
                                    @elseif($environment->violencia >=10 && $environment->violencia <13)
                                    <td class="bg-yellow">MEDIO</td>
                                    @elseif($environment->violencia >=13 && $environment->violencia <16)
                                    <td class="bg-red">ALTO</td>
                                    @elseif($environment->violencia >=16)
                                    <td class="bg-red">MUY ALTO</td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <hr>

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
@endsection

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
            axios.get('{{route('environment.dominio', ['id' => $environment->id])}}').then(function(response) {
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

            axios.get('{{route('environment.categoria', ['id' => $environment->id])}}')
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
