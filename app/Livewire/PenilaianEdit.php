<?php

namespace App\Livewire;

use Livewire\Component;

class PenilaianEdit extends Component
{
  public $penilaian;
  public $pelamar_id;
  public $kesehatan;
  public $pengalaman;
  public $pendidikan;
  public $sertifikat;
  public function mount($id) {
    $this->penilaian = \App\Models\Penilaian::where('penilaian_id', $id)->firstOrFail();
    $this->kesehatan =   $this->penilaian->kesehatan;
    $this->pengalaman =   $this->penilaian->pengalaman;
    $this->pendidikan =   $this->penilaian->pendidikan;
    $this->sertifikat =   $this->penilaian->sertifikat;
  }
  public function store() {
    $penilaian = \App\Models\Penilaian::where('penilaian_id', $this->penilaian->penilaian_id)->firstOrFail();
    $penilaian->kesehatan = $this->kesehatan;;
    $penilaian->pengalaman =   $this->pengalaman;
    $penilaian->pendidikan =   $this->pendidikan;
    $penilaian->sertifikat =   $this->sertifikat;
    $penilaian->save();
    $this->redirect(url('penilaian'));
    $this->dispatch('alert-success',message: 'Penilaian disimpan!');
  }
  public function render()
  {
    return view('livewire.penilaian-edit');
  }
}
