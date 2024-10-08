<?php

use App\Http\Controllers\PemainController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pemain', [PemainController::class, 'index']) -> name('pemain.index');
Route::get('/pemain/create', [PemainController::class, 'create']) -> name('pemain.create');
Route::post('/pemain/store', [PemainController::class, 'store']) -> name('pemain.store');
Route::get('/pemain/show/{id}', [PemainController::class, 'show']) -> name('pemain.show');
Route::get('/pemain/edit/{id}', [PemainController::class, 'edit']) -> name('pemain.edit');
Route::post('/pemain/update/{id}', [PemainController::class, 'update']) -> name('pemain.update');
Route::delete('/pemain/delete/{id}', [PemainController::class, 'destroy']) -> name('pemain.destroy');