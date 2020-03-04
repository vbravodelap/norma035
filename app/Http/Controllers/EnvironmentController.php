<?php

namespace App\Http\Controllers;

use App\Environment;
use Illuminate\Http\Request;

class EnvironmentController extends Controller
{
    public function create() {
        return view('surveys.environment.create');
    }

    public function store(Request $request){

        $survey = new Environment();

        $survey->question_1 = $request->question_1;
        $survey->question_2 = $request->question_2;
        $survey->question_3 = $request->question_3;
        $survey->question_4 = $request->question_4;
        $survey->question_5 = $request->question_5;
        $survey->question_6 = $request->question_6;
        $survey->question_7 = $request->question_7;
        $survey->question_8 = $request->question_8;
        $survey->question_9 = $request->question_9;
        $survey->question_10 = $request->question_10;
        $survey->question_11 = $request->question_11;
        $survey->question_12 = $request->question_12;
        $survey->question_13 = $request->question_13;
        $survey->question_14 = $request->question_14;
        $survey->question_15 = $request->question_15;
        $survey->question_16 = $request->question_16;
        $survey->question_17 = $request->question_17;
        $survey->question_18 = $request->question_18;
        $survey->question_19 = $request->question_19;
        $survey->question_20 = $request->question_20;
        $survey->question_21 = $request->question_21;
        $survey->question_22 = $request->question_22;
        $survey->question_23 = $request->question_23;
        $survey->question_24 = $request->question_24;
        $survey->question_25 = $request->question_25;
        $survey->question_26 = $request->question_26;
        $survey->question_27 = $request->question_27;
        $survey->question_28 = $request->question_28;
        $survey->question_29 = $request->question_29;
        $survey->question_30 = $request->question_30;
        $survey->question_31 = $request->question_31;
        $survey->question_32 = $request->question_32;
        $survey->question_33 = $request->question_33;
        $survey->question_34 = $request->question_34;
        $survey->question_35 = $request->question_35;
        $survey->question_36 = $request->question_36;
        $survey->question_37 = $request->question_37;
        $survey->question_38 = $request->question_38;
        $survey->question_39 = $request->question_39;
        $survey->question_40 = $request->question_40;
        $survey->question_41 = $request->question_41;
        $survey->question_42 = $request->question_42;
        $survey->question_43 = $request->question_43;
        $survey->question_44 = $request->question_44;
        $survey->question_45 = $request->question_45;
        $survey->question_46 = $request->question_46;
        $survey->question_47 = $request->question_47;
        $survey->question_48 = $request->question_48;
        $survey->question_49 = $request->question_49;
        $survey->question_50 = $request->question_50;
        $survey->question_51 = $request->question_51;
        $survey->question_52 = $request->question_52;
        $survey->question_53 = $request->question_53;
        $survey->question_54 = $request->question_54;
        $survey->question_55 = $request->question_55;
        $survey->question_56 = $request->question_56;
        $survey->question_57 = $request->question_57;
        $survey->question_58 = $request->question_58;
        $survey->question_59 = $request->question_59;
        $survey->question_60 = $request->question_60;
        $survey->question_61 = $request->question_61;
        $survey->question_62 = $request->question_62;
        $survey->question_63 = $request->question_63;
        $survey->question_64 = $request->question_64;
        $survey->question_65 = $request->question_65;
        $survey->question_66 = $request->question_66;
        $survey->question_67 = $request->question_67;
        $survey->question_68 = $request->question_68;
        $survey->question_69 = $request->question_69;
        $survey->question_70 = $request->question_70;
        $survey->question_71 = $request->question_71;
        $survey->question_72 = $request->question_72;

        $survey->name = $request->name;
        $survey->email = $request->email;
        $survey->user_id = $request->user_id;
        $survey->gender = $request->gender;
        $survey->occupation = $request->occupation;
        $survey->type_of_contract = $request->type_of_contract;
        
        $survey->calification = $this->getCalification($request);

        // Categoría
        $survey->ambiente_trabajo = $this->getAmbienteTrabajo($request);
        $survey->factores_propios = $this->getFactoresPropios($request);
        $survey->organizacion_tiempo = $this->getOrganizacionTiempo($request);
        $survey->liderazgo_trabajo = $this->getLiderazgoRelaciones($request);
        $survey->entorno_organizacional = $this->getEntornoOrganizacional($request);


        // Dominio
        $survey->condiciones_ambiente = $this->getAmbienteTrabajo($request);
        $survey->carga_trabajo = $this->getCargaTrabajo($request);
        $survey->jornada_trabajo = $this->getJornadaTrabajo($request);
        $survey->trabajo_familia = $this->getRelacionTrabajoFamilia($request);
        $survey->falta_control = $this->getFaltaControlTrabajo($request);
        $survey->liderazgo = $this->getLiderazgo($request);
        $survey->relaciones_trabajo = $this->getRelacionesTrabajo($request);
        $survey->reconocimiento_desempeño = $this->getReconocimientoDesempeño($request);
        $survey->insuficiente_sentido = $this->getInsuficienteSentido($request);
        $survey->violencia = $this->getViolencia($request);

        $survey->save();

        return redirect()->route('risk.create')->with([
            'message_success'   => 'La encuesta se envio correctamente'
        ]);
        
    }

