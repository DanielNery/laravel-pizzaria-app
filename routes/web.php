<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CardapioController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RecipeController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/menu', [CardapioController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes');
Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');


// Rotas protegidas e verificadas
Route::get('/dashboard', function () {

    $timelineItems = [
        [
            'state' => '!',
            'title' => 'Preparação do pedido',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ],
        [
            'state' => '!',
            'title' => 'Recolhimento do pedido',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ],
        [
            'state' => '!',
            'title' => 'Entrega do pedido',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        ],
    ];

    return view('dashboard', compact('timelineItems'));
})->middleware(['auth', 'verified'])->name('dashboard');

// Rotas protegidas
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/contact', [ContactController::class, 'index']);
});

require __DIR__.'/auth.php';
