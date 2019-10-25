<?php

namespace App\Http\Controllers;

use App\Traumatic;
use Illuminate\Http\Request;

class TraumaticController extends Controller
{

    public function index(){
        $surveys = Traumatic::where('user_id', \Auth::user()->id)
            ->get();

        return view('surveys.traumatic.index', [
            'surveys'   => $surveys
        ]);
    }

    public function create(){
        return view('surveys.traumatic.create');
    }

    public function store(Request $request){

        if($request->question_1 == 'no') {
            $survey = Traumatic::create($request->all());
            $survey->status = 'No require atención clinica';
            $survey->save();
        }else {
            $survey = Traumatic::create($request->all());
            $survey->status = 'Require atención clinica';
            $survey->save();
        }

        return redirect()->route('traumatic.create')->with([
            'message'   => 'La encuesta se envio correctamente.'
        ]);

    }
}
