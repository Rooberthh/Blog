@extends ('layouts.master')

@section ('content')

	<div class="card mt-5">
		<div class="card-block">
			<img class="profile-image mt-5 mb-1" src="http://via.placeholder.com/150x150" alt="Profile-image">
			<h4 class="card-title text-center">{{$user->name}}</h4>
			

			<div class="user_bio">
				<h3> Bio </h3>
				<p>{{ $user->profile->bio }}</p>
				<p> <b>Location:</b> {{ $user->profile->location }}</p>
				<p> <b>Github:</b> <a href="https://github.com/{{ $user->profile->github_username }}"> {{ $user->profile->github_username }}</a></p>
				<p> <b>Twitter:</b> <a href="https://twitter.com/{{$user->profile->twitter_username}}"> {{$user->profile->twitter_username}}</a></p>
			</div>
			<ul class="list-group mt-3">
				<li class="list-group-item">
					<p class="card-text mb-1">Number of Posts: {{$user->posts->count()}}</p>
				</li>

				<li class="list-group-item">
					<p class="card-text mb-1">Number of Comments: {{$user->comments->count()}}</p>
				</li>

				<li class="list-group-item">
					<a href="/users/{{$user->id}}/posts">View all posts</a>
				</li>

				@if(Auth::user()->id == $user->id)
				<li class="list-group-item">
					<a href="/users/{{$user->id}}/edit" class="btn btn-info"> Edit your Profile</a>
				</li>
				@endif
			</ul>
		</div>
	</div>




@endsection