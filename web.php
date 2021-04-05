<?php

use App\Http\Controllers\Postscontroller;
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

Route::name('tabs')->get('/tabs','App\Http\Controllers\Postscontroller@tabs');


Route::name('tabledetails')->get('/tabledetails','App\Http\Controllers\Postscontroller@tabledetails');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});


//signup get and post routes

Route::name('signup')->get('/signup','App\Http\Controllers\Postscontroller@all_signup');
Route::name('new_signup')->post('/new_signup','App\Http\Controllers\PostsController@create_signup');

//details get and post routes
Route::name('details')->get('/details','App\Http\Controllers\Postscontroller@all_details');
Route::name('new_details')->post('/new_details','App\Http\Controllers\PostsController@create_details');


//loan get and post routes
Route::name('loan')->get('/loan','App\Http\Controllers\Postscontroller@all_loan');
Route::name('new_loan')->post('/new_loan','App\Http\Controllers\PostsController@create_loan');

//login get and post routes
Route::name('login')->get('/login','App\Http\Controllers\Postscontroller@all_login');
Route::name('new_login')->post('/new_login','App\Http\Controllers\PostsController@create_login');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
