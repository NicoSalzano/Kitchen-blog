<nav class="navbar navbar-expand-md  bg-white" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand " href="/"><img src="https://www.lennesimoblogdicucina.com/wp-content/uploads/2022/04/cropped-lennesimoblog.png" alt="L'ennesimo blog di cucina" class="logo" width="320" height="150"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse p-font navbar " id="navbarsExample04">
        <ul class="navbar-nav fs-5  mb-2 mb-md-0 ">
          <li class="nav-item  ">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="categoriesDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
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
            <a class="nav-link" href="{{route('register')}}">Registrati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Accedi</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('createRecipe')}}">Aggiungi Ricetta</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item " href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('frm-logout').submit();">Logout</a>      
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" class="d-none"></li>
                  @csrf
            </ul>
          </li>
        </ul>
        @endguest
       
      </div>
    </div>
  </nav>