<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductsController;

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
/*
v
})->middleware(['auth'])->name('dashboard');
*/


require __DIR__.'/auth.php';

Route::get('/', [PagesController::class, 'index']);
Route::get('/home', [PagesController::class, 'index']);

Route::resource('/product',ProductsController::class);
Route::resource('/blog', PostsController::class);

Route::get('/faq', [PagesController::class, 'faq']);
Route::get('/aboutus', [PagesController::class, 'about']);

Route::get('/test', function () {
    return view('test');
});




