<x-layout>
    <div class="col-12 col-md-4">
        <h1>Blog Cucina</h1>
        <p>Le ricette dei nostri iscritti</p>
        <div class="row">
            @foreach ($recipes as $recipe)
            <div class="card text-center " style="background-color:#ffffff;">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/new/standard/nature/111.webp" class="img-fluid" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                  </a>
                </div>
              
                <div class="card-body">
                  <h5 class="card-title">{{$recipe->title}}</h5>
                  <p class="card-text">{{$recipe->body}}</p>
                  <p class="card-text">{{$recipe->description}}</p>
                  <a href="" class="btn btn-primary">Visualizza</a>
                  <a href="" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-succes">
                    Categoria:{{$recipe->category->name}}
                  </a>
                  <p class="card-footer">Pubblicata il:{{$recipe->created_at->format('d/m/Y')}}</p>



                </div>
              </div>
        
              </div>
                
            @endforeach
        </div>
    </div>
</x-layout>