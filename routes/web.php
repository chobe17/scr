<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Departamentos;
use App\Http\Livewire\Lineas;
use App\Http\Livewire\Maquinas;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->get('/departamentos', Departamentos::class)->name('departamentos');

Route::middleware(['auth'])->get('/lineas', Lineas::class)->name('lineas');

Route::middleware(['auth'])->get('/maquinas', Maquinas::class)->name('maquinas');

require __DIR__.'/auth.php';
