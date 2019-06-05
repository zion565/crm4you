@extends('metrix/layouts/app')

@section('content')
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
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

                              <div class="card">
                                    <div class="card-body">
                                          <h5 class="card-title">Basic Datatable</h5>
                                          <div class="table-responsive">
                                                <table id="zero_config" class="table table-striped table-bordered">
                                                      <thead>
                                                      <tr>
                                                            <th>ID</th>
                                                            <th>תאריך</th>
                                                            <th>שם</th>
                                                            <th>פלאפון</th>
                                                            <th>מייל</th>
                                                            <th>סטטוס</th>
                                                            <th>מקור הגעה אחרון</th>
                                                            <th>פעולות</th>
                                                      </tr>
                                                      </thead>
                                                      <tbody>
                                                      @foreach($all_customer as $row)
                                                      <tr>
                                                            <th>
                                                            <label class="customcheckbox">{{$row['id']}}
                                                                  <input type="checkbox" class="listCheckbox">
                                                                  <span class="checkmark"></span>
                                                            </label>
                                                            </th>
                                                            <th>{{$row['created_at']}}</th>
                                                            <th>{{$row['name']}}</th>
                                                            <th>{{$row['phone']}}</th>
                                                            <th>{{$row['email']}}</th>
                                                            <th><span class="badge badge-pill float-right" style="background-color: {{$row['status_color']}}">{{$row['status_title']}}</span></th>
                                                            <th>{{$row['from_lid']}}</th>
                                                            <th>פעולות</th>
                                                      </tr>
@endforeach
                                                      </tbody>
                                                      <tfoot>
                                                      <tr>
                                                            <th>ID</th>
                                                            <th>תאריך</th>
                                                            <th>שם</th>
                                                            <th>פלאפון</th>
                                                            <th>מייל</th>
                                                            <th>סטטוס</th>
                                                            <th>מקור הגעה אחרון</th>
                                                            <th>פעולות</th>
                                                      </tr>
                                                      </tfoot>
                                                </table>
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
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                  All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Wrapper -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- All Jquery -->
      <!-- ============================================================== -->
      <script src="{{ asset('metrix_file/assets/libs/jquery/dist/jquery.min.js')}}"src="assets/libs/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap tether Core JavaScript -->
      <script src="{{ asset('metrix_file/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
      <script src="{{ asset('metrix_file/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
      <!-- slimscrollbar scrollbar JavaScript -->
      <script src="{{ asset('metrix_file/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
      <script src="{{ asset('metrix_file/assets/extra-libs/sparkline/sparkline.js')}}"></script>
      <!--Wave Effects -->
      <script src="{{ asset('metrix_file/dist/js/waves.js')}}"></script>
      <!--Menu sidebar -->
      <script src="{{ asset('metrix_file/dist/js/sidebarmenu.js')}}"></script>
      <!--Custom JavaScript -->
      <script src="{{ asset('metrix_file/dist/js/custom.min.js')}}"></script>
      <!-- this page js -->
      <script src="{{ asset('metrix_file/assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
      <script src="{{ asset('metrix_file/assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
      <script src="{{ asset('metrix_file/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
      <script>
            /****************************************
             *       Basic Table                   *
             ****************************************/
            $('#zero_config').DataTable();
      </script>

     @endsection
    