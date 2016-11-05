@extends('layouts.admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				@include('admin.pages._partials.form', ['action' => 'Save'])
			</div>
		</div>
	</div>
@endsection