@extends ('layouts.master')

@section ('content')

	<h1>Edit Profile</h1>

	<form method="POST" action="/users/{{ $user->id }}/update">
		{{ csrf_field() }}
		{{ method_field('patch') }}

		<div class="form-group">
			<label for="location">Location</label>
			<input type="text" class="form-control" name="location" id="location" value="{{$user->profile->location}}">
		</div>


		<div class="form-group">
			<label for="bio">Bio</label>
			<textarea name="bio" id="bio" class="form-control"></textarea>
		</div>

		<div class="form-group">
			<label for="twitter_username">Twitter Username</label>
			<input type="text" class="form-control" name="twitter_username" value="{{$user->profile->twitter_username}}">
		</div>

		<div class="form-group">
			<label for="github_username">Github Username</label>
			<input type="text" class="form-control" name="github_username" value="{{$user->profile->github_username}}">
		</div>

		<div class="form-group">
			<button class="btn btn-danger" type="submit">Update Profile</button>
		</div>
	</form>

	@include('layouts.errors')

@endsection