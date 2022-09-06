<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateRecipe extends Component
{
    public $title;
    public $body;
    public $description;
    public $category;
    

    protected $rules = [

        'title' => 'required|min:4',
        'body' => 'required|min:4',
        'description' => 'required|min:4',
        'category' => 'required',
    ];


    protected $messages = [
        'required' => 'Il campo  è richiesto',
        'min' => 'Il campo è troppo corto',
    ];

        // da controllare per errore
    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }
    


    public function store()
    {
        $category = Category::find($this->category);
        
        $recipe = $category->recipes()->create([
            'title'=>$this->title,
            'body'=>$this->body,
            'description'=>$this->description,

        ]);
        Auth::user()->recipes()->save($recipe);
        
        session()->flash('message', 'Ricetta inserita con successo');
        $this->cleanForm();
    }


    public function cleanForm()
    {
        $this->title='';
        $this->body='';
        $this->description='';
        $this->category='';


    }

    public function render()
    {
        return view('livewire.create-recipe');
    }
}
