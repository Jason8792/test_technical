<?php

use App\Http\Controllers\logincontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [logincontroller::class, 'login'])->name('login');
    Route::post('/', [Controller::class, 'authenticate']);
    Route::get('/register', [Controller::class, 'register']);
    Route::post('/registermember', [Controller::class, 'add']);
});
