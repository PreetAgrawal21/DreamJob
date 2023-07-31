@extends('layouts.admin.app')

@section('css') 
	<style type="text/css">
		#frame2{
			display: none;
		}
		.img-effect{
			max-width:130px;
			margin-top:20px;
		}
	</style>
@endsection

@section('content')
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">{{ __('Edit User') }}</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<a href="{{ url()->previous() }}">
							<i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i>
						</a>
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
						<!-- /.card-header -->
						<form action="{{ route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
							@csrf
							@method('PUT')
							<div class="card-body">
								<div class="tab-content">
									<div class="" id="settings">
										<form class="form-horizontal">
											<div class="form-group row">
												<label for="inputName" class="col-sm-2 col-form-label">{{ __('Name') }}</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="" name="name" value="{{ $user->name }}" placeholder="Name" pattern="^[a-zA-Z]+(?:\s+[a-zA-Z]+)*$" title="Enter characters only" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputEmail" class="col-sm-2 col-form-label">{{ __('Email') }}</label>
												<div class="col-sm-10">
													<input type="email" class="form-control" id="" name="email" value="{{ $user->email }}" placeholder="Email" pattern="[a-z0-9._]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter email like this:xyz@gmail.com" placeholder="Email" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputimg" class="col-sm-2 col-form-label">{{ __('Profile Image') }}</label>
												<div class="col-sm-10">
													<input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" onchange="previewFile()">
													@if($user->image)
														<img class="img-effect" id="frame1" src="{{ asset('/storage/user-image/'.$user->image)}}"/>
													@endif
													<img class="img-effect" id="frame2" src="#" alt="Profile Image"/>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputpassword" class="col-sm-2 col-form-label">{{ __('New Password') }}</label>
												<div class="col-sm-10">
													<input type="Password" class="form-control" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="" value="" placeholder="New Password">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputpass" class="col-sm-2 col-form-label">{{ __('Confirm Password') }}</label>
												<div class="col-sm-10">
													<input type="Password" class="form-control" name="password_confirmation" id="" value="" placeholder="Confirm Password">
												</div>
											</div>

											@can('users.update')
												<div class="form-group row">
													<div class="offset-sm-2 col-sm-10">
														<button type="submit" class="btn btn-info toastrDefaultInfo">{{ __('Update') }}</button>
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
			$('#frame1').hide();
			$('#frame2').show();
			frame2.src=URL.createObjectURL(event.target.files[0]);
		}
	</script>
@endsection