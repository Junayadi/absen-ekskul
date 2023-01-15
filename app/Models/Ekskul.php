<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    use HasFactory;
    protected $table = 'ekskuls';
    protected $primarykey = 'kodeEkskul';
    protected $fillable=[
        'kodeEkskul','namaEkskul','jumlahAnggota','namaPembina','namaPelatih'
    ];

    public function anggota()
    {
        return $this->hasMany(AnggotaEksl::class);
    }
}
