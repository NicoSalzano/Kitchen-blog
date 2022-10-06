<nav class="navbar navbar-expand-md  bg-white" aria-label="Fourth navbar example">
  <div class="container-fluid">
    <a class="navbar-brand px-5  " href="/"><img src="https://www.lennesimoblogdicucina.com/wp-content/uploads/2022/04/cropped-lennesimoblog.png" class="logo" alt="L'ennesimo blog di cucina" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse p-font p-navbar justify-content-around " id="navbarsExample04">
      <ul class="navbar-nav fs-5  mb-2 mb-md-0 px-5 py-3">
        <li class="nav-item  ">
          <a class="nav-link" aria-current="page" href="/">HOME</a>
        </li>
        <li class="nav-item  ">
          <a class="nav-link" aria-current="page" href="{{route('indexRecipe')}}">RICETTE</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="categoriesDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            CATEGORIE
          </a>
          <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
            @foreach ($categories as $category)
            <li>
              <a class="dropdown-divider" href="{{route('categoryShow',compact('category'))}}">{{$category->name}}</a>
            </li>
            <li><hr class="dropdown-divider"></li>                 
            @endforeach
          </ul>
        </li>
        
        
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">REGISTRATI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">ACCEDI</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('createRecipe')}}">AGGIUNGI RICETTA</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">ACTION</a></li>
            <li><a class="dropdown-item" href="#">ANOTR</a></li>
            <li><a class="dropdown-item " href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('frm-logout').submit();">LOGOUT</a>      
              <form id="frm-logout" action="{{ route('logout') }}" method="POST" class="d-none"></li>
                @csrf
              </ul>
            </li>
          </ul>
          @endguest
          
        </div>
      </div>
    </nav>