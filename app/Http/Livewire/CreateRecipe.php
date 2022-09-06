<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class CreateRecipe extends Component
{
    public $title;
    public $body;
    public $description;
    

    protected $rules = [

        'title' => 'required|min:4',
        'body' => 'required|min:4',
        'description' => 'required|min:4',

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
        Recipe::create([

            'title'=>$this->title,
            'body'=>$this->body,
            'description'=>$this->description,
        ]); 
        session()->flash('message', 'Ricetta inserita con successo');
        $this->cleanForm();
    }


    public function cleanForm()
    {
        $this->title='';
        $this->body='';
        $this->description='';
    }

    public function render()
    {
        return view('livewire.create-recipe');
    }
}
