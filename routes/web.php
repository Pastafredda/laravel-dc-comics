<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route :: get("/", [MainController :: class, "index"])-> name('comic.index');
Route :: get("/comics/create", [MainController :: class, "create"])-> name('comic.create');
Route :: post('/comics', [MainController :: class, "store"])->name('comic.store');
Route :: get("/comics/{id}", [MainController :: class, "show"])-> name('comic.show');


