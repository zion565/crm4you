<?php

namespace App\Http\Controllers;

use App\tbl_customer;
use App\tbl_new_customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class DashboardController extends Controller
{
    /**
     * Where to redirect users after/if loguot.
     *
     * @var string
     */
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = tbl_customer::all();
        $customer_noreed = tbl_customer::where(['reed'=>0,'del'=>0])->get();

        $new_customer = tbl_new_customer::all();
        $new_customer_noreed = tbl_customer::where(['reed'=>0,'del'=>0])->get();

        return view('metrix/pages/deshboard')->with(['customer' => $customer,
            'customer_noreed' => $customer_noreed,
            'new_customer' => $new_customer,
            'new_customer_noreed' => $new_customer_noreed  ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
