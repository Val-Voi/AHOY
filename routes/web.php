<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

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



Route::group(['controller' => 'App\Http\Controllers\LandingController'], function(){
  Route::get('/', 'index')->name('equipo');
  Route::get('/home', 'index')->name('contacto');
});

Route::get('/contact', function(){
    return view('email.contactmail');
});

Route::post('/', function(Request $request){
    
    Mail::send(new ContactMail($request));
    return redirect('/#contacto');
});