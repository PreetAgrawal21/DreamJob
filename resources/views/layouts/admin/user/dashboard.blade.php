@extends('layouts.admin.app')

@section('content')
	<style>
	.row{
		margin-bottom: 400px;		
	}	
	</style>

	<div class="content-header">
		<div class="container">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">{{ __('Dashboard') }}</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
						<li class="breadcrumb-item active">{{ __('Dashboard') }}</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<div class="container-fluid">
		<!-- Small boxes (Stat box) -->
		<div class="row">
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-success">
				<div class="inner">
					<h3>150</h3>

					<p>Pending Users</p>
				</div>
			
			
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-danger">
				<div class="inner">
					<h3>53<sup style="font-size: 20px">%</sup></h3>

					<p>Active users</p>
				</div>

			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-info">
				<div class="inner">
					<h3>44</h3>

					<p>Dormant users</p>
				</div>
				
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-warning">
				<div class="inner">
					<h3>65</h3>

					<p>Deleted users</p>
				</div>
				
		
			</div>
			<!-- ./col -->
		</div>
		</div>
@endsection
