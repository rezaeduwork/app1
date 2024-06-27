<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Lamar extends Component
{
  use WithFileUploads;
  public $lowongan_id;
  public $surat_kesehatan;
  public $cv;
  public $ijazah;
  public $ktp;
  public $skck;
  public $sertifikasi;
  public function store() {
    if (in_array(null, [
      $this->lowongan_id,
      $this->surat_kesehatan,
      $this->cv,
      $this->ijazah,
      $this->ktp,
      $this->skck,
      $this->sertifikasi,
    ])) {
      $this->dispatch('alert-error',message: 'Semua berkas wajib dilengkapi!');
      return;
    }

    $lamaran = new \App\Models\LowonganPelamar;
    $lamaran->user_id = auth()->id();
    $lamaran->lowongan_id = $this->lowongan_id;
    $lamaran->save();

    $file = new \App\Models\File;
    $path = str_replace('public/','',$this->surat_kesehatan->store(path: 'public/'.auth()->id()));
    $file->surat_kesehatan = $path;
    $path = str_replace('public/','',$this->cv->store(path: 'public/'.auth()->id()));
    $file->cv = $path;
    $path = str_replace('public/','',$this->ijazah->store(path: 'public/'.auth()->id()));
    $file->ijazah = $path;
    $path = str_replace('public/','',$this->ktp->store(path: 'public/'.auth()->id()));
    $file->ktp = $path;
    $path = str_replace('public/','',$this->skck->store(path: 'public/'.auth()->id()));
    $file->skck = $path;
    $path = str_replace('public/','',$this->sertifikasi->store(path: 'public/'.auth()->id()));
    $file->sertifikasi = $path;
    $file->user_id = auth()->id();
    $file->lamaran_id = $lamaran->lowongan_user_id;
    $file->save();
    $this->dispatch('alert-success',message: 'Berhasil melamar!');
  }
  public function render()
  {
    return view('livewire.lamar');
  }
}
