<?php

use App\Http\Controllers\principalController;
use App\Http\Controllers\sobrenosController;
use App\Http\Controllers\UserController;
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
Route::get('/sobre-nos', [sobrenosController::class, 'index'])->name('site.sobre-nos');

Route::get('/', [principalController::class, 'principal'])->name('site.index');

Route::get('/contact', function () {
    return view('site.contato');
})->name('site.contato');

Route::get('/login', function () {
    return view('Login');
})->name('site.login');


Route::prefix('/app')->group(function(){

    Route::get('/clientes', function () {
        return view('clientes');
    })->name('app.clientes');
    Route::get('/fornecedores', function () {
        return view('fornecedores');
    })->name('app.fornecedores');
    Route::get('/produtos', function () {
        return view('produtos');
    })->name('app.produtos');

});

Route:: fallback(function(){
    echo 'Essa rota não existe. <a href="'.route('site.index').'">Clique aqui </a> para ir para página inicial';
});



