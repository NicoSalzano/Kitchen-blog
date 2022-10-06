<x-layout>
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-center"> Esplora la categoria:{{$category->name}}</h1>
        </div>
    </div>
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <div class="row justify-content-evenly ">
                    @forelse ($category->recipes as $recipe)
                    <div class="col-12 col-lg-3">
                        <div class="card-recipe ">
                            <a href="#">
                                <img src="https://picsum.photos/400/600" class="img-fluid" />
                            </a>
                            <h5 class="card-title p-font mt-4 ">{{$recipe->title}}</h5>
                            <p class="card-text">{{$recipe->body}}</p>
                            <p class="card-text">{{$recipe->description}}</p>
                            <p class="card-footer">Pubblicata il:{{$recipe->created_at->format('d/m/Y')}}</p>
                            <p class="card-footer">Autore{{$recipe->user->name ?? ''}}</p>
                        </div>
                    </div>
                    @empty
                    <div class="col-12 col-lg-3">
                        <p class="h1">Non sono presenti ricette per questa categoria</p>
                        <p class="h2">Pubblicane una <a href="{{route('createRecipe')}}" class="btn btn-succes ">Nuova ricetta</a></p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-layout>
    
    