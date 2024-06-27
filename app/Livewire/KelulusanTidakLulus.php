<?php

namespace App\Livewire;

use Livewire\Component;

class KelulusanTidakLulus extends Component
{
  public $page = 0;
  public $limit = 10;
  public $search = '';
  public function paginate($type) {
    if ($type == 'minus') {
      if ($this->page > 0) {
        $this->page = $this->page - 1;
      }
    } else {
      $search = $this->search;
      $penilaians = \App\Models\Penilaian::when($this->search, function($query) use ($search) {
        $query->whereHas('user', function($query) use ($search) {
          $query->where('nama', 'like', '%'.$search.'%');
        });
      });
      $penilaians = $penilaians->orderBy('penilaian_id', 'desc')->limit($this->limit)->offset(($this->page + 1) * $this->limit)->get();
      if ($penilaians->count() > 0) {
        $this->page = $this->page + 1;
      }
    }
  }
  #[On('reload')]
  public function render()
  {
    $search = $this->search;
    $penilaians = \App\Models\Penilaian::when($this->search, function($query) use ($search) {
      $query->whereHas('user', function($query) use ($search) {
        $query->where('nama', 'like', '%'.$search.'%');
      });
    })->whereHas('lamaran', function($query) {
      $query->where('hasil_seleksi', 'tidak_lulus')->orWhereNull('hasil_seleksi');
    });
    $total = $this->limit;
    $penilaians = $penilaians->orderBy('penilaian_id', 'desc')
    ->limit($this->limit)->offset($this->page * $this->limit)
    ->get();
    return view('livewire.kelulusan-tidak-lulus', compact('penilaians', 'total'));
  }
}
