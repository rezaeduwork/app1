<?php

namespace App\Livewire;

use Livewire\Component;

class LamaranNilai extends Component
{
  public $lamaran;
  public $skor;
  public function mount($id) {
    $this->lamaran = \App\Models\LowonganPelamar::where('lowongan_user_id', $id)->firstOrFail();
    $this->skor = $this->lamaran->skor;
  }
  public function store() {
    $this->lamaran->skor = $this->skor;
    $this->lamaran->save();
    $this->redirect(url('lamaran'));
    $this->dispatch('alert-success',message: 'Nilai disimpan!');
  }
  public function render()
  {
    return view('livewire.lamaran-nilai');
  }
}
