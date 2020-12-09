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
        for ($i = 0; $i < 5; $i++) {
            $ruang = new Ruang();
            $ruang->nama = 'Ruang F' . ($i + 1);
            $ruang->save();
        }
    }
}
