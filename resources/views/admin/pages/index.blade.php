@extends('layouts.admin')

@section('styles')
	<style>
		button.close {
			position: relative !important;
			bottom: 31px;
			left: 7px;
		}
	</style>
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<a href="{{ action('Admin\PagesController@create') }}">create</a>
				<hr>
				<div class="list-group">
					@foreach($pages as $page)
					<a href="{{ action('Admin\PagesController@edit', $page->id) }}" class="list-group-item">
						{{$page->slug}}
						<form action="{{ action('Admin\PagesController@destroy', $page->id) }}" method="POST">
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button type="submit" class="close"><span aria-hidden="true">&times;</span></button>
						</form>
					</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection
