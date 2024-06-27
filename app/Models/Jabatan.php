<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
  use HasFactory;
  protected $table = 'jabatan';
  protected $primaryKey = 'jabatan_id';
  public $timestamps = false;
  protected $keyType = 'integer';
}
