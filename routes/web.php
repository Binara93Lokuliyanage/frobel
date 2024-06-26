<?php

use App\Http\Controllers\ContactMailController;
use App\Mail\ContactEmail;
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
    return redirect('/de');
});

Route::group(['prefix'=>'{locale}'], function() {
    Route::get('/', function () {
        return view('front.home');
    })->middleware('setLocale');
});

Route::post('/contactForm', [ContactMailController::class,'contactEmail']);
