@extends ('layouts.master')


@section ('content')
		<h1> Create Tag </h1>

		<form method="POST" action="/tags">

			{{ csrf_field() }}

			 <div class="form-group">
			   <label class="post-label" for="name">Tag</label>
			   <input type="text" class="form-control" id="name" name="name">
			 </div>



			<div class="form-group">
				<label class="post-label" for="tags">Tags</label>
				<select name="tags" class="form-control">
					@foreach($tags as $tag)
						<option value="{{$tag->id}}">{{$tag->name}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
		  		<button type="submit" class="btn btn-primary">Create Tag</button>
			</div>

		</form>

		@include('layouts.errors')

@endsection
