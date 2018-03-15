@extends ('layouts.master')

@section('content')

	<h1>Search Results</h1>
	<p class="text-muted">For "{{$search}}"</p>

	<h5 class="display-5">Users</h5>
		@foreach($users as $user)
			<div class="card mb-4">
				<div class="card-body">
					<h5><a href="/users/{{$user->id}}" class="card-title">{{ $user->name }}</a></h5>
				</div>
			</div>
		@endforeach

	<h5 class="display-5">Posts</h5>
		@foreach($posts as $post)
			<div class="card mb-4 post-text">
				<div class="card-body">
					<h5><a href="/posts/{{$post->id}}" class="card-title">{{ $post->title }}</a></h5>
					<p> {{ $post->body }}</p>
				</div>
			</div>
		@endforeach


	@include('layouts.errors')
@endsection