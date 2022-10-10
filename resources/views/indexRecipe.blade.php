{{-- PAGINA TUTTE RICETTE DA MODIFICARE --}}
<x-layout>
    <div class="container-fluid">
        <div class="row">
            <h1 class="">Esplora tutte le ricette</h1>
        </div>
    </div>
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <div class="row justify-content-evenly ">
                    @foreach ($recipe as $recipe)
                    <div class="col-12 col-lg-3">
                        <div class="card-recipe ">
                            <a href="{{route('detailsRecipe', $recipe)}}">
                                <img src="https://picsum.photos/400/600" class="img-fluid" />
                            </a>
                            <h5 class="card-title p-font mt-4 ">{{$recipe->title}}</h5>
                            {{-- <p class="card-text">{{$recipe->body}}</p> --}}
                            {{-- <p class="card-text">{{$recipe->description}}</p> --}}
                            <p class="card-footer">Pubblicata il:{{$recipe->created_at->format('d/m/Y')}}</p>
                            <p class="card-footer">Autore: {{$recipe->user->name ?? ''}}</p>
                            {{-- aggiungere pagina dettaglio --}}
                        </div>
                    </div>
                    @endforeach
                    {{-- link per paginazione da rivedere --}}
                    {{-- {{$recipe->links()}} --}}
                </div>
            </div>
        </div>
    </div>
</x-layout>