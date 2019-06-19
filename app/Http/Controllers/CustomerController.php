<?php

namespace App\Http\Controllers;

use App\tbl_customer;
use App\tbl_status_setting;
use Illuminate\Http\Request;
use Redirect,Response;
use Illuminate\Routing\Route;

use \Yajra\Datatables\Datatables;

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
        if(request()->ajax()) {

            $all_customer = tbl_customer::query()
                ->select('tbl_customer.id', 'tbl_customer.created_at', 'tbl_customer.update_at', 'tbl_customer.name', 'tbl_customer.phone', 'tbl_customer.email', 'tbl_status_setting.id as status_id','tbl_status_setting.color as status_color','tbl_status_setting.title as status_title')
                ->leftJoin('tbl_status_setting', 'tbl_customer.status', '=', 'tbl_status_setting.id')
                ->limit(65)
               // ->orderByDesc('id')
                ->orderBy('id')
                ->get();

            return datatables()->of($all_customer)
                ->addColumn('id_checkbox', function ($row) {
                    return '<label class="customcheckbox">'.$row['id'].
                        '<input type="checkbox" class="listCheckbox">
                                                                  <span class="checkmark"></span>
                                                            </label>';
                })
                ->addColumn('ditalis', function ($row) {
                    return '<div style="max-width: 350px !important;">
                                                                        <table class="" style="width: 100%;">
                                                                             
                                                                              <tr>

                                                                                    <td colspan="2"><strong>'.$row["name"].'</strong></td>
                                                                                    <td colspan="2"><strong>'.$row['email'].'</strong></td>
                                                                                    
                                                                              </tr>
                                                                              <tr>
                                                                                    <td colspan="2"><a href="tel:0549232204"><strong>'.$row["phone"].'</strong></a></td>
                                                                                    <td colspan="2"><span class="badge badge-pill float-right" style="background-color: '.$row["status_color"].'">'.$row["status_title"].'</span></td>
                                                                             
                                                                             
                                                                              </tr>
                                                                              <tr>
                                                                                    <td style=" text-align: right;"><strong>יצירה</strong></td>
                                                                                    <td>'.date("d/m/Y h:i", strtotime($row["created_at"])).'</td>
                                                                                    <td style=" text-align: right;"><strong>עריכה</strong></td>
                                                                                    <td>'.date("d/m/Y h:i", $row["update_at"]).'</td>
                                                                               </tr>
                                                                              
                                                                        </table>
                                                                  </div>';
                })
                ->addColumn('action', function ($row) {
                    return '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'. $row["id"].'" data-original-title="Edit" class="edit btn btn-success edit-customer">
                                                                        ערוך
                                                                  </a>
                                                                  <a href="javascript:void(0);" id="delete-user" data-toggle="tooltip" data-original-title="Delete" data-id="'. $row["id"] .'" class="delete btn btn-danger">
                                                                        מחק
                                                                  </a>';

                })
//                ->addColumn('action', 'action_button')
                ->rawColumns(['id_checkbox','ditalis','action'])
                ->addIndexColumn()
                ->make(true);
        }


        $statuses = tbl_status_setting::orderBy('id')->get();

        return view('metrix/pages/customer')->with([
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
//        $customer  =   tbl_customer::updateOrCreate(['id' => $customer_id],
//            ['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone, 'status' => $request->status]);
//        echo '<pre>'.print_r(['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone, 'status' => $request->status],true).'</pre>';
        if ($customer_id==''){
            $tbl_customer = new tbl_customer;

            $tbl_customer->name = $request->name;
            $tbl_customer->email =$request->email;
            $tbl_customer->phone =$request->phone;
            $tbl_customer->status =$request->status;


            $tbl_customer->save();
        }else{

            $tbl_customer = tbl_customer::find($customer_id);

            $tbl_customer->name = $request->name;
            $tbl_customer->email =$request->email;
            $tbl_customer->phone =$request->phone;
            $tbl_customer->status =$request->status;

            $tbl_customer->save();

        }
        return Response::json($tbl_customer);
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
        $customer = tbl_customer::where('id',$id)->delete();

        return Response::json($customer);
    }
}
