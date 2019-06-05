<?php

namespace App\Http\Controllers;

use App\tbl_customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $customer = tbl_customer::query()
            ->join('tbl_history_new_customer', 'tbl_customer.id', '=', 'tbl_history_new_customer.customer_id')
            ->join('tbl_status_setting', 'tbl_customer.status', '=', 'tbl_status_setting.id')
            ->select('tbl_customer.id','tbl_customer.created_at', 'tbl_customer.name', 'tbl_customer.phone', 'tbl_customer.email','tbl_status_setting.*','tbl_history_new_customer.from_lid')
            ->get();

        return view('metrix/pages/customer')->with(['customer' => $customer]);
//        echo '<pre>'. print_r($customer,true).'</pre>';
//        die();


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
