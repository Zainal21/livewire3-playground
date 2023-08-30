<?php

use App\Livewire\Post;
use App\Livewire\UserList;
use App\Livewire\UserCreate;
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

Route::get('/', UserList::class)->name('home');
Route::get('/user-create', UserCreate::class)->name('users.create');

// volt
Route::get('/post', Post::class)->name('post');

