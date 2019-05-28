<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MloginController extends Controller
{
    public function index(){
           
        return view('metrix/login');
    }
}
