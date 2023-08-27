<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/reg', function () {
    return view('reg');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/afterLogin', function () {
    $user=App\Models\StudentModel::all();
    // return view('afterLogin')->with('task',$user);
    dd($user);
});

//Proccess rout
Route::post('/saveStData', 'DataController@saveStData');
Route::post('/login', 'DataController@login');
Route::post('/sub', 'DataController@sub');


