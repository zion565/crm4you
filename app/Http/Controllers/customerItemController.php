<?php

namespace App\Http\Controllers;

use App\tbl_new_customer;
use Illuminate\Http\Request;
use Redirect,Response;

class customerItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(tbl_new_customer::select('*'))
                ->addColumn('action', 'action_button')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('list');
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
        $customer_item_id = $request->id;
        $customer_item  =   tbl_new_customer::updateOrCreate(['id' => $customer_item_id],
            ['name' => $request->name, 'email' => $request->email]);
        return Response::json($customer_item);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($customer_id)
    {
       // if(request()->ajax()) {
            $customer = tbl_new_customer::query()
                ->leftjoin('tbl_accounting_items', 'tbl_history_new_customer.item_id', '=', 'tbl_accounting_items.id')
                ->select('tbl_history_new_customer.id','tbl_accounting_items.item_name', 'tbl_history_new_customer.from_lid', 'tbl_history_new_customer.status', 'tbl_history_new_customer.date')
                ->where('tbl_history_new_customer.customer_id',$customer_id)
                ->get();
           $customer_result = array();

//        echo '<pre>';
//        print_r($customer);
//        echo '</pre>';
//        echo '<hr>';
         foreach($customer as $row){
////                $replacedString = preg_replace("/\\\\u([0-9abcdef]{4})/", "&#x$1;", $row['item_name']);
////                $customer['item_name'] = mb_convert_encoding($replacedString, 'ISO-8859-1');
             $row['date'] = date('d/m/Y h:i', $row['date']);
              $customer_result[0] = $row;
              }
//        echo '<pre>';
//            print_r($customer_result);
//        echo '</pre>';
//            die();
        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => 2,
            "iTotalDisplayRecords" => 3,
            "aaData"=>$customer_result);

            return Response::json($results);

        //}
        //die('error- not in function');
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
        $customerItem  = tbl_new_customer::where($where)->first();

        return Response::json($customerItem);
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
        $customerItem = tbl_new_customer::where('id',$id)->delete();

        return Response::json($customerItem);
    }
}
