<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usaw', function () {
    return view('usaw');
});

Route::post('/usaw', function (\Illuminate\Http\Request $request) {
    $name = $request->input('name');
    $color = $request->input('color'); 
    return 'Form Submitted Successfully!' . ' Name: ' . $name . ' Favorite Color: ' . $color;
 });
 