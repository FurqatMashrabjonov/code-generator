<?php

use Furqat\CodeGenerator\app\Http\Controllers\DashboardController;
use Furqat\CodeGenerator\app\Http\Controllers\MvcController;
use Illuminate\Support\Facades\Route;

//Route::get('code-generator', function () {
//    $a = new \Furqat\CodeGenerator\Api\Client();
//    return response()->json(['a' => $a->completions('create laravel controller class with CRUD methods')]);
//});


Route::prefix('code-generator')
    ->as('code-generator.')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/mvc', [MvcController::class, 'index'])->name('mvc');
    });
