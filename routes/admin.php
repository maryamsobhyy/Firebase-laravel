<?php


Route::middleware(['IsAdmin','fireauth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/datatables', function () {
        return view('data-tables');
    })->name('data-tables');
    Route::get('/simpletables', function () {
        return view('simple-tables');
    })->name('simple-tables');
    
});
