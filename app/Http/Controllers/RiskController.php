<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiskController extends Controller
{
    //

    public function create(){
        return view('surveys.risk.create');
    }
}
