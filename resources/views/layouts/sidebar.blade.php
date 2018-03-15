<!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <form action="/search" method="POST" role="search">
                {{ csrf_field() }}
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." name="search">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit">Search</button>
                </span>
              </div>
              </form>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Archives</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    @foreach($archives as $stats) 
                      <li>
                        <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">

                          {{ $stats['month'] . ' ' . $stats['year'] }}

                        </a>
                      </li>
                    @endforeach

                    <li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Tags</h5>
            <div class="card-body">
                @foreach ($tags as $tag)
                  <a class="btn btn-info" href="/posts/tags/{{ $tag }}"> {{ $tag }}</a>
                @endforeach
              </ul>
            </div>
          </div>
        </div>