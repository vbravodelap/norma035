<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnvironmentController extends Controller
{
    public function create() {
        return view('surveys.environment.create');
    }
}
