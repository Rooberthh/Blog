<!-- Blog Post -->
          <div class="card mb-4">
            <div class="card-body">
              <h2 class="card-title">
                <a href="/posts/{{ $post->id }}">
                  {{ $post->title }}
                </a>
              </h2>
                 @if( count($post->tags) )
                  @foreach ($post->tags as $tag)
                    <a href="/posts/tags/{{ $tag->name }}" class="btn btn-info mb-2">{{ $tag->name }} </a>
                  @endforeach
              @endif

              <p class="card-text post-text">{{ $post->body }}</p>

              <a href="/posts/{{ $post->id }}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              <a href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a> on
              {{ $post->created_at->toFormattedDateString() }}
            </div>
          </div>