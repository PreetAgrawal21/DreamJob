<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ env('APP_NAME') }}</title>

  <!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
	<!-- IonIcons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
	<link rel="stylesheet" href="{{ asset("css/app.css") }}">

	<link rel="stylesheet" href="{{ asset('css/datatables.bootstrap4.min.css')}} ">
</head>
	<style>
		.btn1{
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
		.brand-text{
			color: #0518cd;
			font-size: 40px;
			font-weight: 200px;
			align-content: center;
		}
		.dropdown{
			margin-left: 950px;
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
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end dropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5 dreamjob">
				<h1 class="m-0 text-primary"><b>DreamJob</b></h1>
			</a><hr>
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
	<script src="{{ asset('js/bootstrap.js.map') }}"></script>
	<script src="{{ asset('js/popper.js') }}"></script>

	<script src="{{ asset('js/sweetalert2.min.js') }}"></script>
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

	<!-- jQuery -->
	{{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<!-- AdminLTE -->
	<script src="{{ asset('js/adminlte.js') }}"></script>

	<!-- AdminLTE for demo purposes -->
	{{-- <script src="{{ asset('layouts/dashboard/dist/js/demo.js') }}"></script> --}}
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="{{ asset('js/dashboard3.js') }}"></script>
	<script src="{{ asset("js/app.js") }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
	<script> src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css"</script>

	<script>
		$(document).ready(function(){
			$("body").tooltip({ selector:'[data-toggle=tooltip]',placement:'top'});
		});
	</script>


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



</body>
</html>
