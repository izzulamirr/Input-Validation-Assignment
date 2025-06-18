<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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

//Homepage
Route::get('/', function () {
    return view('welcome');
});

//register route
Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::post('register', [RegisterController::class, 'register']);


//Login route
Route::get('login', function () {
    return view('auth.login');
})->name('login');

route::post('login', [LoginController::class,])->name('login');


//Authentication routes
Auth::routes();

//Resource route for TodoController
Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
Route::post('/todo', [TodoController::class, 'store'])->name('todo.store');
Route::get('/todo/{todo}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::delete('/todo/{todo}', [TodoController::class, 'destroy'])->name('todo.destroy');
Route::put('/todo/{todo}', [TodoController::class, 'update'])->name('todo.update');
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');

//Route for home controller
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
