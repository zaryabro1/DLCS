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

//view routes
Route::get('/', function () {
    return view('login', ['loginFailed' => false]);
})->name('index');
Route::get('/card', function () {
    return view('card');
})->name('Card');
//Route::get('/register', 'App\Http\Controllers\UserController@import')->name('Register');
Route::get('/register', function(){
    return view('register');
})->name('Register');
Route::get('/login', function(){
    if (Auth::check()){
        return redirect(route('Home'));
    } else {
        return view('login', ['loginFailed' => false]);
    }
})->name('Login');

//functional routes
Route::post('/addlink', 'App\Http\Controllers\UserController@addLink')->name('AddLink');
Route::post('/loginuser', 'App\Http\Controllers\UserController@loginUser')->name('LoginUser');
Route::post('/registeruser', 'App\Http\Controllers\UserController@registerUser')->name('RegisterUser');
Route::get('/logout', 'App\Http\Controllers\UserController@logoutUser')->name('Logout');
Route::get('/home', 'App\Http\Controllers\UserController@showHomePage')->name('Home');
Route::post('/save', 'App\Http\Controllers\UserController@saveInformation')->name('Save');
Route::get('/home/{username}', 'App\Http\Controllers\UserController@showUserPage')->name('UserHome');
Route::post('/uploadfile', 'App\Http\Controllers\UserController@uploadFile')->name('UploadFile');
