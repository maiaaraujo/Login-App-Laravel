<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="{{ asset('images/Nyan-cat.png') }}" alt="Minha Imagem" width="130" height="60" class="mr-8">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="#" style="color: #9c89b8; font-weight: bold;">Home</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}" style="color: #9c89b8; font-weight: bold;">Logout</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link active" href="{{route('login')}}" style="color: #9c89b8; font-weight: bold;">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('registration')}}" style="color: #9c89b8; font-weight: bold;">Registration</a>
        </li>
        @endauth

      </ul>

    </div>
  </div>
</nav>