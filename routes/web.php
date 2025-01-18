<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return redirect()->route('index'); // Mengarahkan ke route 'index' yang sudah didefinisikan sebelumnya
});


Route::get('/data', [StudentController::class, 'index']) -> name('index');
Route::get('/data/create', [StudentController::class, 'create'])  -> name('create');
Route::get('/data/edit/{id}', [StudentController::class, 'edit'])  -> name('edit');
Route::put('/data/update/{id}', [StudentController::class, 'update'])  -> name('update');
Route::post('/data/store', [StudentController::class, 'store']) -> name('store');
Route::delete('/delete/{id}', [StudentController::class, 'destroy']) -> name('destroy');
Route::get('/data/detail/{id}', [StudentController::class, 'show']) -> name('show');

