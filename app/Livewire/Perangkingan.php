<?php

namespace App\Livewire;

use Livewire\Component;

class Perangkingan extends Component
{
  public $page = 0;
  public $limit = 10;
  public $search = '';
  public function lulus($id) {
    $penilaian = \App\Models\Penilaian::where('penilaian_id', $id)->first();
    if (!$penilaian) {
      $this->dispatch('alert-error',message: 'ID Penilaian tidak ada!');
      return;
    }
    $lamaran = $penilaian->lamaran;
    $lamaran->hasil_seleksi = 'lulus';
    $lamaran->save();
    // $this->dispatch('alert-success',message: $id);
    $this->redirect(url('kelulusan'));
    $this->dispatch('alert-success',message: 'Pelamar berhasil diluluskan!');
  }
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
    });
    $total = $this->limit;
    $penilaians = $penilaians->orderByRaw('kesehatan DESC, pengalaman DESC, pendidikan DESC, sertifikat DESC')
    ->limit($this->limit)->offset($this->page * $this->limit)->get();
    return view('livewire.perangkingan', compact('penilaians', 'total'));
  }
}
