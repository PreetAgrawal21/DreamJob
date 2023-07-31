@extends('layouts.admin.app')

@section('css') 
	<style type="text/css">
		#frame{
			display: none;
		}
	</style>
@endsection

@section('content')
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">{{ __('Add User') }}</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item">
							<a href="{{ url()->previous() }}">
								<i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i>
							</a>
						</li>
					</ol>
				</div><!-- /.col -->
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
		<div class="container-fluid">
			<div class="row">
				<!-- /.col -->
				<div class="col-md-12">
					<div class="card">
						<form name="regform" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateform()" autocomplete="off">
							@csrf
							<!-- /.card-header -->
							<div class="card-body">
								<div class="tab-content">
									<div class="" id="settings">
										<form class="form-horizontal">
											<div class="form-group row">
												<label for="inputName" class="col-sm-2 col-form-label">{{ __('Name') }}</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="" name="name" value="" pattern="^[a-zA-Z]+(?:\s+[a-zA-Z]+)*$" title="Enter characters only" placeholder="Name"required>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputEmail" class="col-sm-2 col-form-label">{{ __('Email') }}</label>
												<div class="col-sm-10">
													<input type="email" class="form-control" name="email" id="" pattern="[a-z0-9._]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter email like this:xyz@gmail.com" placeholder="Email" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputimg" class="col-sm-2 col-form-label">{{ __('Profile Image') }}</label>
												<div class="col-sm-10">
													<input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" onchange="previewFile()">
													<img id="frame" src="#" alt="Profile Image" style="max-width:130px;margin-top:20px;"/>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputpassword" class="col-sm-2 col-form-label">{{ __('New Password') }}</label>
												<div class="col-sm-10">
													<input type="Password" class="form-control" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="" value="" placeholder="New Password" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputpass" class="col-sm-2 col-form-label">{{ __('Confirm Password') }}</label>
												<div class="col-sm-10">
													<input type="Password" class="form-control" name="password_confirmation" id="" value="" placeholder="Confirm Password" required>
												</div>
											</div>

											@can('users.store')
												<div class="form-group row">
													<div class="offset-sm-2 col-sm-10">
														<button type="submit" class="btn btn-success">{{ __('Add') }}</button>
													</div>
												</div>
											@endcan

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
	<!-- /.content -->
@endsection

@section('js')
	<script type="text/javascript">
		function previewFile(input){
			$('#frame').show();
			frame.src=URL.createObjectURL(event.target.files[0]);
		}
	</script>
@endsection
