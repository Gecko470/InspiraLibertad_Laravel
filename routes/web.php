<?php

use App\Http\Controllers\AreaPersonalController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ContactoController;
use App\View\Components\Contacto;
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
    return view('home');
})->name('home');

Route::get('/queEs', function () {
    return view('queEs');
})->name('queEs');

Route::get('/depAdic', function () {
    return view('depAdic');
})->name('depAdic');

Route::get('/cursos', function () {
    return view('cursos');
})->name('cursos');

Route::get('/atPers', function () {
    return view('atPers');
})->name('atPers');

Route::get('/retiros', function () {
    return view('retiros');
})->name('retiros');

Route::get('/sobreMi', function () {
    return view('sobreMi');
})->name('sobreMi');

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');

Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

Route::post('/carrito', [CarritoController::class, 'store'])->name('carrito.store');

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/aPersonal', [AreaPersonalController::class, 'index'])->name('aPersonal.index');
});

require __DIR__ . '/auth.php';
