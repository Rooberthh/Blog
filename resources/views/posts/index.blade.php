@extends ('layouts.master')

@section('content')
	<!-- Page Content -->

        <!-- Blog Entries Column -->


          <h1 class="my-4">Blog
            <small>
              All Posts
            </small>
          </h1>

          @foreach( $posts as $post)

            @include('posts.post')

          @endforeach


@endsection

@section('footer')
	<script></script>
@endsection