@extends('layouts.front-end-layouts.app')

@section('content')

	@section('css') 
		<style type="text/css">
			#frame{
				display: none;
			}
		</style>
	@endsection
	<style>
		*{
		padding: 0;
		margin: 0;
		text-decoration: none;
	}
	.body{
		box-sizing: border-box;
		font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	}
	.sidebar{
		background: rgb(76, 3, 247);
		margin-left: 20px;
		width: 250px;
		height: 100%;
		top: 0;
		left: 0;
		z-index: 1;
		border-radius: 10px 10px 10px 10px;
	}
	.sidebar img{
		margin-left:90px; 
	}
	.sidebar ul li a{
		font-size: 25px
	}
	.sidebar h2,h4{
		text-align: center;
		font-size: 20px;
		text-transform: uppercase;
		color: black;
		background-color: rgb(76, 3, 247);
		padding: 20px;
	}
	.sidebar ul li{
		margin: 25px 0;
	}
	.sidebar ul li a{
		color: rgb(219, 219, 219);
		padding: 0 30px;

	}
	.sidebar ul li a:hover{
		color:rgb(43, 241, 231);
		margin-left: 20px;
		transition: 0.4s;
	}
	.main{
		margin-left: 210px;
		padding: 5px;
		height: 70%;
	}
	.profileimg{
		width: 70px;
		height: 70px;
		border-radius: 100px;
		
	}
	.page-header {
		background: linear-gradient(rgba(43, 57, 64, .5), rgba(43, 57, 64, .5)), url(layouts/front-end/img/dashboard.png) center center no-repeat;
		background-size: cover;
	}
	form{
		margin: 8px; 
	}
	.form-control{
		padding: 17px;
		margin-top: 10px;
	}
	.card{
		height: 640px;
	}
	.btn1{
		margin-top: 15px;
		color: white;
	}
	.sidebar{
		margin-top: 20px;
	}
	.container{
	  margin-top: 20px;
	  margin-left: 200px;
	  width: 850px;
	  display:flexbox;
  }
  .head{
	  margin-left: 280px;
  }
	</style>
		
    @include('layouts.job.sidebar') 

		<div class="col-sm-9 ">
				<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6 head">
							<h1 class="m-0">{{ __('Add Jobs') }}</h1>
						</div><!-- /.col -->
						<!-- /.col -->
					</div><!-- /.row -->
				</div>
			</div>
			<!-- /.content-header -->
			@if ($errors->any())
				<div class="alert alert-danger">
					<strong>Error!</strong><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<!-- Main content -->
			<section class="content">
				<div class="container">
					<div class="row">
						<!-- /.col -->
						<div class="col-md-12">
							<div class="card">
								<div class="col-sm-6">
									<ol class="breadcrumb float-sm-right">
										<li class="breadcrumb-item">
											<a href="{{ url()->previous() }}">
												<i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i>
											</a>
										</li>
									</ol>
								</div>
								<form name="regform" action="{{ route('jobposts.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateform()" autocomplete="off">
									@csrf
									<!-- /.card-header -->
									<div class="card-body">
										<div class="tab-content">
											<div class="" id="settings">
												<form class="form-horizontal">
													<div class="form-group row">
														<label for="inputName" class="col-sm-2 col-form-label">{{ __('Job_Title') }}</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="" name="job_title" value=""  placeholder="Job title"required>
														</div>
													</div>
													<div class="form-group row">
														<label for="inputMinsalary" class="col-sm-2 col-form-label">{{ __('Min_salary') }}</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="" name="min_salary" value=""   placeholder="Min salary"required>
														</div>
													</div>
													<div class="form-group row">
														<label for="inputMaxsalary" class="col-sm-2 col-form-label">{{ __('Max_salary') }}</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" name="max_salary" id=""   placeholder="Max salary" required>
														</div>
													</div>
													<div class="form-group row">
														<label for="inputExperince" class="col-sm-2 col-form-label">{{ __('Experince') }}</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" name="experince" id=""   placeholder="experince" required>
														</div>
													</div>
													<div class="form-group row">
														<label for="inputDescription" class="col-sm-2 col-form-label">{{ __('Description') }}</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" name="description" id="" value="" placeholder="description" required>
														</div>
													</div>


														<div class="form-group row">
															<div class="offset-sm-2 col-sm-10">
																<button type="submit" class="btn btn-success">{{ __('Add') }}</button>
															</div>
														</div>
												

												</form>
											</div>
										</div>
									</div><!-- /.card-body -->
								</form>
							</div><!-- /.card -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div>
		   </section>
		</div>
			<!-- /.content -->
	

	@section('js')
		<script type="text/javascript">
			function previewFile(input){
				$('#frame').show();
				frame.src=URL.createObjectURL(event.target.files[0]);
			}
		</script>
	@endsection
@endsection