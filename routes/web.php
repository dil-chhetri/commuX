<?php

use App\Http\Controllers\basicController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\register;
use App\Http\Controllers\login;
use App\Http\Controllers\UserController;
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



Route::get('/signup',[UserController::class, 'register'])->name('user.register');

Route::post('/signup',[UserController::class, 'create'])->name('user.create');

Route::get('/login',[UserController::class, 'index'])->name('user.login');
Route::post('/login',[UserController::class, 'login'])->name('user.auth');

Route::get('/',[GroupController::class, 'index'])->middleware('session');

Route::post('/create-group',[GroupController::class, 'create'])->name('group.create');
Route::post('/join-group',[GroupController::class, 'join'])->name('group.join');
Route::get('/no-access', function(){
    return redirect('/login');
    // die();
});
Route::get('/logout', function(){
    session()->forget('user_id');
    return redirect()->back();
});

Route::get('/delete-group/{id}',[GroupController::class, 'delete'])->name('group.delete');
Route::get('/leave-group/{id}',[GroupController::class, 'leave'])->name('group.leave');

Route::get('/community/{id}',[ChatController::class, 'index'])->name('group.chat');
Route::post('/message-sent',[ChatController::class,'store'])->name('message.sent');
Route::get('/chat/{gid}',[ChatController::class, 'fetch'])->name('chat');