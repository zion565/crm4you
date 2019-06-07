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
        $customer = tbl_customer::all();
        $new_customer = tbl_new_customer::all();

        return view('metrix/pages/deshboard')->with(['customer' => $customer,
            'customer_noreed' => $this->customer_noreed,
            'new_customer' => $new_customer,
            'new_customer_noreed' => $this->new_customer_noreed  ]);
    }
    public function customer()
    {
        $all_customer = tbl_customer::query()
            ->join('tbl_history_new_customer', 'tbl_customer.id', '=', 'tbl_history_new_customer.customer_id')
            ->join('tbl_status_setting', 'tbl_customer.status', '=', 'tbl_status_setting.id')
            ->select('tbl_customer.id', 'tbl_customer.created_at', 'tbl_customer.update_at', 'tbl_customer.name', 'tbl_customer.phone', 'tbl_customer.email', 'tbl_status_setting.id as status_id','tbl_status_setting.color as status_color','tbl_status_setting.title as status_title', 'tbl_history_new_customer.from_lid')
            ->limit(100)
            ->get();


        return view('metrix/pages/customer')->with(['all_customer' => $all_customer,
            'customer_noreed' => $this->customer_noreed,
            'new_customer_noreed' => $this->new_customer_noreed]);
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
