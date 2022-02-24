<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sobrenosController extends Controller
{
    public function index(){
        return view('site.sobre-nos');
    }
}
