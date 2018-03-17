<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@php
$komponen=App\Komponen::find(1);
@endphp
<!DOCTYPE HTML>
<html>
<head>
<title>Teknik Kendaraan Ringan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{asset('admin/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{asset('admin/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{asset('admin/css/lines.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('admin/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- jQuery -->
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('admin/js/metisMenu.min.js')}}"></script>

<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script><!-- Graph JavaScript -->
<script src="{{asset('admin/js/d3.v3.js')}}"></script>
<script src="{{asset('admin/js/rickshaw.js')}}"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <img src="{{asset('img/logo-1.png')}}" style="height: 50px">
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/admin/images/6.png">
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						
						<li class="m_2"><a href="{{url('akun/profile')}}"><i class="fa fa-user"></i> Profil</a></li>



						<li class="m_2"><a href="{{ route('logout') }} " onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i> Logout</a></li>


                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                 </form>


	        		</ul>
	      		</li>
			</ul>
			
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">


                        @role('member')

                        <li>
                            <a href="{{url('/home')}}"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>

                        <li>
                            <a href="{{route('komponen.edit',1)}}"><i class="fa fa-table nav_icon"></i>Komponen</a>
                          
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="{{route('prestasi.index')}}"><i class="fa fa-indent nav_icon"></i>Prestasi</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('fasilitas.index')}}"><i class="fa fa-envelope nav_icon"></i>Fasilitas</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('perusahaan.index')}}"><i class="fa fa-flask nav_icon"></i>Kerjasama</a>
                        </li>
                        <li>
                            <a href="{{route('alumni.index')}}"><i class="fa fa-check-square-o nav_icon"></i>Testimoni</a>
                        </li>
                        @endrole
                           



                        @role('admin')


                        <li>
                            <a href="{{route('komponen.edit',1)}}"><i class="fa fa-table nav_icon"></i>Komponen</a>
                          
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="{{route('prestasi.index')}}"><i class="fa fa-indent nav_icon"></i>Prestasi</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('fasilitas.index')}}"><i class="fa fa-envelope nav_icon"></i>Fasilitas</a>
                           
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('perusahaan.index')}}"><i class="fa fa-flask nav_icon"></i>Kerjasama</a>
                        </li>
                        <li>
                            <a href="{{route('alumni.index')}}"><i class="fa fa-check-square-o nav_icon"></i>Testimoni</a>
                        </li>
                      
                        <li>
                            <a href="{{route('pemilik.index')}}"><i class="fa fa-check-square-o nav_icon"></i>Pemilik</a>
                        </li>
                        @endrole

                     <!-- /.nav-second-level -->
                   
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        	@yield('content')
        </div>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
</body>
</html>
