<?php

namespace App\Livewire;

use Livewire\Component;

class User extends Component
{
  public $page = 0;
  public $limit = 10;
  public $search = '';
  public function delete($id) {
    \App\Models\User::where('user_id', $id)->delete();
    $this->dispatch('alert-success',message: 'User dihapus!');
    $this->dispatch('reload')->self();
  }
  public function paginate($type) {
    if ($type == 'minus') {
      if ($this->page > 0) {
        $this->page = $this->page - 1;
      }
    } else {
      $search = $this->search;
      $penilaians = \App\Models\User::when($this->search, function($query) use ($search) {
        $query->where('nama', 'like', '%'.$search.'%');
      });
      $penilaians = $penilaians->orderBy('user_id', 'desc')->limit($this->limit)->offset(($this->page + 1) * $this->limit)->get();
      if ($penilaians->count() > 0) {
        $this->page = $this->page + 1;
      }
    }
  }
  #[On('reload')]
  public function render()
  {
    $search = $this->search;
    $penilaians = \App\Models\User::when($this->search, function($query) use ($search) {
      $query->where('nama', 'like', '%'.$search.'%');
    });
    $total = $this->limit;
    $penilaians = $penilaians->orderBy('user_id', 'desc')
    ->limit($this->limit)->offset($this->page * $this->limit)->get();
    return view('livewire.user', compact('penilaians', 'total'));
  }
}
