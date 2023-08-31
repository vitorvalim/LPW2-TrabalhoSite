<?php

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
// Route é uma classe do laravel
// '/' significa raiz
Route::get('/', function () {
    echo View("paginas.index");
});
Route::get('/about', function () {
    echo View("paginas.about");
});
Route::get('/servicos', function () {
    echo View("paginas.servicos");
});
Route::get('/projetos', function () {
    echo View("paginas.projetos");
});
Route::get('/produtos', function () {
    echo View("paginas.produtos");
});