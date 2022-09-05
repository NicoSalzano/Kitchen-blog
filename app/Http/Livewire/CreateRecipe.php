<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class CreateRecipe extends Component
{
    public $title;
    public $body;
    public $description;

    public function store()
    {
        Recipe::create([

            'title'=>$this->title,
            'body'=>$this->body,
            'description'=>$this->description,

        ]);
    }

    public function render()
    {
        return view('livewire.create-recipe');
    }
}
