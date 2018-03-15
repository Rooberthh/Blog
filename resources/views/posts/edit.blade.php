@extends ('layouts.master')


@section ('content')
		<h1> Edit Post </h1>

		<form method="POST" action="/posts/{{$post->id}}/edit">

			{{ csrf_field() }}
			{{ method_field('patch') }}

			 <div class="form-group">
			   <label for="title">Title</label>
			   <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
			 </div>

			 <div class="form-group">
			   <label for="body">Body</label>
			   <textarea id="body" name="body" class="form-control"> </textarea>
			 </div>

			<div class="form-group">
				<label class="post-label" for="tag_id">Tags</label>
				<select name="tag_id" class="form-control">
					@foreach($tags as $tag)
						<option value="{{$tag->id}}">
							{{$tag->name}}
						</option>
					@endforeach
				</select>
			 </div>


			<div class="form-group">
		  		<button type="submit" class="btn btn-primary">Edit</button>
			</div>

		</form>

		@include('layouts.errors')

@endsection
