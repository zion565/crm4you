<?php

namespace App\Http\Controllers;

use App\tbl_customer;
use App\tbl_status_setting;
use Illuminate\Http\Request;
use Redirect,Response;
use Illuminate\Routing\Route;

class CustomerController extends Controller
{
    protected $redirectTo = '/';
    public $customer_noreed;
    public $new_customer_noreed;

    public function __construct()
    {
        $this->middleware('auth');
        $this->customer_noreed = tbl_customer::where(['reed'=>0,'del'=>0])->get();
        $this->new_customer_noreed = tbl_customer::where(['reed'=>0,'del'=>0])->get();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $customer = tbl_customer::query()
//            ->join('tbl_history_new_customer', 'tbl_customer.id', '=', 'tbl_history_new_customer.customer_id')
//            ->join('tbl_status_setting', 'tbl_customer.status', '=', 'tbl_status_setting.id')
//            ->select('tbl_customer.id','tbl_customer.created_at', 'tbl_customer.name', 'tbl_customer.phone', 'tbl_customer.email','tbl_status_setting.*','tbl_history_new_customer.from_lid')
//            ->get();
//
//        return view('metrix/pages/customer')->with(['customer' => $customer]);
////        echo '<pre>'. print_r($customer,true).'</pre>';
////        die();
        $all_customer = tbl_customer::query()
            ->join('tbl_history_new_customer', 'tbl_customer.id', '=', 'tbl_history_new_customer.customer_id')
            ->join('tbl_status_setting', 'tbl_customer.status', '=', 'tbl_status_setting.id')
            ->select('tbl_customer.id', 'tbl_customer.created_at', 'tbl_customer.update_at', 'tbl_customer.name', 'tbl_customer.phone', 'tbl_customer.email', 'tbl_status_setting.id as status_id','tbl_status_setting.color as status_color','tbl_status_setting.title as status_title', 'tbl_history_new_customer.from_lid')
            ->limit(100)
            ->orderByDesc('id')
            ->get();
       // $statuses = tbl_status_setting::all();
        $statuses = tbl_status_setting::orderBy('id')->get();

        return view('metrix/pages/customer')->with(['all_customer' => $all_customer,
            'customer_noreed' => $this->customer_noreed,
            'new_customer_noreed' => $this->new_customer_noreed,'statuses' => $statuses]);

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
        $customer_id = $request->id;
        $customer  =   tbl_customer::updateOrCreate(['id' => $customer_id],
            ['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone, 'status' => $request->status]);
        //echo '<pre>'.print_r($customer).'</pre>';
        return Response::json($customer);
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
        $where = array('id' => $id);
        $customer = tbl_customer::where($where)->first();

        return Response::json($customer);
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
