<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        return view('Login');
    }

    public function login()
    {



        return view('/welcome');
    }

}
