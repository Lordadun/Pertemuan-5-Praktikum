<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route return string
Route::get('/test', function(){
    return 'Hello World';
});

// route view
// Route::view('/books', 'books.index');

// route view with data
Route::view('/greeting', 'greeting', ['name' => 'John Doe']);

// route with parameter
Route::get('/greeting/{name}', function($name){
    return view('greeting', ['name' => $name]);
});

// route dengan controller
Route::controller(UserController::class)->group(function () {
    // Route::get('/greeting', 'index'); // tidak pakai parameter
    Route::get('/greeting/{name}', 'index');
});
