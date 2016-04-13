@if (count($errors) > 0)
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Whoops!</strong> 
		<ul>
			@foreach ($errors->all() as $errors)
			<li>{{ $error}}</li>
			@endforeach
		</ul>
	</div>
@endif