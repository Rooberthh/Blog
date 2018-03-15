@extends ('layouts.master')

@section ('content')

	<h1>{{$user->name}}`s Posts</h1>

		@foreach( $user->posts as $post)

		<div class="card mb-4 post-text">
			<div class="card-body">
				<h5><a href="/posts/{{$post->id}}" class="card-title">{{ $post->title }}</a></h5>
				<p> {{ $post->body }}</p>
			</div>
		</div>

		@endforeach

@endsection