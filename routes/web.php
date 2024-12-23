<?php

use Illuminate\Support\Facades\Route;
//  Controllerのuse宣言
use App\Http\Controllers\IndexController;


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
/*
Route::get('/', function () {
    return view('index');
});
*/
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/sitemap.xml', [IndexController::class, 'sitemap'])->name('sitemap');
//Route::get('/index', [IndexController::class, 'index'])->name('public.index'); // ルート名が修正されています