{{-- PAGINA DETTAGLIO ANNUNCI DA MODIFICARE --}}
<x-layout>
    <div class="container-fluid">
        <div class="row">
            <h1 class="">{{$recipe->title}}</h1>
        </div>
    </div>

    <div class="row justify-content-evenly ">
        <div class="col-12 col-lg-3">
          <div class="card-recipe ">
              {{-- <a href="{{route('detailsRecipe', $recipe)}}"> --}}
                <img src="https://picsum.photos/400/600" class="img-fluid" />
              {{-- </a> --}}
              <h5 class="card-title p-font mt-4 ">{{$recipe->title}}</h5>
              <p class="card-text">{{$recipe->body}}</p> 
              <p class="card-text">{{$recipe->description}}</p> 
              {{-- AGGIUNGERE LINK ALLA CATEGORIA --}}
              {{-- <p class="card-footer">Pubblicata il:{{$recipe->created_at->format('d/m/Y')}}</p> --}}
            </div>
         
          </div>
        </div>
</x-layout>