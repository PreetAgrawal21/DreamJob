@extends('layouts.admin.app')

@section('content')
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">{{ __('Users') }}</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
						<li class="breadcrumb-item active">{{ __('Users') }}</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">{{ __('Users Data') }}</h3>
							<div class="float-right">

								
								<a class="btn btn-success" href="{{ route('users.create') }}" id="createNewRecord">{{ __('Create New User') }}</a>
								
								
							</div>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="user-yajra" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>{{ __('No') }}</th>
										<th>{{ __('firstName') }}</th>
										<th>{{ __('lastName') }}</th>
										<th>{{ __('email') }}</th>		
										<th>{{ __('Action') }}</th>
									</tr>
									<tr>
										<th></th>
										<th>{{ __('Name') }}</th>
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

			$('#user-yajra thead tr:eq(1) th:eq(1)').each( function (){
					var title = $(this).text();
					$(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
				}
			);

			var table = $('#user-yajra').DataTable({
				responsive		: true,
				processing		: false,
				serverSide		: true,
				deferRender		: true,
				orderCellsTop	: true,

				ajax: {
					url	: "{{ route('users.getUsers') }}",
					type: "POST",
					 data:	{
					 	_token: "{{ csrf_token() }}",
					 },
				},

				columns: [
					{data: 'id', 	name: 'id'},
					{data: 'name', 	name: 'name'},
					{data: 'lname', name: 'lname'},
					{data: 'email', name: 'email'},		
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