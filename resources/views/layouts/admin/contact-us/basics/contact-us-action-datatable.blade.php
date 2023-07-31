
	
	<a href="{{ route('contact-us.destroy',$row->id) }}" class="position" data-id="{{ $row->id }}" data-toggle="tooltip" data-placement="top" data-original-title="Delete" title="Delete Record" onclick="event.preventDefault();document.getElementById('delete-form-{{ $row->id }}').submit();">
		<i class='fa fa-trash-o' style='color:red'></i>
	</a>


<form id="delete-form-{{ $row->id }}" action="{{ route('contact-us.destroy',$row->id) }}" method="POST" style="display: none;">
	@csrf
	@method('DELETE')
</form>