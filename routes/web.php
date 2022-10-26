<?php

use Illuminate\Support\Facades\Route;

//use Spatie\Permission\Models\Role;
//Role::create(['name'=>'admin']);
//Role::create(['name'=>'usuario']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
