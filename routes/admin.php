<?php


Route::get('/', function () {
    dd("admin routes");
});
Auth::routes(['register'=>false]);
