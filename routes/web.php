<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ToDo;
use App\Livewire\AboutMe;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ToDo::class)->name('todo');
Route::get('/about-me', AboutMe::class)->name('about_me');
