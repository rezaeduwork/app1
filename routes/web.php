<?php

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

Route::get('/login', \App\Livewire\Login::class);
Route::get('/register', \App\Livewire\Register::class);

Route::middleware(['auth'])->group(function() {
  Route::get('/', \App\Livewire\Dashboard::class);
  Route::get('/dashboard', \App\Livewire\Dashboard::class);
  Route::get('/lamar', \App\Livewire\Lamar::class);
  Route::get('/lamaran', \App\Livewire\Lamaran::class);
  Route::get('/lamaran/input/{id}', \App\Livewire\LamaranNilai::class);
  Route::get('/penilaian', \App\Livewire\Penilaian::class);
  Route::get('/penilaian/input', \App\Livewire\PenilaianInput::class);
  Route::get('/penilaian/edit/{id}', \App\Livewire\PenilaianEdit::class);
  Route::get('/perangkingan', \App\Livewire\Perangkingan::class);
  Route::get('/kelulusan', \App\Livewire\Kelulusan::class);
  Route::get('/user', \App\Livewire\User::class);
  Route::get('/user/add', \App\Livewire\UserAdd::class);
  Route::get('/user/edit/{id}', \App\Livewire\UserEdit::class);
});
