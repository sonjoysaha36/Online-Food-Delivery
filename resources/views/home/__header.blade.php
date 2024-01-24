<div>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-left: 2%; margin-right: 2%">
    <div class="container-fluid">
      <a class="navbar-brand fs-3 fw-bold" href="{{url('/')}}"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" id="ecommerce"><path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;marker:none;-inkscape-font-specification:Sans" d="M16.75.469a.517.517 0 0 0-.406.5v1.25c-.474.137-.91.327-1.344.562l-.875-.906a.52.52 0 0 0-.719 0l-2 2a.52.52 0 0 0 0 .719l.906.875a6.68 6.68 0 0 0-.562 1.343H10.5a.52.52 0 0 0-.5.5V8.97A.5.5 0 0 0 10 9H7.844l-.625-2.625C7.136 6.065 7 6 6.562 6H3v1h3.344l3.468 14.594a.5.5 0 0 0 .063.125v.031a.5.5 0 0 0 .031.063l.875 3.78c-1.348.409-2.344 1.649-2.344 3.126A3.29 3.29 0 0 0 11.72 32 3.29 3.29 0 0 0 15 28.719c0-.887-.361-1.69-.938-2.282h6.313a3.264 3.264 0 0 0-.938 2.282A3.29 3.29 0 0 0 22.72 32 3.29 3.29 0 0 0 26 28.719c0-1.633-1.215-2.973-2.781-3.219-3.373 0-7.66-.063-11.438-.063L10.97 22h13.906a.516.516 0 0 0 .5-.375l3.594-12c.075-.29-.17-.616-.469-.625h-2a.5.5 0 0 0 0-.031V7.313a.52.52 0 0 0-.5-.5h-1.25a6.67 6.67 0 0 0-.563-1.344l.907-.875a.52.52 0 0 0 0-.719l-2-2a.52.52 0 0 0-.719 0l-.875.906a6.676 6.676 0 0 0-1.344-.562V.969a.52.52 0 0 0-.5-.5h-2.812a.5.5 0 0 0-.094 0zm.594 1h1.812V2.53a.517.517 0 0 0 .407.5c.64.146 1.224.4 1.78.75.19.124.465.097.626-.062l.781-.75L24 4.219 23.25 5a.514.514 0 0 0-.063.594c.348.558.607 1.17.75 1.812.044.23.267.41.5.407H25.5v1.156a.5.5 0 0 0 0 .031H11a.5.5 0 0 0 0-.031V7.813h1.063a.517.517 0 0 0 .5-.407c.146-.64.4-1.225.75-1.781A.516.516 0 0 0 13.25 5l-.75-.781 1.25-1.25.781.75c.157.144.41.171.594.062a5.861 5.861 0 0 1 1.813-.75.517.517 0 0 0 .406-.5zm.906 3.25c-2.203 0-4 1.797-4 4 0 .086.026.165.031.25h1c-.007-.084-.031-.164-.031-.25 0-1.663 1.337-3 3-3s3 1.337 3 3c0 .086-.024.166-.031.25h1c.005-.085.031-.164.031-.25 0-2.203-1.797-4-4-4zM8.094 10h19.75l-.594 2H15v1h11.938l-.625 2H17v1h9.031l-.625 2H19v1h6.125l-.625 2H10.719zm3.625 16.438A2.276 2.276 0 0 1 14 28.718 2.276 2.276 0 0 1 11.719 31a2.276 2.276 0 0 1-2.281-2.281 2.276 2.276 0 0 1 2.28-2.282zm11 0A2.276 2.276 0 0 1 25 28.718 2.276 2.276 0 0 1 22.719 31a2.276 2.276 0 0 1-2.282-2.281 2.276 2.276 0 0 1 2.282-2.282zm-11 .75c-.823 0-1.5.677-1.5 1.5 0 .822.677 1.5 1.5 1.5.822 0 1.5-.678 1.5-1.5 0-.823-.678-1.5-1.5-1.5zm11 0c-.823 0-1.5.677-1.5 1.5 0 .822.677 1.5 1.5 1.5.822 0 1.5-.678 1.5-1.5 0-.823-.678-1.5-1.5-1.5zm-11 1c.282 0 .5.217.5.5 0 .282-.218.5-.5.5a.493.493 0 0 1-.5-.5c0-.283.218-.5.5-.5zm11 0c.282 0 .5.217.5.5 0 .282-.218.5-.5.5a.493.493 0 0 1-.5-.5c0-.283.218-.5.5-.5z" color="#000" enable-background="accumulate" font-family="Sans" font-weight="400" overflow="visible"></path></svg></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}"
              > Home</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/test')}}"
              > All Product</a
            >
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              >
              Categories
            </a>
            <ul class="dropdown-menu">
              @foreach ($category as $category)
                  
              
              <li><a class="dropdown-item" href="{{url('category_product',$category->id)}}">
                {{$category->category_name}}</a></li>
              @endforeach
            </ul>
          </li>
         
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{url('/my_learning')}}"
              ><i class="fa-solid fa-book-open"></i> My Learning</a
            >
          </li> --}}
        </ul>
        {{-- <a href=""><img class="icon mx-2" src="/home/image/cart.png" alt=""></a> --}}
        <a type="button" class="btn btn-outline-light position-relative mx-2" href="{{url('show_cart')}}">
          {{-- <img class="icon" src="/home/image/cart.png" alt=""> --}}
          <svg
                width="30px"
                height="30px"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M1 1C0.447715 1 0 1.44772 0 2C0 2.55228 0.447715 3 1 3H3.20647L5.98522 14.9089C6.39883 16.6816 7.95486 17.9464 9.76471 17.9983V18H17.5874C19.5362 18 21.2014 16.5956 21.5301 14.6747L22.7857 7.33734C22.9947 6.11571 22.0537 5 20.8143 5H5.72686L4.97384 1.77277C4.86824 1.32018 4.46475 1 4 1H1ZM6.19353 7L7.9329 14.4545C8.14411 15.3596 8.95109 16 9.88058 16H17.5874C18.5618 16 19.3944 15.2978 19.5588 14.3373L20.8143 7H6.19353Z"
                  fill="#000000"
                />
                <path
                  d="M8 23C9.10457 23 10 22.1046 10 21C10 19.8954 9.10457 19 8 19C6.89543 19 6 19.8954 6 21C6 22.1046 6.89543 23 8 23Z"
                  fill="#000000"
                />
                <path
                  d="M19 23C20.1046 23 21 22.1046 21 21C21 19.8954 20.1046 19 19 19C17.8954 19 17 19.8954 17 21C17 22.1046 17.8954 23 19 23Z"
                  fill="#000000"
                />
                
              </svg>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="margin-top: 2px;">
                {{$carts}}
              </span>
        </a>
        
        <form action="{{url('search')}}" method="get" class="d-flex" role="search">
          @csrf
          <input
            class="form-control me-2"
            type="search"
            name="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success" type="submit">
            Search
          </button>
        </form>
      </div>
      @if (Route::has('login'))
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-2">
        @auth
        
        <li class="nav-item">
          <x-app-layout>
  
          </x-app-layout>
        </li>
        @else
      <li class="nav-item" style="    margin-right: 6px;">
        <a class="btn btn-primary" id="logincss" href="{{ route('login') }}"
          >Login</a
        >
      </li>
      <li class="nav-item">
        <a class="btn btn-success" href="{{ route('register') }}"
          >Register</a
        >
      </li>
      @endauth
    </ul>

    @endif
    </div>
  </nav>
</div>
{{-- second nav bar --}}