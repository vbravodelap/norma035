<?php

namespace App\Http\Controllers;

use App\Company;
use App\Risk;
use Illuminate\Http\Request;

class RiskController extends Controller
{

    public function index() {
        $riskSurveys = Risk::all();
        return view('surveys.risk.index', [
            'riskSurveys' => $riskSurveys
        ]);
    }

    public function create(){
        $companies = Company::all();

        return view('surveys.risk.create', [
            'companies' => $companies
        ]);
    }

    public function store(Request $request) {
        $riskSurvey = Risk::create($request->all());
        $riskSurvey->calification = $this->getCalification($request);
        $riskSurvey->ambiente_trabajo = $this->getAmbienteTrabajo($request);
        $riskSurvey->factores_propios = $this->getFactoresPropios($request);
        $riskSurvey->organizacion_tiempo = $this->getOrganizacionTiempo($request);
        $riskSurvey->liderazgo_trabajo = $this->getLiderazgoTrabajo($request);
        $riskSurvey->condiciones_ambiente = $this->getCondicionesAmbiente($request);
        $riskSurvey->carga_trabajo = $this->getCargaTrabajo($request);
        $riskSurvey->jornada_trabajo = $this->getJornadaTrabajo($request);
        $riskSurvey->trabajo_familia = $this->getIntervencionTrabajoFamilia($request);
        $riskSurvey->falta_control = $this->getFaltaControl($request);
        $riskSurvey->liderazgo = $this->getLiderazgo($request);
        $riskSurvey->relaciones_trabajo = $this->getRelacionesTrabajo($request);
        $riskSurvey->violencia = $this->getViolencia($request);

        $riskSurvey->save();

        return redirect()->route('risk.create')->with([
            'message_success'   => 'La encuesta se envio correctamente.'
        ]);
    }

    public function detail($id) {
        $survey = Risk::find($id);

        $calification = $survey->calification;
        $calificacionFinal = 'Sin datos';

        if($calification <20) {
            $calificacionFinal = 'Nulo';
        }elseif($calification <= 20  && $calification <45) {
            $calificacionFinal = 'Bajo';
        }elseif($calification >=45 && $calification <70) {
            $calificacionFinal = 'Medio';
        }elseif($calification >=70 && $calification <90) {
            $calificacionFinal = 'Alto';
        }elseif($calification >=90) {
            $calificacionFinal = 'Muy alto';
        }

        return view('surveys.risk.detail', [
            'survey' => $survey,
            'calificacionFinal' => $calificacionFinal
        ]); 
    }

    public function getDominio($id){
        $survey = Risk::find($id);
        
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
        $survey = Risk::find($id);
        
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

    public function getCalification($request) {

        $todasLasPreguntas = [];

        for($i=0; $i<=46; $i++) {
            array_push($todasLasPreguntas, 'question_'.$i);
        }

        $respuestas = $request->only($todasLasPreguntas);
        $calificacionFinal = 0;

        foreach($respuestas as $respuesta) {
            $calificacionFinal += $respuesta;
        }

        return $calificacionFinal;
    }

    public function getAmbienteTrabajo($request) {
        $preguntas = [];

        for($i=1; $i<=3; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    }

    public function getFactoresPropios($request) {
        $preguntas = [];

        for($i=4; $i<=13; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        array_push($preguntas, ['question_18', 'question_19', 'question_26', 'question_27', 'question_41', 'question_42', 'question_43']);

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    }

    public function getOrganizacionTiempo($request) {
        $preguntas = [];

        for($i=14; $i<=17; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    }

    public function getLiderazgoTrabajo($request) {
        $preguntas = [];

        for($i=20; $i<=25; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        for($i=28; $i<=40; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        array_push($preguntas, ['question_44', 'question_45', 'question_46']);

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $respuesta) {
            $calification += $respuesta;
        }

        return $calification;
    }

    public function getCondicionesAmbiente($request){
        $preguntas = [];

        for($i=1; $i<=3; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach ($respuestas as $item) {
            $calification += $item;
        }

        return $calification;
    }

    public function getCargaTrabajo($request){
        $preguntas = [];

        for($i=4; $i<=13; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        array_push($preguntas, ['question_41', 'question_42', 'question_43']);

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach($respuestas as $item) {
            $calification += $item;
        }

        return $calification;
    }

    public function getJornadaTrabajo($request){
        $respuestas = $request->only(['question_14', 'question_15']);
        $calification = 0;

        foreach ($respuestas as $item) {
            $calification += $item;
        }

        return $calification;
    }

    public function getIntervencionTrabajoFamilia($request){
        $respuestas = $request->only(['question_16', 'question_17']);
        $calification = 0;

        foreach ($respuestas as $item) {
            $calification += $item;
        }

        return $calification;
    }

    public function getFaltaControl($request){
        $preguntas = [];

        for($i=18; $i<=22; $i++) {
            array_push($preguntas, 'question_'.$i);
        }
        array_push($preguntas, ['question_26', 'question_27']);

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach ($respuestas as $item) {
            $calification += $item;
        }

        return $calification;
    }

    public function getLiderazgo($request){
        $respuestas = $request->only(['question_23', 'question_24', 'question_25', 'question_28, question_29']);
        $calification = 0;

        foreach ($respuestas as $item) {
            $calification += $item;    
        }

        return $calification;
    }

    public function getRelacionesTrabajo($request){
        $respuestas = $request->only(['question_30', 'question_31', 'question_32', 'question_44', 'question_45', 'question_46']);
        $calification = 0;

        foreach ($respuestas as $item) {
            $calification += $item;
        }

        return $calification;
    }

    public function getViolencia($request){
        $preguntas = [];

        for($i=33; $i<=40; $i++) {
            array_push($preguntas, 'question_'.$i);
        }

        $respuestas = $request->only($preguntas);
        $calification = 0;

        foreach ($respuestas as $item) {
            $calification += $item;
        }

        return $calification;
    }
}