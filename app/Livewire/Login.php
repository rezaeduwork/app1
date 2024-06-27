<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class Login extends Component
{
  public $username;
  public $password;
  public function submit() {
    $credentials = [
      'username' => $this->username,
      'password' => $this->password,
    ];

    if (auth()->attempt($credentials)) {
      session()->regenerate();

      $this->dispatch('alert-success',message: 'Login berhasil!');
      $this->redirect('dashboard');
      return;
    }

    $this->dispatch('alert-error',message: 'Username / Password salah');
  }
  public function render()
  {
    return view('livewire.login');
  }
}
