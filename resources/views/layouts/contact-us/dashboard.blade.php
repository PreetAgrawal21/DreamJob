@extends('layouts.admin.app')

@section('content')

 <style>
	.btn{
		border-radius: 100px;
	}
	.btnimg{
		height: 20px;
		width: 20px;
		border-radius: 50px
	}
	
 .inpro{
       height: 30px;
       margin: 3px;
 }
 .dreamjob{
	 margin-bottom: 25px;
	 margin-top: 20px;
	 align-content: center;
 }
 hr{
	 color: white;
 }
 .brand-link {
    		font-size: 1.00rem !important;
		}
		.d-none{
			text-transform: capitalize !important;
		}
		.capitl{
			text-transform: capitalize;
		}
		.alert{
			margin: 0px 23px 10px 23px !important;
		}
		.tooltip{
			position:absolute;
		}
		.toggle-on{
			padding-top: 12px !important;
		}
		.toggle-off{
			padding-top: 12px !important;
		}
 </style>
<!--
`body` tag options:

	Apply one or more of the following classes to to the body tag
	to get the desired effect

	* sidebar-collapse
	* sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
			</li>
			
		</ul>

		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">
			<!-- Navbar Search -->
			<li class="nav-item">
				
				<div class="navbar-search-block">
					<form class="form-inline">
						<div class="input-group input-group-sm">
							<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
							<div class="input-group-append">
								<button class="btn btn-navbar" type="submit">
									<i class="fas fa-search"></i>
								</button>
								<button class="btn btn-navbar" type="button" data-widget="navbar-search">
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</li>

			
			
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  <img class="btnimg" src="{{ asset('layouts/wlc.jpg') }}" alt=""> Name
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					  <li class="inpro"> <a href="#"><i class="fas fa-edit"></i>Edit profile </a> </li>
					  <li class="inpro"> <a href="#"><i class="fas fa-sign-out"></i>Logout</a> </li>
					</div>
				</div>
		</ul>
	</nav>
	<!-- /.navbar -->

	<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5 dreamjob">
			<h1 class="m-0 text-primary"><b>DreamJob</b></h1>
		</a>
		<hr>
		<!-- Sidebar -->
		<div class="sidebar">
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<!-- Add icons to the links using the .nav-icon class
							 with font-awesome or any other icon font library -->
					<li class="nav-item menu-open">
						<ul class="nav " type="none">
							<li class="nav-item">
								<a href="{{ route('dash.index') }} class="nav-link active">
									<i class="fa fa-home nav-icon"></i>
									<p>Home</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./index3.html" class="nav-link ">
									<i class="fa fa-book nav-icon"></i>
									<p>Manage Users </p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./index3.html" class="nav-link ">
									<i class="fa fa-home nav-icon"></i>
									<p>Home</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./index3.html" class="nav-link ">
									<i class="fa fa-home nav-icon"></i>
									<p>Home</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="./index3.html" class="nav-link ">
									<i class="fa fa-home nav-icon"></i>
									<p>Home</p>
								</a>
							</li>
						</ul>
					</li>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	@yield('content')

	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- /.control-sidebar -->

	<!-- Main Footer -->
	<footer class="main-footer">
		<strong>Copyright &copy; 2020-2021 <a href="#">{{ env('APP_NAME') }}</a>.</strong>
		All rights reserved.
		<div class="float-right d-none d-sm-inline-block">
			<b>Version</b> 3.1.0
		</div>
	</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
 <script src="{{ asset('layouts/dashboard/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('layouts/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('layouts/dashboard/dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('layouts/dashboard/plugins/chart.js/Chart.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('layouts/dashboard/dist/js/demo.js') }}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('layouts/dashboard/dist/js/pages/dashboard3.js') }}"></script> 
<script src="{{ asset("js/app.js") }}"></script>
</body>
</html>
@endsection
