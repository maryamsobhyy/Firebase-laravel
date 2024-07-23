<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/firestore', function () {
    // dd(phpinfo());
    $firestore  = app('firebase.firestore');
$db = $firestore->database();
dd($db->collection("users")->documents()->rows());
});
//dashboard pages
Route::get('/', function () {
    return view('welcome');
})->name('dashboard');
Route::get('/datatables', function () {
    return view('data-tables');
})->name('data-tables');
Route::get('/simpletables', function () {
    return view('simple-tables');
})->name('simple-tables');
