<?php

namespace App\Livewire;

use Livewire\Component;

class PenilaianInput extends Component
{
  public $pelamar_id;
  public $kesehatan;
  public $pengalaman;
  public $pendidikan;
  public $sertifikat;

  public function store() {
    $penilaian = new \App\Models\Penilaian;
    $penilaian->kesehatan = $this->kesehatan;;
    $penilaian->pengalaman =   $this->pengalaman;
    $penilaian->pendidikan =   $this->pendidikan;
    $penilaian->sertifikat =   $this->sertifikat;
    $pelamar = \App\Models\LowonganPelamar::where('lowongan_user_id',$this->pelamar_id)->first();
    $penilaian->user_id = $pelamar->user_id;
    $penilaian->pelamar_id = $this->pelamar_id;
    $penilaian->save();
    $this->redirect(url('penilaian'));
    $this->dispatch('alert-success',message: 'Penilaian disimpan!');
  }
  public function render()
  {
    return view('livewire.penilaian-input');
  }
}
