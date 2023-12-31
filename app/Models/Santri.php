<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function santri_user()
    {
        return $this->belongsTo(User::class);
    }

    public function santri_izin()
    {
        return $this->hasMany(Izin::class);
    }
}
