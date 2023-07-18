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
Route :: get("/create", [MainController :: class, "create"])-> name('comic.create');
Route :: post('/store', [MainController :: class, "store"])->name('comic.store');
Route :: get("/show/{id}", [MainController :: class, "show"])-> name('comic.show');
Route :: get("/edit/{id}", [MainController :: class, "edit"])-> name('comic.edit');
Route :: put("/update/{id}", [MainController :: class, "update"])-> name('update');
Route :: delete("/destroy/{id}", [MainController :: class, "destroy"])->name('destroy');


