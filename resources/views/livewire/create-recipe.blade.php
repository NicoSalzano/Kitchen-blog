<div>
    <h1>
        Aggiungi la tua ricetta
    </h1>
    <form wire:submit.prevent="store">
        @csrf
        <div class="form-group">
          <label for="title">Nome della ricetta</label>
          <input wire:model="title" type="text" class="form-control" id="exampleInputText">
        </div>
        <div class="form-group">
          <label for="body">Ingredienti della ricetta</label>
          <input wire:model="body" type="text" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="form-group">
          <label for="exampleInputNumber">Procedimento della ricetta</label>
          <input wire:model="description" type="text" data-bs-input class="form-control" id="exampleInputNumber">
        </div>
        
        <button class="btn btn-primary shadow px-4 py-2" type="submit">
                Aggiungi ricetta
        </button>
    </form>
</div>
