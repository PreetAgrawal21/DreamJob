
	<a href="{{ route('jobposts.edit',$row->id) }}" class="position" data-toggle="tooltip" data-placement="top" data-id="{{ $row->id }}" data-original-title="Edit" title="Edit Record">
		<i class="fa fa-edit"></i>
	</a>



	<a href="{{ route('jobposts.destroy',$row->id) }}" class="position" data-id="{{ $row->id }}" data-toggle="tooltip" data-placement="top" data-original-title="Delete" title="Delete Record" onclick="event.preventDefault();document.getElementById('delete-form-{{ $row->id }}').submit();">
		<i class='fa fa-trash' style='color:red'></i>
	</a>


<form id="delete-form-{{ $row->id }}" action="{{ route('jobposts.destroy',$row->id) }}" method="POST" style="display: none;">
	@csrf
	@method('DELETE')
</form>