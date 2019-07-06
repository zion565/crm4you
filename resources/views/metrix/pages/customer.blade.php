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

                                                <table id="zero_config" class="table table-striped table-bordered">

                                                      <tr>
                                                            <th>ID</th>
                                                            <th>פרטי לקוח</th>

                                                            <th>פעולות</th>
                                                            <th>id-hidden</th>
                                                      </tr>

                                                      <tbody>

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
                <div class="table-responsive">
                <a href="javascript:void(0)" class="btn btn-info ml-3" id="create-new-customer-item">הוספת מוצר</a>

                <table class="table" id="customer_item_table">

                        <tr>
                              <th>id</th>
                              <th>פרטים</th>
                            <th>שינוי סטטוס</th>
                            <th>פעולות</th>

                        </tr>

                        <tbody>

                        </tbody>
                  </table>
                </div>
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
            $('#create-new-customer').click(function () {
                $('#btn-customer-save').text("צור");
                $('#id').val('');
                $('#customerForm').trigger("reset");
                $('#customerTitleModal').html("הוספת לקוח חדש");
                $('#customer-modal').modal('show');
            });
            $('body').on('click', '.edit-customer', function () {
                var customer_id = $(this).data('id');
                $.get('customers/' + customer_id +'/edit', function (data) {
                    $('#name-error').hide();
                    $('#email-error').hide();
                    $('#customerTitleModal').html("עריכת לקוח");
                    $('#btn-customer-save').text("ערוך");
                    $('#customer-modal').modal('show');
                    $('#id').val(data.id);
                    $('#name').val(data.name);
                    $('#email').val(data.email);
                    $('#phone').val(data.phone);
                    $('#status').val(data.status);
                })
            });

            $('body').on('click', '#delete-customer', function () {

                var customer_id = $(this).data("id");
                confirm("בטוח שברצונך למחוק?");

                $.ajax({
                    type: "get",
                    url: SITEURL + "/customers/delete/"+customer_id,
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
            $('body').on('click', '#btn-customer-save', function () {
                console.log('click');
                //if ($("#userForm").length > 0) {
                $('#customerForm').validate();
                if ($('#customerForm').valid()) // check if form is valid
                {
                    var actionType = $('#btn-save').val();
                    $('#btn-save').html('Sending..');

                    $.ajax({
                        data: $('#customerForm').serialize(),
                        url: SITEURL + "/customers/store",
                        type: "POST",
                        dataType: 'json',
                        beforeSend: function (request) {
                            return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
                        },
                        success: function (data) {
                            console.log('Ok:', data);
                            $('#customerForm').trigger("reset");
                            $('#customer-modal').modal('hide');
                            $('#btn-customer-save').html('שמור');
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
            });

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
                        processing: true,
                        serverSide: true,
                        ajax: SITEURL + "/customer_item/"+id,
                        columns: [
                              { data: 'id_checkbox'},
                              { data: 'item'},
                              {data: 'action_status'},
                              { data: 'action_item' },
                              // { data: 'from_lid'},
                              // { data: 'status'},
                              // { data: 'date'},
                              // { data: 'action'},
                              // { data: 'id'}
                        ],

                        "rowCallback": function( row, data ) {

                              // if ( $.inArray(data.DT_RowId, selected) !== -1 ) {
                              //       $(row).addClass('selected');
                              // }
                        },
                        // "columnDefs": [
                        //       {
                        //             "targets": [ 5 ],
                        //             "visible": false
                        //       },
                        // ],
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
                              }
                        });
           }
            $('#create-new-customer-item').click(function () {
                $('#btn-save-item').text("צור");
                $('#id-item').val('');
                $('#customerItemForm').trigger("reset");
                $('#customerItemTitleModal').html("הוספת מוצר");
                $('#customer-item-modal').modal('show');
            });
            $('body').on('click', '.edit-customer-item', function () {
                var customerItem_id = $(this).data('id');
                $.get('customer_item/' + customerItem_id +'/edit', function (data) {
                    $('#name-error').hide();
                    $('#email-error').hide();
                    $('#customerItemTitleModal').html("ערוך מוצר");
                    $('#btn-save').val("ערוך");
                    $('#customer-item-modal').modal('show');
                    $('#item_id').val(data.id);
                    $('#item').val(data.item_id);
                    //$('input:radio[name=sex]').attr('checked',true);
                    $('#status-castomer-item-'+data.status).attr('checked', 'checked');
                    console.log(data.from_lid);
                     $('#from_lid').val(data.from_lid.replace(" ","_"));

                })
            });

            $('body').on('click', '#delete-customerItem', function () {

                var customerItem_id = $(this).data("id");
                confirm("בטוח שברצונך למחוק?");

                $.ajax({
                    type: "get",
                    url: SITEURL + "/customers/delete/"+customerItem_id,
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
                $('#customerItemForm').validate();
                if ($('#customerItemForm').valid()) // check if form is valid
                {
                    var actionType = $('#btn-save').val();
                    $('#btn-save').html('Sending..');

                    $.ajax({
                        data: $('#customerItemForm').serialize(),
                        url: SITEURL + "/customer_item/store",
                        type: "POST",
                        dataType: 'json',
                        beforeSend: function (request) {
                            return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
                        },
                        success: function (data) {
                            console.log('Ok:', data);
                            $('#customerItemForm').trigger("reset");
                            $('#customer-item-modal').modal('hide');
                            $('#btn-item-save').html('שמור');
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
            });

      </script>
     @endsection
    