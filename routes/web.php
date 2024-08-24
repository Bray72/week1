<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\barucontroller;


Route::get('/', function () {
    return view('index');
});

route::get('/Novel', [barucontroller::class, 'barunovel']);
route::get('/biografi', [barucontroller::class, 'barubiografi']);
route::get('/komik', [barucontroller::class, 'barukomik']);
Route::get('/store', [barucontroller::class, 'store']);