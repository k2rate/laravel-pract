<?php

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
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'index'])->name('catalog');

Route::get('/where', function () {
    return view('where');
})->name('where');

Route::get('/tovar/{tovar_id}/', [App\Http\Controllers\TovarController::class, 'index'])->name('tovar');

Route::post('/addbucket/{tovar_id}', [App\Http\Controllers\BucketController::class, 'add'])->name('addbucket');

Route::get('/bucket',[App\Http\Controllers\BucketController::class, 'index'])->name('bucket');

/*


Route::get('/home', function () {
    return view('main');
})->name('home');

*/