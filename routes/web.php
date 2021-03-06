<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Departamentos;
use App\Http\Livewire\Lineas;
use App\Http\Livewire\Maquinas;
use App\Http\Livewire\OrdenesProduccion;
use App\Http\Livewire\Mermas;
use App\Http\Livewire\Seguimientos;
use App\Http\Livewire\Expediciones;



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

Route::middleware(['auth'])->get('/ordenes-produccion', OrdenesProduccion::class)->name('ordenes-produccion');

Route::middleware(['auth'])->get('/mermas', Mermas::class)->name('mermas');

Route::middleware(['auth'])->get('/seguimientos', Seguimientos::class)->name('seguimientos');

Route::middleware(['auth'])->get('/expediciones', Expediciones::class)->name('expediciones');

Route::get('/imprimir-seguimiento', [Seguimientos::class, 'imprimir'])->name('imprimir-seguimiento');

Route::get('/exportar-seguimiento', [Seguimientos::class, 'exportar'])->name('exportar-seguimiento');

Route::get('/imprimir-merma', [Mermas::class, 'imprimir'])->name('imprimir-merma');

Route::get('/exportar-merma', [Mermas::class, 'exportar'])->name('exportar-merma');


require __DIR__.'/auth.php';
