<?php

namespace App\Http\Controllers;
use App\Http\Controllers\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        return view('User');

    }
}
