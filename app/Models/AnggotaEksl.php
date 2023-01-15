<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaEksl extends Model
{
    use HasFactory;
    protected $table = 'anggota_eksls';
    protected $primarykey = 'nis';
    protected $fillable=[
        'nis','nama','kodeEkskul','kelas','jenis_kelamin'
    ];

    public function ekskul()
    {
        return $this->belongsTo(Ekskul::class);
    }
}