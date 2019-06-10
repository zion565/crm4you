@extends('metrix/layouts/app')

@section('content')
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <style >
            .table td, .table th{
                  padding: 2px !important;
                  vertical-align: center !important;
            }

      </style>
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
<div class="col-sm-6">
                              <div class="card">
                                    <div class="card-body">
                                          <h5 class="card-title">לקוחות</h5>
                                          <div class="table-responsive">
                                                <table id="zero_config" class="table table-striped table-bordered">
                                                      <thead>
                                                      <tr>
                                                            <th>ID</th>
                                                            <th>פרטי לקוח</th>
                                                            <th>סטטוס לקוח</th>
                                                            <th>פעולות</th>
                                                            <th>id-hidden</th>
                                                      </tr>
                                                      </thead>
                                                      <tbody>
                                                      @foreach($all_customer as $row)
                                                      <tr>
                                                            <td>
                                                            <label class="customcheckbox">{{$row['id']}}
                                                                  <input type="checkbox" class="listCheckbox">
                                                                  <span class="checkmark"></span>
                                                            </label>
                                                            </td>
                                                            <td>
                                                                  <div style="max-width: 350px !important;">
                                                                        <table class="table-ditalis table-hover table-bordered table-striped" style="width: 100%;">
                                                                              <tbody>
                                                                              <tr>
                                                                                    <td><strong>{{$row['name']}}</strong></td>
                                                                                    <th style=" text-align: right;"><strong>יצירה</strong></th>
                                                                                    <td>{{$row['created_at']}}</td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><strong>{{$row['email']}}</strong></td>
                                                                                    <th style=" text-align: right;"><strong>עריכה</strong></th>
                                                                                    <td>{{$row['update_at']}}4</td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td><a href="tel:0549232204"><strong>{{$row['phone']}}</strong></a></td>
                                                                              </tr>
                                                                              </tbody>
                                                                        </table>
                                                                  </div>
                                                            </td>
                                                            <td><span class="badge badge-pill float-right" style="background-color: {{$row['status_color']}}">{{$row['status_title']}}</span></td>
                                                            <td>פעולות</td>
                                                            <td>{{$row['id']}}</td>
                                                      </tr>
@endforeach
                                                      </tbody>
                                                      <tfoot>

                                                      </tfoot>
                                                </table>
                                          </div>

                                    </div>
                              </div>
                        </div>

      <div class="col-md-6">
            <div class="card">
                  <div class="card-body">
                        <h5 class="card-title m-b-0">מוצרים שהתעניין/רכש</h5>
                  </div>
                  <table class="table">
                        <thead>
                        <tr>
                              <th scope="col">Description</th>
                              <th scope="col">Status</th>
                              <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                              <td>Making The New Suit</td>
                              <td class="text-success">Progress</td>
                              <td>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Update">
                                          <i class="mdi mdi-check"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                          </i><i class="mdi mdi-close"></i>
                                    </a>
                              </td>
                        </tr>
                        <tr>
                              <td>Luanch My New Site</td>
                              <td class="text-warning">Pending</td>
                              <td>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Update">
                                          <i class="mdi mdi-check"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                          </i><i class="mdi mdi-close"></i>
                                    </a>
                              </td>
                        </tr>
                        <tr>
                              <td>Maruti Excellant Theme</td>
                              <td class="text-danger">Cancled</td>
                              <td>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Update">
                                          <i class="mdi mdi-check"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                          </i><i class="mdi mdi-close"></i>
                                    </a>
                              </td>
                        </tr>
                        </tbody>
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


      <!-- this page js -->
      <script src="{{ asset('metrix_file/assets/libs/jquery/dist/jquery.min.js')}}"></script>
      <script src="{{ asset('metrix_file/assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
      <script src="{{ asset('metrix_file/assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
      <script src="{{ asset('metrix_file/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
      <script>
            /****************************************
             *       Basic Table                   *
             ****************************************/
           var table = $('#zero_config').DataTable({
                  "columnDefs": [
                        {
                              "targets": [ 4 ],
                              "visible": false
                        },
                  ],
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
            $('#zero_config tbody').on( 'click', 'tr', function () {

                  if ( $(this).hasClass('selected') ) {
                        $(this).removeClass('selected');
                  }
                  else {
                        table.$('tr.selected').removeClass('selected');
                        $(this).addClass('selected');

                        var rowData = table.row('.selected').data();

                       // reloadTableCustomerHistory(rowData['id_customer']);
                        console.log(rowData[4]);
                        // reloadTableContactHistory(rowData);
                        //  reloadTableRemember(rowData);
                  }


                  //alert(rowData['id_customer']);
            } );
      </script>
     @endsection
    