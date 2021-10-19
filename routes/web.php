<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('home', function () {
    return view('home');
});

Route::get('music', function () {
    return view('music');
});


Route::get('events', function () {
    return view('events');
});

// Route::get('tickets', function () {
//     return view('tickets');
// });

Route::get('tickets', 
[ContactController::class, 'loadTicketForm'])
->name('tickets');

Route::post('tickets', [ContactController::class, 'sendTicketForm'])
->name('sendtickets');

Route::get('upcoming', function () {
    return view('upcoming');
});

Route::get('calendar', function () {
    return view('calendar');
});

Route::get('soundcloud', function () {
    return view('soundcloud');
});

Route::post('newtest', function() {
    dd(request()->all());
});
