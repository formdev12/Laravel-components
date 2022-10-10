<?php
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function(){
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('homepage');

    Route::get('/profile', function(){
        return view('admin.profile');
    })->name('admin.profile');
});

Route::get('/login', function(){
    return view('login');
})->middleware('guest')
->name('login');

Route::get('/register', function(){
    return view('register');
});

Route::get('/forget', function(){
    return view('forget');
})->name('forget.password');