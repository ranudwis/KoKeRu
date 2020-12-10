<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;

    protected $table = 'ruang';

    public function laporan()
    {
        return $this->hasMany(Laporan::class, 'id_ruang');
    }

    public function cs()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getNamaCs()
    {
        return $this->cs->nama ?? '-';
    }

    public function getStatus() {
        return $this->report && $this->report->bukti->count() != 0;
    }

    public function getStatusString()
    {
        return $this->getStatus() ? 'Sudah' : 'Belum';
    }

    public function getReportAttribute()
    {
        return $this->laporan[0] ?? null;
    }
}
