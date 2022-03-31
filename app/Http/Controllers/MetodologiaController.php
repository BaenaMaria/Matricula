<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetodologiaController extends Controller
{
    public function __invoke(){
        return view('metodologia');
    }
}
