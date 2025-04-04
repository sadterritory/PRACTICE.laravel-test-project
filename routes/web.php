<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Если где-то юзаешь ссылки - старайся использовать наименования

Route::get('workers', [\App\Http\Controllers\WorkerController::class, 'index'])->name('worker.index');

Route::get('workers/create', [\App\Http\Controllers\WorkerController::class, 'create'])->name('worker.create');

Route::get('workers/{worker}', [\App\Http\Controllers\WorkerController::class, 'show'])->name('worker.show');

Route::post('workers', [\App\Http\Controllers\WorkerController::class, 'store'])->name('worker.store');

Route::get('workers/{worker}/edit', [\App\Http\Controllers\WorkerController::class, 'edit'])->name('worker.edit');

Route::patch('workers/{worker}', [\App\Http\Controllers\WorkerController::class, 'update'])->name('worker.update');

Route::delete('workers/{worker}', [\App\Http\Controllers\WorkerController::class, 'delete'])->name('worker.delete');
