@extends('layouts.front-end-layouts.app')

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
  .form-controla{
	  padding: 17px;
	  margin-top: 10px;
  }
  .card{
	  max-height: 640px;
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
	  margin-left: 150px;
	  width: 900px;
	  display:flexbox;
  }
  .head{
	  margin-left: 280px;
  }
  .table{
	  width: 1000px;
  }
	</style>

 @include('layouts.job.sidebar')

    <div class="col-sm-9 ">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="containera">
			<div class="row mb-2">
				<div class="col-sm-6 head">
					<h1 class="m-0">{{ __('Jobs') }}</h1>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<!-- Main content -->
	<section class="content">
		<div class="containera">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<div class="float-right">


								<a class="btn btn-success" href="{{ route('jobposts.create') }}" id="createNewRecord">{{ __('Create New Job') }}</a>


							</div>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="jobpost-yajra" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>{{ __('No') }}</th>
										<th>{{ __('Job_title') }}</th>
										<th>{{ __('Min_salary') }}</th>
										<th>{{ __('Max_salary') }}</th>
										<th>{{ __('Qualification') }}</th>
										<th>{{ __('Experince') }}</th>
										<th>{{ __('description') }}</th>
										<th>{{ __('Action') }}</th>
									</tr>
									<tr>
										<th></th>
										<th>{{ __('Job title') }}</th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
									</tr>
								</thead>
									<tbody>
									</tbody>
								<tfoot>
								</tfoot>
							</table>
						</div><!-- /.card-body -->
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
		$(function () {
			$('#jobpost-yajra thead tr:eq(1) th:eq(1)').each( function (){
					var title = $(this).text();
					$(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
				}
			);

			var table = $('#jobpost-yajra').DataTable({
				responsive		: true,
				processing		: false,
				serverSide		: true,
				deferRender		: true,
				orderCellsTop	: true,
                sScrollX: '110%',
                sScrollY: '200px',
				bScrollCollapse:true,

				ajax: {
					url	: '{{ route('jobposts.getJobposts') }}',
					type: "POST",
					data:	{
					 	_token: "{{ csrf_token() }}",
					 },
				},

				columns: [
					{data: 'id', 	name: 'id'},
					{data: 'job_title', 	name: 'job_title'},
					{data: 'min_salary', 	name: 'min_salary'},
					{data: 'max_salary', 	name: 'max_salary'},
					{data: 'qualification', name: 'qualification'},
					{data: 'experince', 	name:'experince'},
					{data:'description', name:'description'},
					{
						data		: 'action',
						name		: 'action',
						orderable	: false,
						searchable	: false,
					},
				],

				initComplete: function () {
					this.api().columns('0').every( function () {
						var that = this;
						$('thead').on( 'keyup change clear', "tr:eq(1) input",function () {
							table.column( $(this).parent().index() ).search( this.value ).draw();
						});
					});

					// this.api().columns('3').every( function () {
					// 	var column = this;
					// 	var select = $('<select id="status" class="form-control" name="status"><option value="">Select Status</option></select>')
					// 		.appendTo( $("thead tr:eq(1) th").eq(column.index()).empty() )
					// 		.on( 'change', function () {
					// 			var val = $.fn.dataTable.util.escapeRegex(
					// 			$(this).val()
					// 	);
					// 	column.search( val ? '^'+val+'$' : '', true, false ).draw();
					// });

					// column.data().unique().sort().each( function ( d, j ) {
					// 	select.append( '<option value="'+d+'">'+d+'</option>' )
					// });
					// });
			 	}
			 });
		});
	</script>
@endsection
