<?php

namespace App\Http\Controllers;

use App\tbl_new_customer;
use Illuminate\Http\Request;
use Redirect,Response;

class customerItemController extends Controller
{

    public $arrstatus;
    public $arrstatus_color;

    public function __construct()
    {
        $arrstatus_new_customer = [];
        $arrstatus_new_customer[0] = "פתוח";
        $arrstatus_new_customer[1] = "רכש";
        $arrstatus_new_customer[2] = "לא רכש";
        $arrstatus_new_customer_color = [];
        $arrstatus_new_customer_color[0] = "#ffdda5";
        $arrstatus_new_customer_color[1] = "#d8f5e8";
        $arrstatus_new_customer_color[2] = "#ffa68d96";

        $this->arrstatus = $arrstatus_new_customer;
        $this->arrstatus_color =$arrstatus_new_customer_color;
    }
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

        if ($customer_item_id==''){
            $tbl_customer_item = new tbl_new_customer;

            $tbl_customer_item->name = $request->name;
            $tbl_customer_item->email =$request->email;
            $tbl_customer_item->phone =$request->phone;
            $tbl_customer_item->status =$request->status;


            $tbl_customer_item->save();
        }else{

            $tbl_customer_item = tbl_customer::find($customer_item_id);

            $tbl_customer_item->name = $request->name;
            $tbl_customer_item->email =$request->email;
            $tbl_customer_item->phone =$request->phone;
            $tbl_customer_item->status =$request->status;

            $tbl_customer_item->save();

        }
        return Response::json($tbl_customer_item);
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
            $customer_items = tbl_new_customer::query()
                ->leftjoin('tbl_accounting_items', 'tbl_history_new_customer.item_id', '=', 'tbl_accounting_items.id')
                ->select('tbl_history_new_customer.id','tbl_accounting_items.item_name', 'tbl_history_new_customer.from_lid', 'tbl_history_new_customer.status', 'tbl_history_new_customer.date')
                ->where('tbl_history_new_customer.customer_id',$customer_id)
                ->get();

        return datatables()->of($customer_items)
            ->addColumn('id_checkbox', function ($row) {
                return '<label class="customcheckbox"><input type="checkbox" class="listCheckbox">
                                                                  <span class="checkmark"></span>
                                                            </label><br>'.$row['id'].' ';
            })

    ->addColumn('item', function ($row) {
        return '<div style="background-color: '.$this->arrstatus_color[$row['status']].'" class="row col-lg-12">
<div class="col-md-6">'.$row['item_name'].'</div>
<div class="col-md-6">'.$row['from_lid'].'</div>
<div class="col-md-4">'.$this->arrstatus[$row['status']].'</div>
<div class="col-md-8">'.date('d/m/Y h:i', $row['date']).'</div></div> ';
    })
            ->addColumn('action_status', function ($row) {
                return '
    <a href="javascript:void(0);" id="delete-customer-item" data-toggle="tooltip" data-original-title="Delete" data-id="'. $row["id"] .'" class="delete btn btn-outline-success btn-sm">
    רכש
    </a>
    <a href="javascript:void(0);" id="delete-customer-item" data-toggle="tooltip" data-original-title="Delete" data-id="'. $row["id"] .'" class="delete btn btn-outline-danger btn-sm">
    לא רכש
    </a>
    ';})

            ->addColumn('action_item', function ($row) {
                return '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row["id"] .'" data-original-title="Edit" class="edit btn btn-success btn-sm edit-customer-item">
    ערוך
    </a>
    <a href="javascript:void(0);" id="delete-customer-item" data-toggle="tooltip" data-original-title="Delete" data-id="'. $row["id"] .'" class="delete btn btn-danger btn-sm">
    מחק
    </a>
    ';
            })
            ->rawColumns(['id_checkbox','item','action_status','action_item'])


            ->addIndexColumn()
            ->make(true);
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
