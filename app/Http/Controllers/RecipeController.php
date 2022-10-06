<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;


class RecipeController extends Controller
{
    public function createRecipe()
    {
        return view('createRecipe');
    }


    public function indexRecipe()
    {
        $recipe = Recipe::all();
        return view('indexRecipe', compact('recipe'));
    }
}

