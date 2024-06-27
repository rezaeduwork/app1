<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;
    protected $table = 'penilaian';
    protected $primaryKey = 'penilaian_id';
    public $timestamps = false;
    protected $keyType = 'integer';
    public function user() {
      return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function lamaran() {
      return $this->belongsTo('App\Models\LowonganPelamar', 'pelamar_id');
    }
}
