<?php

namespace App\Http\Controllers;

use App\Company;
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

        $companies = Company::all();

        return view('surveys.traumatic.create', [
            'companies' => $companies
        ]);
    }

    public function store(Request $request){

        if($request->question_1 == 'no') {
            $survey = Traumatic::create($request->all());
            $survey->status = 'No requiere atención clinica';
            $survey->save();
        }elseif($request->question_1 == 'yes') {
            $survey = Traumatic::create($request->all());
            $survey->status = 'Requiere atención clinica';
            $survey->save();
        }

        return redirect()->route('traumatic.create')->with([
            'message'   => 'La encuesta se envio correctamente.'
        ]);

    }
}
