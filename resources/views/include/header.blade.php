<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: #9c89b8;">PROJETO LARAVEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="#" style="color: #9c89b8;">Home</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}" style="color: #9c89b8;">Logout</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link active" href="{{route('login')}}" style="color: #9c89b8;">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('registration')}}" style="color: #9c89b8;">Registration</a>
        </li>
        @endauth
       
      </ul>

      <span class="navbar-text" style="color: #9c89b8;">
      <span>Hello</span>
      @auth
        {{auth()->user()->name}}
      @endauth 
      </span>
    </div>
  </div>
</nav>