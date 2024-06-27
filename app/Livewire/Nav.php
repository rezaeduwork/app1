<?php

namespace App\Livewire;

use Livewire\Component;

class Nav extends Component
{
  public function logout() {
    auth()->logout();
    $this->redirect('/');
  }
  public function render()
  {
    return view('livewire.nav');
  }
}
