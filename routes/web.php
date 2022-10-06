<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('categoria/{category}', [PublicController::class, 'categoryShow'])->name('categoryShow');
Route::get('dettagli/ricetta/{recipe}',[PublicController::class,'detailsRecipe'])->name('detailsRecipe'); 


// Recipe
Route::get('nuova/ricetta',[RecipeController::class, 'createRecipe'])->middleware('auth')->name('createRecipe');
Route::get('index/ricetta',[RecipeController::class, 'indexRecipe'])->name('indexRecipe'); 
