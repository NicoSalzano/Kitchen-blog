<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function welcome() 
   {
        $recipes = Recipe::take(4)->get()->sortByDesc('created_at');
        
        return view('welcome', compact('recipes'));
   }

   public function categoryShow(Category $category)
   {
      return view('categoryShow', compact('category'));
   }

   public function detailsRecipe(Recipe $recipe)
   {
       return view('detailsRecipe', compact('recipe'));
   }

}

