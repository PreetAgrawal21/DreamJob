<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ env('APP_NAME') }} | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="{{ asset('layouts/dashboard/plugins/fontawesome-free/css/all.min.css') }}">
	<!-- IonIcons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('layouts/dashboard/dist/css/adminlte.min.css') }}">
	<link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
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
 .dropdown{
	 margin-left: 1060px;
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

	@yield('css')


</head>
  <body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav" type="none">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button">
						<i class="fas fa-bars"></i>
					</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="{{ url('/') }}" class="nav-link">{{ __('Home') }}</a>
				</li>
			
			 <li>
			   <div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  <img class="btnimg" src="{{ asset('layouts/wlc.jpg') }}" alt=""> Name
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><ul>
				  <li class="inpro"> <a href="#"><i class="fas fa-edit"></i>Edit profile </a> </li>
				  <li class="inpro">@can('users.profile')
					<a href="{{ route('users.profile',Auth::user()->id) }}" class="btn btn-default btn-flat">Profile</a>
				@endcan

				<a class="btn btn-default btn-flat float-right" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form></li></ul>
				</div>
			 </div>	

			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="{{ url('/') }}" class="brand-link">
				<img src="{{ asset('media/general/logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
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
								
						</li>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- Sidebar -->
			<div class="sidebar">
				@include('layouts.admin.menu',[ 'icons' => true ])
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">

			@yield('content')

		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>{{ __('Version') }}</b> {{ __('1.0.0') }}
			</div>
			<strong>{{ __('Copyright') }} &copy; {{ ('2020-2021') }} <a href="{{ url('/') }}">{{ env('APP_FULL_NAME') }}</a>.</strong> {{ __('All rights
			reserved.') }}
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- Scripts -->
	<script src="{{ asset('layouts/dashboard/docs/assets/plugins/bootstrap/js/bootstrap.js.map') }}"></script>
	<script src="{{ asset('layouts/dashboard/plugins/popper/popper.js') }}"></script>
	
	<script src="{{ asset('layouts/dashboard/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
	<script>
	@if(Session::has('message'))
		var type = "{{ Session::get('alert-type', 'info') }}";
		switch(type){
				case 'info':
					toastr.info("{{ Session::get('message') }}");
					break;

				case 'warning':
					toastr.warning("{{ Session::get('message') }}");
					break;

				case 'success':
					toastr.success("{{ Session::get('message') }}");
					break;

				case 'error':
					toastr.error("{{ Session::get('message') }}");
					break;
		}
	@endif
	</script>

	<script>
		$(document).ready(function(){
			$("body").tooltip({ selector:'[data-toggle=tooltip]',placement:'top'});
		});
	</script>

	<script src="{{ asset('layouts/dashboard/plugins/summernote/summernote.min.js') }}"></script>
	<script>
	$(document).ready(function() {
		$('#description').summernote({
			height: 200,
			minHeight: null,
			maxHeight: null,
		});
	});
	</script>

	@yield('js')

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
