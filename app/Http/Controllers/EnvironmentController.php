<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnvironmentController extends Controller
{
    public function create() {
        return view('surveys.environment.create');
    }

    public function store(Request $request){
        $calification = $this->getCalification($request);

        // Categoría
        $ambienteTrabajo = $this->getAmbienteTrabajo($request);
        $factoresPropios = $this->getFactoresPropios($request);
        $organizacionTiempo = $this->getOrganizacionTiempo($request);
        $liderazgoRelaciones = $this->getLiderazgoRelaciones($request);
        $entornoOrganizacional = $this->getEntornoOrganizacional($request);


        // Dominio
        $condicionesAmbienteTrabajo = $this->getAmbienteTrabajo($request);
        $cargaTrabajo = $this->getCargaTrabajo($request);
        $jornadaTrabajo = $this->getJornadaTrabajo($request);
        $relacionTrabajoFamilia = $this->getRelacionTrabajoFamilia($request);
        $faltaControlTrabajo = $this->getFaltaControlTrabajo($request);
        $liderazgo = $this->getLiderazgo($request);
        $relacionesTrabajo = $this->getRelacionesTrabajo($request);
        $reconocimientoDesempeño = $this->getReconocimientoDesempeño($request);
        $insuficienteSentido = $this->getInsuficienteSentido($request);
        $violencia = $this->getViolencia($request);

        dd($liderazgoRelaciones);
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

}
