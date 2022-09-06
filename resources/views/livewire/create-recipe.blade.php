<div>
  <h1>
    Aggiungi la tua ricetta
  </h1>
  
  @if (session()->has('message'))
  <div class="flex flex-row justify-content-center my-2 alert alert-succes">
    {{session('message')}}
  </div>
  @endif
  <form wire:submit.prevent="store">
    @csrf
    <div class="form-group">
      <label for="title">Nome della ricetta</label>
      <input wire:model="title" type="text" class="form-control" @error('title') is-invalid @enderror>
      @error('title')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="body">Ingredienti della ricetta</label>
      <input wire:model="body" type="text" class="form-control" @error('body') is-invalid @enderror>
      @error('body')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputNumber">Procedimento della ricetta</label>
      <input wire:model="description" type="text" data-bs-input class="form-control" @error('description') is-invalid @enderror>
      @error('description')
      {{$message}}
      @enderror
    </div>
    
    <div class="mb-3">
        <label for="category">Categoria</label>
        <select wire:model.defer="category" class="form-control" id="category">
          <option value="">Scegli la categoria</option>
          @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
    </div>
    
    
    <button class="btn btn-primary shadow px-4 py-2" type="submit">
      Aggiungi ricetta
    </button>
  </form>
</div>
