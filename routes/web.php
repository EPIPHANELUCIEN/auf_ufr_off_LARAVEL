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
    return view('welcome');
});

Route::get('tableau', function () {
    return view('tableau');
});
Route::get('formilaire', function () {
    return view('formilaire');
});
Route::get('inscription_adm', function () {
    return view('inscription_adm');
});
Route::get('autentification_adm', function () {
    return view('autentification_adm');
});

route::get("abonne",[abonnesController::class,"index"]);
route::get("administrateur",[abonnesController::class,"abo"]);

route::get("/abonne/create",[abonnesController::class,"create"])->name("abonne.reate");
route::post("/abonne/create",[abonnesController::class,"store"])->name("abonne.reate");