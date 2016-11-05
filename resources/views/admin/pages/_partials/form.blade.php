@if($action == 'Create')
<form action="{{ action('Admin\PagesController@store') }}" method="post">
@else
<form action="{{ action('Admin\PagesController@update', $page->id) }}" method="post">
	<input type="hidden" name="_method" value="put" />
@endif
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" class="form-control" id="title" value="{{ $page->title }}">
	</div>
	@if($action == 'Save')
		<div class="form-group">
			<label for="slug">Slug</label>
			<input type="text" name="slug" class="form-control" id="slug" value="{{ $page->slug }}">
		</div>
	@endif
	<div class="form-group">
		<label for="date">Published Date</label>
		<input type="text" name="publication_date" class="form-control" id="date" value="{{ $page->publication_date }}">
	</div>
	<div class="form-group">
		<label for="body">Body</label>
		<textarea class="form-control" name="body" rows="10">{{ $page->body }}</textarea>
	</div>
	<button type="submit">{{ $action }}</button>
</form>
@if(count($errors->all()))
	<ul>
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
@endif