@extends('metrix/layouts/app')

@section('content')
      <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                  <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                              <h4 class="page-title">Dashboard-2</h4>
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
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3">
                              <div class="card card-hover">
                                    <div class="box bg-cyan text-center">
                                          <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                          <h6 class="text-white">Dashboard</h6>
                                    </div>
                              </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3">
                              <div class="card card-hover">
                                    <div class="box bg-success text-center">
                                          <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                                          <h6 class="text-white">Charts</h6>
                                    </div>
                              </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3">
                              <div class="card card-hover">
                                    <div class="box bg-warning text-center">
                                          <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                                          <h6 class="text-white">Widgets</h6>
                                    </div>
                              </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-3">
                              <div class="card card-hover">
                                    <div class="box bg-danger text-center">
                                          <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                          <h6 class="text-white">Tables</h6>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="row">

                        <div class="col-md-6">
                              <!-- card -->
                              <div class="card">
                                    <div class="card-body">
                                          <h4 class="card-title m-b-0">Progress Box</h4>
                                          <div class="m-t-20">
                                                <div class="d-flex no-block align-items-center">
                                                      <span>81% Clicks</span>
                                                      <div class="ml-auto">
                                                            <span>125</span>
                                                      </div>
                                                </div>
                                                <div class="progress">
                                                      <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 81%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                          </div>
                                          <div>
                                                <div class="d-flex no-block align-items-center m-t-25">
                                                      <span>72% Uniquie Clicks</span>
                                                      <div class="ml-auto">
                                                            <span>120</span>
                                                      </div>
                                                </div>
                                                <div class="progress">
                                                      <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 72%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                          </div>
                                          <div>
                                                <div class="d-flex no-block align-items-center m-t-25">
                                                      <span>53% Impressions</span>
                                                      <div class="ml-auto">
                                                            <span>785</span>
                                                      </div>
                                                </div>
                                                <div class="progress">
                                                      <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 53%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                          </div>
                                          <div>
                                                <div class="d-flex no-block align-items-center m-t-25">
                                                      <span>3% Online Users</span>
                                                      <div class="ml-auto">
                                                            <span>8</span>
                                                      </div>
                                                </div>
                                                <div class="progress">
                                                      <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 3%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                          </div>
                                    </div>
                              </div>

                        </div>
                  </div>

                  <!-- BEGIN MODAL -->
                  <div class="modal none-border" id="my-event">
                        <div class="modal-dialog">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <h4 class="modal-title"><strong>Add Event</strong></h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body"></div>
                                    <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                          <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <!-- Modal Add Category -->
                  <div class="modal fade none-border" id="add-new-event">
                        <div class="modal-dialog">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <h4 class="modal-title"><strong>Add</strong> a category</h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                          <form>
                                                <div class="row">
                                                      <div class="col-md-6">
                                                            <label class="control-label">Category Name</label>
                                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name">
                                                      </div>
                                                      <div class="col-md-6">
                                                            <label class="control-label">Choose Category Color</label>
                                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                                  <option value="success">Success</option>
                                                                  <option value="danger">Danger</option>
                                                                  <option value="info">Info</option>
                                                                  <option value="primary">Primary</option>
                                                                  <option value="warning">Warning</option>
                                                                  <option value="inverse">Inverse</option>
                                                            </select>
                                                      </div>
                                                </div>
                                          </form>
                                    </div>
                                    <div class="modal-footer">
                                          <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                          <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <!-- END MODAL -->

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
     @endsection
    