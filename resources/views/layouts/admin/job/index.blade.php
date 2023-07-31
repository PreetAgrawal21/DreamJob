@extends('layouts.admin.app')

@section('content')
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">{{ __('Jobs') }}</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
						<li class="breadcrumb-item active">{{ __('Jobs') }}</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<!-- Main content -->
	<section class="content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">{{ __('Jobs Data') }}</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="job-yajra" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>{{ __('No') }}</th>
										<th>{{ __('Job title') }}</th>
										<th>{{ __('Min salary') }}</th>
										<th>{{ __('Max salary') }}</th>
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
	<!-- /.content -->
@endsection

@section('js')
	<script type="text/javascript">
		$(function () {

			$('#job-yajra thead tr:eq(1) th:eq(1)').each( function (){
					var title = $(this).text();
					$(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
				}
			);

			var table = $('#job-yajra').DataTable({
				responsive		: true,
				processing		: false,
				serverSide		: true,
				deferRender		: true,
				orderCellsTop	: true,

				ajax: {
					url	: "{{ route('jobs.getJobs') }}",
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