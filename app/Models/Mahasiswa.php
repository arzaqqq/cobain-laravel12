<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
     protected $fillable = [
        'nama', 'nim', 'semester', 'alamat', 'kelas_id'
    ];


    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
