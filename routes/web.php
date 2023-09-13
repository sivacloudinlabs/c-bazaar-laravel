<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

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


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticateUser'])->name('authenticateUser');


Route::group(['middleware' => ['auth']], function() {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // });
    
    Route::get('dashboard', function () {
        return view('content.dashboard');
    })->name('dashboard');
});