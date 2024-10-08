<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Rick Drivers Dashboard</title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
    <!-- Datatables -->

    <link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Rick Drivers</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
            <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->name}}</h2>
            </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                @if (Auth::user()->role == 'Admin')
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="{{route('home')}}">Dashboard</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Car Rentals <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="{{route('rental_create')}}">Create</a></li>
                        <li><a href="{{route('rental_lists')}}">Listing</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Chauffeur <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="{{route('chauffeur_create')}}">Create</a></li>
                        <li><a href="{{route('chauffeur_list')}}">Listing</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-hotel"></i> Hotels <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="{{route('hotel_create')}}">Create</a></li>
                        <li><a href="{{route('hotel_index')}}">Listing</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i>Bookings <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="{{route('carbook_index')}}">Cars</a></li>
                        <li><a href="{{route('chauffeurbook_index')}}">Chauffeur</a></li>
                        <li><a href="{{route('hotelbook_index')}}">Hotels</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i>Users<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="{{route('users')}}">Listing</a></li>
                        </ul>
                    </li>
                    </ul>
                @else
                <ul class="nav side-menu">

                    <li><a><i class="fa fa-edit"></i> Car Rentals <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="{{route('rental_create')}}">Create</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Chauffeur <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="{{route('chauffeur_create')}}">Create</a></li>
                        </ul>
                    </li>

                    </ul>
                    @endif
            </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{url('logout')}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
            </div>
            <!-- /menu footer buttons -->
        </div>
        </div>
