<x-layout>

<div class="container-fluid p-0 m-0">
  <div class="row p-0 m-0 align-items-center">
    <div class="col-12 cover p-0 m-0 justify-content-center  text-center">
      
    </div>
  </div>
</div>

<section class="container  sezione-filtri">
  <div class="row py-4">
      <div class="col-12 col-md-3">
          <div class="form-floating mb-3">
              {{-- Aggiungere div per titolo e div per form di ricerca --}}
          </div>
      </div>
    </div>
</section>


  <h3>Le ricette dei nostri iscritti</h3>
  {{-- card per mostrare le ultime ricette aggiunte nella home --}}
  <div class="container">

    <div class="col-12 col-md-4">
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
              @endforeach
              </div>
            </div>
  </div>
</x-layout>