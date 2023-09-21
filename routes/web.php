<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return  'LOL';
    //return view('welcome');
});
Route::get('/admin-form',[App\Http\Controllers\UserController::class, 'test']);
Route::post('/new-worker-create', [App\Http\Controllers\WorkerController::class,'create'])->name('new-worker-create');
Route::get('/new-worker-show', [App\Http\Controllers\WorkerController::class,'show']);