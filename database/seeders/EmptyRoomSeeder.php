<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ruang;

class EmptyRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 30; $i++) {
            $ruang = new Ruang();
            $ruang->nama = 'Ruang Kosong ' . $i;
            $ruang->save();
        }
    }
}
