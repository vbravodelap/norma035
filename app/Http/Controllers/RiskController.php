<?php

namespace App\Http\Controllers;

use App\Risk;
use Illuminate\Http\Request;

class RiskController extends Controller
{

    public function create(){
        return view('surveys.risk.create');
    }

    public function store(Request $request) {
        $riskSurvey = Risk::create($request->all());
        $riskSurvey->calification = $this->getCalification($request);
        $riskSurvey->save();

        return redirect()->route('risk.create')->with([
            'message'   => 'La encuesta se envio correctamente.'
        ]);
    }

    public function getUnoAlNueve($request) {
        $preguntasAmbienteDeTrabajo = [];

        // Ambiente de trabajo y Condiciones en el ambiente de trabajo
        for($i=0; $i<=3; $i++) {
            array_push($preguntasAmbienteDeTrabajo, 'question_'.$i);    
        }

        $respuestasAmbienteDeTrabajo = $request->only($preguntasAmbienteDeTrabajo);
        $calificacionAmbienteDeTrabajo = 0;

        foreach($respuestasAmbienteDeTrabajo as $item) {
            $calificacionAmbienteDeTrabajo += $item;
        }

        $preguntasFactoresPropios = $request->only([
            'question_4',
            'question_5',
            'question_6',
            'question_7',
            'question_8',
            'question_9'
        ]);
        
        $calificacionFactoresPropios = 0;
        foreach($preguntasFactoresPropios as $item) {
            $calificacionFactoresPropios += $item;
        }

        return array($calificacionAmbienteDeTrabajo, $calificacionFactoresPropios);
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
}
