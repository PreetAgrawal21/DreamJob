@extends('layouts.front-end-layouts.app')

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
	font-size: 25px;
	text-decoration: none;
}
.h2head,.h4head{
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
  .containera{
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
		<div class="containera">
			<div class="row mb-2">
				<div class="col-sm-6 head">
					<h1 class="m-0">{{ __('Edit job') }}</h1>
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
		<div class="containera">
			<div class="row">
				<!-- /.col -->
				<div class="col-md-12">
					<div class="card">
						<!-- /.card-header -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<a href="{{ url()->previous() }}">
									<i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i>
								</a>
							</ol>
						</div><!-- /.col -->
						<form action="{{ route('jobposts.update',$JobPost->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
							@csrf
							@method('PUT')
							<div class="card-body">
								<div class="tab-content">
									<div class="" id="settings">
										<form class="form-horizontal">
											<div class="form-group row">
												<label for="inputName" class="col-sm-2 col-form-label">{{ __('Job_Title') }}</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="" name="Jobtitle" value=""  placeholder="Job title"required>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputMinsalary" class="col-sm-2 col-form-label">{{ __('Min_salary') }}</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="" name="Min salary" value=""   placeholder="Min salary"required>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputMaxsalary" class="col-sm-2 col-form-label">{{ __('Max_salary') }}</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="max salary" id=""   placeholder="Max salary" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputExperince" class="col-sm-2 col-form-label">{{ __('Experince') }}</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="experince" id=""   placeholder="experince" required>
												</div>
											</div>

											<div class="form-group row">
												<label for="inputQualification" class="col-sm-2 col-form-label">{{ __('Qualification') }}</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="" value="" placeholder="Qualification" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="inputDescription" class="col-sm-2 col-form-label">{{ __('Description') }}</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" name="Description" id="" value="" placeholder="description" required>
												</div>
											</div>


												<div class="form-group row">
													<div class="offset-sm-2 col-sm-10">
														<button type="submit" class="btn btn1 btn-info toastrDefaultInfo">{{ __('Update') }}</button>
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
