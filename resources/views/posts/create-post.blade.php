@extends ('layouts.master')


@section ('content')
		<h1> Create Post </h1>

		<form method="POST" action="/posts">

			{{ csrf_field() }}

			 <div class="form-group">
			   <label class="post-label" for="title">Title</label>
			   <input type="text" class="form-control" id="title" name="title">
			 </div>

			 <div class="form-group">
			   <label class="post-label" for="body">Body</label>
			   <textarea id="body" name="body" class="form-control" rows="8"> </textarea>
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
		  		<button type="submit" class="btn btn-primary">Publish</button>
			</div>

		</form>

		@include('layouts.errors')

@endsection
