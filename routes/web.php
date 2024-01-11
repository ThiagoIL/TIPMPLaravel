<?php

use App\Http\Controllers\DemandsController;
use App\Http\Controllers\LoginController;
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
    return redirect('/home');
});

Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class, 'login'])->name('login');
});

Route::post('/auth', [LoginController::class, 'authenticate'])->name('auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [DemandsController::class, 'index'])->name('index');
    Route::get('/done', [DemandsController::class, 'listDone'])->name('done');
    Route::get('/priority', [DemandsController::class, 'priority'])->name('priority');
    Route::post('/add', [DemandsController::class, 'add'])->name('add');
    Route::get('/delete/{id}', [DemandsController::class, 'delete'])->name('delete');
    Route::get('/edit/{id}', [DemandsController::class, 'edit'])->name('edit');
    Route::post('/update', [DemandsController::class, 'update'])->name('update');
    Route::get('/done/{id}', [DemandsController::class, 'runDone'])->name('make_done');

});
