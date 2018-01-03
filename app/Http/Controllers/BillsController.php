<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class  BillsController extends Controller
{

    public function __construct()
    {

    }

    public function Bills()
    {
        return view('bills.bills');
    }

    
}
