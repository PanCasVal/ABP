<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\LookupController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ExaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CompradorController;
use App\Http\Middleware\CheckUser;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get( "example",function ()
{
    return view("example.index");
});
Route:: get("inicio", function (){
    return view("inicio.index");
});
Route:: get("abp", function (){
    return view("abp.index");
});
Route:: get("Ingresa", function (){
    return view("Ingresa.index");
});
Route:: get("Valida", function (){
    return view("inicio.valida");
});
Route:: get("Informacion", function (){
    return view("Informacion.index");
});
Route::get("Zonas",function (){
    return view("zonas.index");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("test", function ()
{
    return view("test.index");
});
Route::middleware([CheckUser::class])->group(function()
{
    Route::resource('posts', PostController::class, ['names' => [
        //'index' => 'posts.index',
        'store' => 'posts.new',]
    ])-> except(['index']);
});
Route::get("posts",[PostController::class,"index"])->name("posts.index");

Route::resource('tags', TagController::class);

Route::resource('lookups', LookupController::class);

Route::resource('comments', CommentController::class);

Route::resource('exas',ExaController::class);

Route::resource('productos',ProductoController::class);

Route::resource('compradores',CompradorController::class);

