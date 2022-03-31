<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BecasController extends Controller
{
    public function __invoke(){
        return view('becas');
}
}
