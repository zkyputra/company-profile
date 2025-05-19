<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table="pegawai";
    protected $guarded = [];
    protected $primaryKey = 'nip';
    public $incerementing = false;
}
