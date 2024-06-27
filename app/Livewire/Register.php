<?php

namespace App\Livewire;

use Livewire\Component;

class Register extends Component
{
  public $nama;
  public $username;
  public $password;
  public $level;
  public function store() {
    if (!$this->nama) {
      $this->dispatch('alert-error', message: 'Nama tidak boleh kosong!');
      return;
    }
    if (!$this->username) {
      $this->dispatch('alert-error', message: 'username tidak boleh kosong!');
      return;
    } else {
      $user = \App\Models\User::whereUsername($this->username)->first();
      if($user) {
        $this->dispatch('alert-error', message: 'username sudah ada!');
        return;
      }
    }
    if (!$this->password) {
      $this->dispatch('alert-error', message: 'password tidak boleh kosong!');
      return;
    }
    if (!$this->level) {
      $this->dispatch('alert-error', message: 'level tidak boleh kosong!');
      return;
    }
    $user = new \App\Models\User;
    $user->nama = $this->nama;
    $user->username = $this->username;
    $user->password = \Hash::make($this->password);
    $user->level = $this->level;
    $user->save();

    auth()->login($user);
    $this->redirect('/dashboard');
  }
  public function render()
  {
    return view('livewire.register');
  }
}
