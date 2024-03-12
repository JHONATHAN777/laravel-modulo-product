<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\products;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 

});
Route::get('categoria',[CategoriesController::class, 'index'])->name('inicio');
Route::get('/create',[CategoriesController::class,'create'])->name('create');  
Route::put('/categories/{category}', [CategoriesController::class, 'update'])->name('category');
Route::get('/categories/{categories}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
Route::post('crear-categoria',[CategoriesController::class, 'store'])->name('crear');
Route::delete('/categories/{categories}', [CategoriesController::class, 'destroy'])->name('categories.destroy');

// products
Route::get('/product',[ProductController::class, 'index'])->name('inicio.products');
Route::get('/product-formulario',[ProductController::class, 'create'])->name('crear-producto');
Route::post('/crear-producto',[ProductController::class, 'store'])->name('crear.products');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


require __DIR__.'/auth.php';
