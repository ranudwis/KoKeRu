<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;

    protected $table = 'ruang';

<<<<<<< HEAD
    public function laporan()
    {
        return $this->hasMany(Laporan::class, 'id_ruang');
    }

=======
>>>>>>> 64a99aced304edbd20140a2b0f814153128437c5
    public function cs()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
