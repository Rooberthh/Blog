@extends ('layouts.master')

@section ('content')
	<h1>{{ $post->title }}</h1>

	@if( count($post->tags) )
			@foreach ($post->tags as $tag)
				<a href="/posts/tags/{{ $tag->name }}" class="btn btn-info">{{ $tag->name }} </a>
			@endforeach

		<hr>
	@endif

	<p>{{ $post->body }}</p>


	@if(Auth::user()->id == $post->user_id)
		<hr>

		<form method="post" action="/posts/{{ $post->id }}">
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
			<button class="btn btn-danger">Delete Post</button>
			<a href="/posts/{{$post->id}}/edit" class="btn btn-info float-right">Edit Post</a>
		</form>
	@endif

	<div class="comments">

		<ul>
			@foreach ($post->comments as $comment)
				<li class="list-group-item">
					
					<a href="/users/{{ $comment->user->id }}"> {{ $comment->user->name }} </a>

					<strong> {{ $comment->created_at->diffForHumans() }}: </strong>

					{{ $comment->body }}

				</li>
			@endforeach
		</ul>
	</div>

	<hr>


	<div class="card">
		<div class="card-block">
			<form method="POST" action="/posts/{{ $post->id }}/comments">
				{{ csrf_field() }}
				<div class="form-group">
					<textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Comment</button>
				</div>
			</form>
		</div>
	</div>

	@include('layouts.errors')
@endsection