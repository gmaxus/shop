@extends('layouts.app')

@section('title', $page->title)


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>{{ $page->title }}</h2>
				{{ $page->body }}
			</div>
		</div>
	</div>
@endsection

