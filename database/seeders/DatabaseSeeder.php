<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    \App\Models\User::query()->delete();
    $user = new \App\Models\User;
    $user->nama = 'pelamar';
    $user->username = 'pelamar';
    $user->password = \Hash::make('pelamar');
    $user->level = 'pelamar';
    $user->save();

    $user = new \App\Models\User;
    $user->nama = 'hrd';
    $user->username = 'hrd';
    $user->password = \Hash::make('hrd');
    $user->level = 'hrd';
    $user->save();

    $user = new \App\Models\User;
    $user->nama = 'admin';
    $user->username = 'admin';
    $user->password = \Hash::make('admin');
    $user->level = 'admin';
    $user->save();

    // \App\Models\Jabatan::query()->delete();
    // $jabatan = new \App\Models\Jabatan;
    // $jabatan->nama = 'Satpam';
    // $jabatan->deskripsi = 'Satpam deksripsi';
    // $jabatan->save();

    \App\Models\Lowongan::query()->delete();
    $jabatan = new \App\Models\Lowongan;
    $jabatan->jabatan_id = 'Satpam';
    $jabatan->jumlah_penerima = 100;
    $jabatan->save();
  }
}
