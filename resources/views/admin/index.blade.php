
          @include('admin.layouts.sidemenu')


        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-car"></i> Total Cars</span>
              <div class="count">{{$car_count}}</div>
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Chauffeur</span>
              <div class="count">{{$chauffeur_count}}</div>
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-check"></i>Total Cars Bookings</span>
              <div class="count green">{{$car_book_count}}</div>
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user-plus" aria-hidden="true"></i>Total Chauffeur Bookings</span>
                <div class="count green">{{$chau_book_count}}</div>
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user-plus" aria-hidden="true"></i>Total Users</span>
                <div class="count green">{{$user_count}}</div>
            </div>
          </div>
        </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Chauffeur  <small>Bookings</small></h3>
                  </div>
                </div>

                <div class="col-md-10 col-sm-10">
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th>Pick Up location</th>
                            <th>Destination</th>
                            <th>Vehicle Type</th>
                            <th>Date&Time</th>
                            <th>No. Of Passengers</th>
                            <th>Contact</th>
                            <th>Payment_method</th>
                            <th>Action</th>
                          </tr>
                        </thead>


                        <tbody>
                          @foreach ($chauf_10 as $chaufs_10)
                              <tr>

                                  <td>{{$chaufs_10->p_location}}</td>
                                  <td>{{$chaufs_10->destination}}</td>
                                  <td>{{$chaufs_10->vehicle_type}}</td>
                                  <td>{{$chaufs_10->date_time}}</td>
                                  <td>{{$chaufs_10->no_pass}}</td>
                                  <td>{{$chaufs_10->contact}}</td>
                                  <td>{{$chaufs_10->payment_method}}</td>
                                  <td>
                                    @if (Auth::user()->role == 'Admin')
                                    <a href="{{route('chauffeurbook_show',$chaufs_10->id)}}">
                                        <span class="badge badge-info"> <i class="fa fa-eye"></i></span>
                                    </a>
                                    @endif
                                  </td>
                              </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Rights Reserved By <a href="http://pivotnetworks.co.ke">Pivot Networks</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('build/js/custom.min.js')}}"></script>

  </body>
</html>
