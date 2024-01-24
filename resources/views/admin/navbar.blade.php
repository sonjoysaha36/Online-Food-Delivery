<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link ms-0" aria-current="page" href="{{url('/dashboard')}}">Home</a>
        </li>
        
      <form class="d-flex " role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 20px;">
        <button class="btn btn-outline-success" type="submit" style="border-radius: 22px;">Search</button>
      </form>
      
    </div>
    <a href="{{url('/chatify')}}"><i class="fa-brands fa-rocketchat btn btn-light"></i></a>
    <a><i class="fa-regular fa-bell btn btn-light"></i></a>
    <x-app-layout>

    </x-app-layout>
  </div>
</nav>