    public function getCalification(Request $request){
        $todasLasPreguntas = [];

        for($i=0; $i<=72; $i++) {
            array_push($todasLasPreguntas, 'question_'.$i);
        }

        $respuestas = $request->only($todasLasPreguntas);
        $calificacionFinal = 0;

        foreach($respuestas as $respuesta) {
            $calificacionFinal += $respuesta;
        }

        return $calificacionFinal;

    }

    public function getAmbienteTrabajo(Request $request){
        $preguntas = [];

        for($i=0; $i<=5; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    }

    public function getFactoresPropios(Request $request){
        $preguntas = [];

        for($i=6; $i<=16; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        for($i=23; $i<=30; $i++){
            array_push($preguntas, 'question_'.$i);
        }

        array_push($preguntas, ['question_35', 'question_36']);

        for($i=65; $i<=68; $i++){
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    }

    public function getOrganizacionTiempo(Request $request){
        $preguntas = [];

        for($i=17; $i<=22; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    }

    public function getLiderazgoRelaciones(Request $request){
        $preguntas = [];

        for($i=31; $i<=34; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        for($i=37; $i<=46; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        for($i=57; $i<=64; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        for($i=69; $i<=72; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    }

    public function getEntornoOrganizacional(Request $request){
        $preguntas = [];

        for($i=47; $i<=56; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    }

    public function getCondicionesAmbiente(Request $request){
        $preguntas = [];

        for($i=1; $i<=5; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    }

    public function getCargaTrabajo(Request $request){
        $preguntas = [];

        for($i=6; $i<=16; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        for($i=65; $i<=68; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    } 

    public function getJornadaTrabajo(Request $request){
        $preguntas = [];

        for($i=17; $i<=18; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    } 

    public function getRelacionTrabajoFamilia(Request $request){
        $preguntas = [];

        for($i=19; $i<=22; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    } 

    public function getFaltaControlTrabajo(Request $request){
        $preguntas = [];

        for($i=23; $i<=30; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        array_push($preguntas, ['question_35', 'question_36']);

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    } 

    public function getLiderazgo(Request $request){
        $preguntas = [];

        for($i=31; $i<=34; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        for($i=37; $i<=41; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    } 

    public function getRelacionesTrabajo(Request $request){
        $preguntas = [];

        for($i=42; $i<=46; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        for($i=69; $i<=72; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    } 

    public function getReconocimientoDesempeño(Request $request){
        $preguntas = [];

        for($i=47; $i<=52; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    } 

    public function getInsuficienteSentido(Request $request){
        $preguntas = [];

        for($i=53; $i<=56; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    } 

    public function getViolencia(Request $request){
        $preguntas = [];

        for($i=57; $i<=64; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    } 

    public function index(){
        $environments = Environment::all();

        return view('surveys.environment.index', [
            'environments' => $environments
        ]);
    }

    public function detail($id){
        $environment = Environment::find($id);

        $calification = $environment->calification;
        $calificacionFinal = 'Sin datos';

        if($calification <50) {
            $calificacionFinal = 'Nulo';
        }elseif($calification <= 50  && $calification <75) {
            $calificacionFinal = 'Bajo';
        }elseif($calification >=75 && $calification <99) {
            $calificacionFinal = 'Medio';
        }elseif($calification >=99 && $calification <140) {
            $calificacionFinal = 'Alto';
        }elseif($calification >=140) {
            $calificacionFinal = 'Muy alto';
        }


        return view('surveys.environment.detail', [
            'environment'   => $environment,
            'calificacionFinal'  => $calificacionFinal
        ]);
    }

    public function getDominio($id){
        $survey = Environment::find($id);
        
        $data = [
            'code'  => 200,
            'status'    => 'success',
            'condiciones_ambiente' =>  $survey->condiciones_ambiente,
            'carga_trabajo' => $survey->carga_trabajo,
            'jornada_trabajo'   => $survey->jornada_trabajo,
            'trabajo_familia'    => $survey->trabajo_familia,
            'falta_control' => $survey->falta_control,
            'liderazgo' => $survey->liderazgo,
            'relaciones_trabajo' => $survey->relaciones_trabajo,
            'violencia' => $survey->violencia
        ];

        return response()->json($data, $data['code']);
    }

    public function getCategoria($id){
        $survey = Environment::find($id);
        
        $data = [
            'code' => 200,
            'status'    => 'success',
            'ambiente_trabajo'  => $survey->ambiente_trabajo,
            'factores_propios'  => $survey->factores_propios,
            'organizacion_tiempo' => $survey->organizacion_tiempo,
            'liderazgo_trabajo' => $survey->liderazgo_trabajo
        ];

        return response()->json($data, $data['code']);
    }

}
