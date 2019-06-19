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
            $customer_items = tbl_new_customer::query()
                ->leftjoin('tbl_accounting_items', 'tbl_history_new_customer.item_id', '=', 'tbl_accounting_items.id')
                ->select('tbl_history_new_customer.id','tbl_accounting_items.item_name', 'tbl_history_new_customer.from_lid', 'tbl_history_new_customer.status', 'tbl_history_new_customer.date')
                ->where('tbl_history_new_customer.customer_id',$customer_id)
                ->get();

        return datatables()->of($customer_items)

    ->addColumn('item', function ($row) {
        return '<div style="background-color: '.$this->arrstatus_color[$row['status']].'" class="row col-lg-12">
<div class="col-md-4">'.$row['item_name'].'</div>
<div class="col-md-3">'.$row['from_lid'].'</div>
<div class="col-md-2">'.$this->arrstatus[$row['status']].'</div>
<div class="col-md-3">'.date('d/m/Y h:i', $row['date']).'</div></div>
<div class="text-center" >
<div class="col-lg-12" ><a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row["id"] .'" data-original-title="Edit" class="edit btn btn-success btn-sm edit-customer-item">
    ערוך
    </a>
    <a href="javascript:void(0);" id="delete-customer-item" data-toggle="tooltip" data-original-title="Delete" data-id="'. $row["id"] .'" class="delete btn btn-danger btn-sm">
    מחק
    </a>
    <a href="javascript:void(0);" id="delete-customer-item" data-toggle="tooltip" data-original-title="Delete" data-id="'. $row["id"] .'" class="delete btn btn-outline-success btn-sm">
    רכש
    </a>
    <a href="javascript:void(0);" id="delete-customer-item" data-toggle="tooltip" data-original-title="Delete" data-id="'. $row["id"] .'" class="delete btn btn-outline-danger btn-sm">
    לא רכש
    </a></div></div>
    ';
    })
//            ->addColumn('item', function ($row) {
//                return '<td>'.$row['item_name'].'</td>';
//            })
//            ->addColumn('from_lid', function ($row) {
//                return '<td class="text-success">'.$row['from_lid'].'</td>';
//
//            })
//            ->addColumn('status', function ($row) {
//                return '<td>'.$this->arrstatus[$row['status']].'</td>';
//
//            })
//            ->addColumn('date', function ($row) {
//                return '<td>'.date('d/m/Y h:i', $row['date']).'</td>';
//
//            })
//            ->addColumn('action', function ($row) {
//                return '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'. $row["id"].'" data-original-title="Edit" class="edit btn btn-success btn-sm edit-customer-item">
//                                                                        ערוך
//                                                                  </a>
//                                                                  <a href="javascript:void(0);" id="delete-customer-item" data-toggle="tooltip" data-original-title="Delete" data-id="'. $row["id"] .'" class="delete btn btn-danger btn-sm">
//                                                                        מחק
//                                                                  </a>
//                                                                  <a href="javascript:void(0);" id="delete-customer-item" data-toggle="tooltip" data-original-title="Delete" data-id="'. $row["id"] .'" class="delete btn btn-outline-success btn-sm">
//                                                                        רכש
//                                                                  </a>
//                                                                  <a href="javascript:void(0);" id="delete-customer-item" data-toggle="tooltip" data-original-title="Delete" data-id="'. $row["id"] .'" class="delete btn btn-outline-danger btn-sm">
//                                                                        לא רכש
//                                                                  </a>';
//
//            })
            ->addColumn('id_checkbox', function ($row) {
                return '<label class="customcheckbox">'.$row['id'].
                    '<input type="checkbox" class="listCheckbox">
                                                                  <span class="checkmark"></span>
                                                            </label>';
            })
//            ->rawColumns(['item','from_lid','status','date','action','id_checkbox'])
            ->rawColumns(['item','id_checkbox'])

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
