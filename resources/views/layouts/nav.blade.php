<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/home">OTP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item active">
              <a class="nav-link" href="/home">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

            @if(Auth::check())

            <li class="nav-item">
              <a class="nav-link" href="/posts/create">Create Post</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/tags/create">Create Tag</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/users/{{ Auth::user()->id }}">{{ Auth::user()->name }}</a>
            </li>

            <li class="nav-item ml-5">
              <a class="nav-link" href="/logout">Logout</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/register">Register</a>
            </li>
            @endif
            
          </ul>
        </div>
      </div>
    </nav>