<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\HomeController;

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

Route::middleware('auth')->group(function () {
    Route::resources(['homes' => DeviceController::class,]);
    Route::resources(['devices' => DeviceController::class,]);
    Route::resources(['users' => UserController::class,]);
    Route::resources(['tickets' => TicketController::class,]);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('setlocale/{lang}', [HomeController::class, 'setlocale'])->name('lang');

    Route::get('/', function () {
        return view('index');
});

Route::get('/index', function () {
    return view('index');
});//->name('dashboard');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


});


require __DIR__.'/auth.php';
