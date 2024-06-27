<?php

namespace App\Livewire;

use Livewire\Component;

class UserEdit extends Component
{
  public $user;
  public $nama;
  public $username;
  public $password;
  public $level;
  public function mount($id) {
    $this->user = \App\Models\User::find($id);
    $this->nama = $this->user->nama;
    $this->username = $this->user->username;
    $this->password = $this->user->password;
    $this->level = $this->user->level;
  }
  public function store() {
    if (!$this->nama) {
      $this->dispatch('alert-error', message: 'Nama tidak boleh kosong!');
      return;
    }
    if (!$this->username) {
      $this->dispatch('alert-error', message: 'username tidak boleh kosong!');
      return;
    } else {
      $user = \App\Models\User::whereUsername($this->username)->where('user_id', '<>', $this->user->user_id)->first();
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
    $this->user->nama = $this->nama;
    $this->user->username = $this->username;
    $this->user->password = \Hash::make($this->password);
    $this->user->level = $this->level;
    $this->user->save();

    $this->redirect('/user');
    $this->dispatch('alert-success',message: 'User diubah!');
  }
  public function render()
  {
    return view('livewire.user-edit');
  }
}
