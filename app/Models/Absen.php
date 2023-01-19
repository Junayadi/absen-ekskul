<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    protected $table = 'absens';
    protected $primarykey = 'id_absen';
    protected $fillable=[
        'nis','kodeEkskul','presensi', 'tglAbsen','fotoTimestamp'
    ];

    public function anggota()
    {
        return $this->belongsTo(AnggotaEksl::class);
    }
    public function ekskul()
    {
        return $this->belongsTo(Ekskul::class);
    }
}