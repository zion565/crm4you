@extends('metrix/layouts/app')

@section('content')
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <style >
            .table td, .table th{
                  padding: 2px !important;
                  vertical-align: center !important;
            }

      </style>
{{--      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />--}}
{{--      <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">--}}
{{--      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}
{{--      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>--}}
{{--      <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>--}}
{{--      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>--}}

      <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                  <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                              <h4 class="page-title">Tables</h4>
                              <div class="ml-auto text-right">
                                    <nav aria-label="breadcrumb">
                                          <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                                          </ol>
                                    </nav>
                              </div>
                        </div>
                  </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                  <!-- ============================================================== -->
                  <!-- Start Page Content -->
                  <!-- ============================================================== -->
            <div class="row">
<div class="col-sm-7">
                              <div class="card">
                                    <div class="card-body">
                                          <h5 class="card-title">לקוחות</h5>
                                          <div class="table-responsive">

                                                <a href="javascript:void(0)" class="btn btn-info ml-3" id="create-new-customer">הוספת לקוח חדש</a>
                                                <br><br>
                                                <table id="zero_config" class="table table-striped table-bordered">

                                                      <tr>
                                                            <th>ID</th>
                                                            <th>פרטי לקוח</th>

                                                            <th>פעולות</th>
                                                            <th>id-hidden</th>
                                                      </tr>

                                                      <tbody>
{{--                                                      @foreach($all_customer as $row)--}}
{{--                                                      <tr>--}}
{{--                                                            <td>--}}
{{--                                                            <label class="customcheckbox">{{$row['id']}}--}}
{{--                                                                  <input type="checkbox" class="listCheckbox">--}}
{{--                                                                  <span class="checkmark"></span>--}}
{{--                                                            </label>--}}
{{--                                                            </td>--}}
{{--                                                            <td>--}}
{{--                                                                  <div style="max-width: 350px !important;">--}}
{{--                                                                        <table class="" style="width: 100%;">--}}
{{--                                                                              <tbody>--}}
{{--                                                                              <tr>--}}

{{--                                                                                    <td><strong>{{$row['name']}}</strong></td>--}}
{{--                                                                                    <th style=" text-align: right;"><strong>יצירה</strong></th>--}}
{{--                                                                                    <td>{{date('d/m/Y h:i', strtotime($row['created_at']))}}</td>--}}
{{--                                                                              </tr>--}}
{{--                                                                              <tr>--}}
{{--                                                                                    <td><strong>{{$row['email']}}</strong></td>--}}
{{--                                                                                    <th style=" text-align: right;"><strong>עריכה</strong></th>--}}
{{--                                                                                    <td>{{date('d/m/Y h:i', $row['update_at'])}}</td>--}}
{{--                                                                              </tr>--}}
{{--                                                                              <tr>--}}
{{--                                                                                    <td><a href="tel:0549232204"><strong>{{$row['phone']}}</strong></a></td>--}}
{{--                                                                                    <th style=" text-align: right;"><strong>סטטוס</strong></th>--}}
{{--                                                                                    <td><span class="badge badge-pill float-right" style="background-color: {{$row['status_color']}}">{{$row['status_title']}}</span></td>--}}
{{--                                                                              </tr>--}}
{{--                                                                              </tbody>--}}
{{--                                                                        </table>--}}
{{--                                                                  </div>--}}
{{--                                                            </td>--}}
{{--                                                            <td>--}}
{{--                                                                  <a href="javascript:void(0)" data-toggle="tooltip"  data-id="{{ $row['id'] }}" data-original-title="Edit" class="edit btn btn-success edit-customer">--}}
{{--                                                                        ערוך--}}
{{--                                                                  </a>--}}
{{--                                                                  <a href="javascript:void(0);" id="delete-user" data-toggle="tooltip" data-original-title="Delete" data-id="{{ $row['id'] }}" class="delete btn btn-danger">--}}
{{--                                                                        מחק--}}
{{--                                                                  </a>--}}
{{--                                                            </td>--}}
{{--                                                            <td>{{$row['id']}}</td>--}}
{{--                                                      </tr>--}}
{{--@endforeach--}}
                                                      </tbody>

                                                </table>
                                          </div>

                                    </div>
                              </div>
                        </div>

      <div class="col-md-5">
            <div class="card">
                  <div class="card-body">
                        <h5 class="card-title m-b-0">מוצרים שהתעניין/רכש</h5>
                  </div>
                  <table class="table" id="customer_item_table">
                        <thead>
                        <tr>

                              <th scope="col">item_id</th>
                              <th scope="col">from_lid</th>
                              <th scope="col">status</th>
                              <th scope="col">date</th>
                              <th scope="col">id</th>
                              <th scope="col">id</th>

                        </tr>
                        </thead>
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                              <td>Making The New Suit</td>--}}
{{--                              <td class="text-success">Progress</td>--}}
{{--                              <td>--}}
{{--                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Update">--}}
{{--                                          <i class="mdi mdi-check"></i>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Delete">--}}
{{--                                          </i><i class="mdi mdi-close"></i>--}}
{{--                                    </a>--}}
{{--                              </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                              <td>Luanch My New Site</td>--}}
{{--                              <td class="text-warning">Pending</td>--}}
{{--                              <td>--}}
{{--                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Update">--}}
{{--                                          <i class="mdi mdi-check"></i>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Delete">--}}
{{--                                          </i><i class="mdi mdi-close"></i>--}}
{{--                                    </a>--}}
{{--                              </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                              <td>Maruti Excellant Theme</td>--}}
{{--                              <td class="text-danger">Cancled</td>--}}
{{--                              <td>--}}
{{--                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Update">--}}
{{--                                          <i class="mdi mdi-check"></i>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Delete">--}}
{{--                                          </i><i class="mdi mdi-close"></i>--}}
{{--                                    </a>--}}
{{--                              </td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
                  </table>
            </div>
            <div class="card">
                  <div class="card-body">
                        <h4 class="card-title m-b-0">Recent Posts</h4>
                  </div>
                  <div class="comment-widgets scrollable">
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row m-t-0">
                              <div class="p-2"><img src="assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                              <div class="comment-text w-100">
                                    <h6 class="font-medium">James Anderson</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
                                          <span class="text-muted float-right">April 14, 2016</span>
                                          <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                          <button type="button" class="btn btn-success btn-sm">Publish</button>
                                          <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                              </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row">
                              <div class="p-2"><img src="assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle"></div>
                              <div class="comment-text active w-100">
                                    <h6 class="font-medium">Michael Jorden</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
                                          <span class="text-muted float-right">May 10, 2016</span>
                                          <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                          <button type="button" class="btn btn-success btn-sm">Publish</button>
                                          <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                              </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row">
                              <div class="p-2"><img src="assets/images/users/5.jpg" alt="user" width="50" class="rounded-circle"></div>
                              <div class="comment-text w-100">
                                    <h6 class="font-medium">Johnathan Doeting</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
                                          <span class="text-muted float-right">August 1, 2016</span>
                                          <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                          <button type="button" class="btn btn-success btn-sm">Publish</button>
                                          <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                              </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row">
                              <div class="p-2"><img src="assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle"></div>
                              <div class="comment-text w-100">
                                    <h6 class="font-medium">Johnathan Doeting</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
                                          <span class="text-muted float-right">August 1, 2016</span>
                                          <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                          <button type="button" class="btn btn-success btn-sm">Publish</button>
                                          <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                              </div>
                        </div>
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row">
                              <div class="p-2"><img src="assets/images/users/3.jpg" alt="user" width="50" class="rounded-circle"></div>
                              <div class="comment-text w-100">
                                    <h6 class="font-medium">Johnathan Doeting</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
                                          <span class="text-muted float-right">August 1, 2016</span>
                                          <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                          <button type="button" class="btn btn-success btn-sm">Publish</button>
                                          <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

            </div>
      </div>

                  <!-- ============================================================== -->
                  <!-- End PAge Content -->
                  <!-- ============================================================== -->
                  <!-- ============================================================== -->
                  <!-- Right sidebar -->
                  <!-- ============================================================== -->
                  <!-- .right-sidebar -->
                  <!-- ============================================================== -->
                  <!-- End Right sidebar -->
                  <!-- ============================================================== -->
      </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
      @include('metrix/inc/model')

      <!-- this page js -->
      <script src="{{ asset('metrix_file/assets/libs/jquery/dist/jquery.min.js')}}"></script>
      <script src="{{ asset('metrix_file/assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
      <script src="{{ asset('metrix_file/assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
      <script src="{{ asset('metrix_file/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
      <script>
            /****************************************
             *      customer Table                   *
             ****************************************/
            var SITEURL = '{{URL::to('')}}';

            var table = "",table_item = "";
           // var selected = [];
            $(document).ready( function () {
                  table = $('#zero_config').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: SITEURL + "/customers",

                        // ajax: {
                        //       url: SITEURL + "/customers/0",
                        //       type: 'GET',
                        // },
                        // "aoColumns": [
                        //       { mData: 'id_checkbox'},
                        //       { mData: 'ditalis'},
                        //       { mData: 'action'},
                        //       { mData: 'id'}
                        // ],
                        columns: [
                              {data: 'id_checkbox'},
                              //{data: 'customer_id', name: 'customer_id', orderable: false,searchable: false},
                              { data: 'ditalis'},
                              { data: 'action' },
                              {data: 'id', 'visible': false}
                              // {data: 'id', name: 'id', orderable: false}
                        ],
                        "rowCallback": function( row, data ) {

                              // if ( $.inArray(data.DT_RowId, selected) !== -1 ) {
                              //       $(row).addClass('selected');
                              // }
                        },
                  "columnDefs": [
                        {
                              "targets": [ 3 ],
                              "visible": false
                        },
                  ],
                  order: [[0, 'desc']],
                        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                  "language": {
                        "lengthMenu": "מציג _MENU_ רשומות בדף ",
                        "zeroRecords": "לא נמצאו רשומות",
                        "info": "מציג דף _PAGE_ מתוך _PAGES_",
                        "infoEmpty": "אין רשומות קיימות",
                        "infoFiltered": "(filtered from _MAX_ total records)",
                        "emptyTable":     "אין מידע להצגה בטבלה זו",
                        "loadingRecords": "טוען...",
                        "processing":     "מעבד...",
                        "search":         "חיפוש:",
                        "paginate": {
                              "first":      "ראשון",
                              "last":       "אחרון",
                              "next":       "הבא",
                              "previous":   "הקודם"
                        }
                  },

            });
            });
            $('#zero_config tbody').on( 'click', 'tr', function () {

                  if ( $(this).hasClass('st-selected') ) {
                        $(this).removeClass('st-selected');
                  }
                  else {
                        table.$('tr.st-selected').removeClass('st-selected');
                        $(this).addClass('st-selected');

                        var rowData = table.row('.st-selected').data();

                       // reloadTableCustomerHistory(rowData['id_customer']);
                        console.log(rowData['id']);
                        if(table_item!=""){
                              table_item.destroy();
                        }
                        customer_item_table(rowData['id']);
                        // reloadTableContactHistory(rowData);
                        //  reloadTableRemember(rowData);
                  }


                  //alert(rowData['id_customer']);
            } );
            // $('#zero_config tbody').on('click', 'tr', function () {
            //       var id = this.id;
            //       console.log('cli');
            //       console.log(id);
            //       var index = $.inArray(id, selected);
            //
            //       if ( index === -1 ) {
            //             selected.push( id );
            //       } else {
            //             selected.splice( index, 1 );
            //       }
            //
            //       $(this).toggleClass('selected');
            // } );


            /****************************************
             *      customer item Table                   *
             ****************************************/

           function customer_item_table(id) {
                  console.log('the id: '+id);

                        $.ajaxSetup({
                              headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                              }
                        });
                  table_item = $('#customer_item_table').DataTable({
                              // "stateSave": true,
                              // "bProcessing": true,
                              // "sAjaxSource": SITEURL + "/customer_item/"+id,
                              //
                              // "aoColumns": [
                              //       { mData: 'item_name'},
                              //       { mData: 'from_lid'},
                              //       { mData: 'status'},
                              //       { mData: 'date'},
                              //       { mData: 'id'},
                              //       { mData: 'id'},
                              //
                              // ],
                              processing: true,
                              serverSide: true,
                              ajax: {
                                    url: SITEURL + "/customer_item/"+id,
                                    type: 'GET',
                              },
                              columns: [
                                    {data: 'item_name', name: 'item_name', 'visible': true},
                                    //{data: 'customer_id', name: 'customer_id', orderable: false,searchable: false},

                                    { data: 'from_lid', name: 'from_lid' },
                                    { data: 'status', name: 'status' },
                                    { data: 'date', name: 'date' },
                                    { data: 'id', name: 'id' },
                                    {data: 'id', name: 'id', orderable: false}
                              ],
                             //order: [[0, 'desc']],
                              "language": {
                                    "lengthMenu": "מציג _MENU_ רשומות בדף ",
                                    "zeroRecords": "לא נמצאו רשומות",
                                    "info": "מציג דף _PAGE_ מתוך _PAGES_",
                                    "infoEmpty": "אין רשומות קיימות",
                                    "infoFiltered": "(filtered from _MAX_ total records)",
                                    "emptyTable":     "אין מידע להצגה בטבלה זו",
                                    "loadingRecords": "טוען...",
                                    "processing":     "מעבד...",
                                    "search":         "חיפוש:",
                                    "paginate": {
                                          "first":      "ראשון",
                                          "last":       "אחרון",
                                          "next":       "הבא",
                                          "previous":   "הקודם"
                                    }
                              }
                        });
           }

            $('#create-new-customer').click(function () {
                  $('#btn-save').val("create-user");
                  $('#id').val('');
                  $('#userForm').trigger("reset");
                  $('#userCrudModal').html("הוספת לקוח חדש");
                  $('#customer-modal').modal('show');
            });
            $('body').on('click', '.edit-customer', function () {
                  var user_id = $(this).data('id');
                  $.get('customers/' + user_id +'/edit', function (data) {
                        $('#name-error').hide();
                        $('#email-error').hide();
                        $('#userCrudModal').html("Edit User");
                        $('#btn-save').val("edit-user");
                        $('#customer-modal').modal('show');
                        $('#id').val(data.id);
                        $('#name').val(data.name);
                        $('#email').val(data.email);
                        $('#phone').val(data.phone);
                        $('#status').val(data.status);
                  })
            });

            $('body').on('click', '#delete-user', function () {

                  var user_id = $(this).data("id");
                  confirm("בטוח שברצונך למחוק?");

                  $.ajax({
                        type: "get",
                        url: SITEURL + "/customers/delete/"+user_id,
                        success: function (data) {
                             // var dTable = $('#zero_config').dataTable();

                              //table.order( [[0, 'desc']] ).draw();
                              table.page( 'next' ).draw( 'page' );
                              //dTable.fnDraw(false);
                              console.log('after drow');
                             // $('#zero_config').DataTable();
                        },
                        error: function (data) {
                              console.log('Error:', data);
                        }
                  });
            });
           // $(document).ready( function () {
                  $('body').on('click', '#btn-save', function () {
                        console.log('click');
            //if ($("#userForm").length > 0) {
                        $('#userForm').validate();
                        if ($('#userForm').valid()) // check if form is valid
                        {
                              var actionType = $('#btn-save').val();
                                          $('#btn-save').html('Sending..');

                                          $.ajax({
                                                data: $('#userForm').serialize(),
                                                url: SITEURL + "/customers/store",
                                                type: "POST",
                                                dataType: 'json',
                                                beforeSend: function (request) {
                                                      return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
                                                },
                                                success: function (data) {
                                                      console.log('Ok:', data);
                                                      $('#userForm').trigger("reset");
                                                      $('#customer-modal').modal('hide');
                                                      $('#btn-save').html('שמור');
                                                      var oTable = $('#zero_config').dataTable();
                                                      oTable.fnDraw();

                                                },
                                                error: function (data) {
                                                      console.log('Error:', data);
                                                      $('#btn-save').html('שמור');
                                                }
                                          });
                        }
                        else
                        {
                              console.log('Error:no validate');
                        }


                  // $("#userForm").validate({
                  //
                  //       submitHandler: function(form) {
                  //
                  //             var actionType = $('#btn-save').val();
                  //             $('#btn-save').html('Sending..');
                  //
                  //             $.ajax({
                  //                   data: $('#userForm').serialize(),
                  //                   url: SITEURL + "customers/store",
                  //                   type: "POST",
                  //                   dataType: 'json',
                  //                   success: function (data) {
                  //                         console.log('Ok:', data);
                  //                         $('#userForm').trigger("reset");
                  //                         $('#customer-modal').modal('hide');
                  //                         $('#btn-save').html('שמור');
                  //                         var oTable = $('#zero_config').dataTable();
                  //                         oTable.fnDraw(false);
                  //
                  //                   },
                  //                   error: function (data) {
                  //                         console.log('Error:', data);
                  //                         $('#btn-save').html('שמור');
                  //                   }
                  //             });
                  //       }
                  // });
          //  }
            });

      </script>
     @endsection
    