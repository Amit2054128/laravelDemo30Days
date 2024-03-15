<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RtodoController;
use App\Http\Controllers\TodoController;
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

Route::get('/',[PageController::class,'index'])->name('home');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/services/post/blog',[PageController::class,'service'])->name('amit');

Route::resource('/home',HomeController::class)->name('any','home');


// Todo Routes


Route::get('/todo',[TodoController::class,'todo'])->name('todo');
Route::post('/todo',[TodoController::class,'addTodo'])->name('todo.post');
Route::get('/edit/{id}',[TodoController::class,'edit'])->name('todo.edit');
Route::post('/edit/{id}',[TodoController::class,'update'])->name('todo.update');
Route::get('/delete/{id}',[TodoController::class,'delete'])->name('delete');
Route::get('/change/status/{id}',[TodoController::class,'statusComelete'])->name('status.complete');
Route::get('/change/notcomplete/{id}',[TodoController::class,'notComplete'])->name('status.notcomplete');



// Resource Controller for CRUD operation

Route::resource('/crud',RtodoController::class)->name('any','crud');
Route::get('/crud/status',[RtodoController::class,'setstatus'])->name('setstatus');






// Route::get('/',function(){
//     return view('welcome');
// });
