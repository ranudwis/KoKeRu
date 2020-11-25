<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporan';

    public function bukti()
    {
        return $this->hasMany(Bukti::class, 'id_laporan');
    }

    public function cs()
    {
        return $this->belongsTo(User::class);
    }
}
