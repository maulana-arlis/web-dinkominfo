<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    protected $fillable = [
        'nama', 'alamat', 'telepon', 'email', 'informasi', 'tujuan', 'file'
    ];   
}