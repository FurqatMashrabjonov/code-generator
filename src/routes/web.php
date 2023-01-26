<?php

use Illuminate\Support\Facades\Route;

//Route::get('code-generator', function () {
//    $a = new \Furqat\CodeGenerator\Api\Client();
//    return response()->json(['a' => $a->completions('create laravel controller class with CRUD methods')]);
//});

Route::get('code-generator', function () {
    return view('generator::dashboard');
});
