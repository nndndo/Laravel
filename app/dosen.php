<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosen';
    protected $fillabel = ['nama','nip','alamat','pengguna_id'];
    protected $guarded = ['id'];
}