<?php




Route::get('/', function () {
   dd("lawyer route");
});
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
