<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">MyLMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav ms-auto">
        @guest
          <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @else
          <li class="nav-item"><a class="nav-link" href="{{ route('courses.index') }}">Courses</a></li>
          <li class="nav-item"><a class="nav-link" href="#">{{ Auth::user()->name }}</a></li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">@csrf
              <button class="btn btn-link nav-link" type="submit">Logout</button>
            </form>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
