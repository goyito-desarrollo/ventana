<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class  OrdersSapController extends Controller
{

    public function __construct()
    {

    }

    public function ordersSap()
    {
        return view('ordersSap.ordersSap');
    }

    
}
