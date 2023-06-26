<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Izin extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'nama_santri',
        'kelas',
        'kelas_paralel',
        'nomor_sakan',
        'tanggal_keluar',
        'tanggal_masuk',
        'nama_penjemput',
        'hubungan_keluarga',
        'nomor_hp_penjemput',
        'keperluan',
        'status_izin'
    ];

    public function izin_user()
    {
        return $this->belongsTo(User::class);
    }

    public function izin_santri()
    {
        return $this->belongsTo(Santri::class);
    }

    public function izin_keperluan()
    {
        return $this->belongsTo(Keperluan::class);
    }
}
