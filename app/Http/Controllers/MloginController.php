<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MloginController extends Controller
{

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');

    }

    public function index(){
           
        return view('metrix/login');
    }
}
