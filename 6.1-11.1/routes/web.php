<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\JqueryAjaxController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

//
Route::prefix('auth-fake')->group(function () {
    Route::get('/', [AuthController::class, 'show'])->name('auth.show');
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
});

//
Route::resource('posts', PostController::class);
Route::resource('tasks', TaskController::class);
Route::resource('customers', CustomerController::class);
Route::resource('products', ProductController::class);

// Jquery-Ajax
Route::prefix('jquery')->group(function () {
    Route::get('/', fn () => redirect()->route('jquery.html-dom'));
    Route::get('/intro', [JqueryAjaxController::class, 'jqueryIntro'])->name('jquery.intro');
    Route::get('/ui', [JqueryAjaxController::class, 'jqueryUI'])->name('jquery.ui');
    Route::get('/html-dom', [JqueryAjaxController::class, 'htmlDOM'])->name('jquery.html-dom');
});
Route::prefix('ajax')->group(function () {
    Route::get('/', fn () => redirect()->route('ajax.news'));
    Route::get('/weather', [JqueryAjaxController::class, 'weather'])->name('ajax.weather');
    Route::get('/news', [JqueryAjaxController::class, 'news'])->name('ajax.news');
});

// Baskets
Route::prefix('baskets')->group(function () {
    Route::get('/', [ProductController::class, 'indexBasket'])->name('products.baskets.index');
    Route::get('/add/{id}', [ProductController::class, 'addBasket'])->name('products.baskets.add');
    Route::post('/update', [ProductController::class, 'updateBasket'])->name('products.baskets.update');
    Route::get('/delete/{id?}', [ProductController::class, 'deleteBasket'])->name('products.baskets.delete');
});

Route::get('language/{language?}', [LanguageController::class, 'change'])->name('language.change');
