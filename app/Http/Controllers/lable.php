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
            ->addColumn('id_checkbox', function ($row) {
                return '<label class="customcheckbox"><input type="checkbox" class="listCheckbox">
                                                                  <span class="checkmark"></span>
                                                            </label><br>'.$row['id'].'';
            })

            ->addColumn('item', function ($row) {
                return '<div style="background-color: '.$this->arrstatus_color[$row['status']].'"><div class="row col-lg-12">
<div class="col-md-6">'.$row['item_name'].'</div>
<div class="col-md-6">'.$row['from_lid'].'</div>
<div class="col-md-4">'.$this->arrstatus[$row['status']].'</div>
<div class="col-md-3"><div class="text-right">'.date('d/m/Y h:i', $row['date']).'</div></div>
</div></div>';
            })
            ->addColumn('action_status', function ($row) {
                return '
    <a href="javascript:void(0);" id="delete-customer-item" data-toggle="tooltip" data-original-title="Delete" data-id="'. $row["id"] .'" class="delete btn btn-outline-success btn-sm">
    רכש
    </a>
    <a href="javascript:void(0);" id="delete-customer-item" data-toggle="tooltip" data-original-title="Delete" data-id="'. $row["id"] .'" class="delete btn btn-outline-danger btn-sm">
    לא רכש
    </a>
    ';
            })
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





<tr role="row" class="odd">
                                <td class="sorting_1">
                                    <label class="customcheckbox">
                                        <input type="checkbox" class="listCheckbox">
                                    <span class="checkmark"></span>
                                    </label>
                                    <br>1007</td>

                            <td>
                                <div style="background-color: #d8f5e8" >
                                    <div class="row col-lg-12">
                                    <div class="col-md-6">רצועת מאלף</div>
                                    <div class="col-md-6">הוספה ידנית</div>
                                    <div class="pull-right col-md-4">רכש</div>
                                    <div class="col-md-8"><div class="text-right">14/12/2018 09:19</div></div>
                                    </div>
                                </div>
                            </td>

                            <td>
                              <a href="javascript:void(0);" id="delete-customer-item" data-toggle="tooltip" data-original-title="Delete" data-id="1007" class="delete btn btn-outline-success btn-sm">
רכש
                                </a>
                               <a href="javascript:void(0);" id="delete-customer-item" data-toggle="tooltip" data-original-title="Delete" data-id="1007" class="delete btn btn-outline-danger btn-sm">
לא רכש
</a>
                            </td>


                        <td>
                            <a href="javascript:void(0)" data-toggle="tooltip" data-id="1007" data-original-title="Edit" class="edit btn btn-success btn-sm edit-customer-item">
ערוך
                            </a>
                            <a href="javascript:void(0);" id="delete-customer-item" data-toggle="tooltip" data-original-title="Delete" data-id="1007" class="delete btn btn-danger btn-sm">
מחק
                            </a>
                        </td>
                        </tr>