<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LowonganPelamar extends Model
{
    use HasFactory;
    protected $table = 'lowongan_pelamar';
    protected $primaryKey = 'lowongan_user_id';
    public $timestamps = false;
    protected $keyType = 'integer';
    public function file() {
      return $this->hasOne('App\Models\File', 'lamaran_id');
    }
    public function pelamar() {
      return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function lowongan() {
      return $this->belongsTo('App\Models\Lowongan', 'lowongan_id');
    }
    public function penilaian() {
      return $this->hasOne('App\Models\Penilaian', 'pelamar_id');
    }
}
