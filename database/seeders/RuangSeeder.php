<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ruang;
use App\Models\User;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 30; $i++) {
            $user = new User();
            $user->nama = 'Cleaning Service ' . ($i + 1);
            $user->email = 'cs' . $i . '@kokeru.id';
            $user->password = 'cs' . $i;
            $user->tipe_akun = 'cs';
            $user->save();

            $room = new Ruang();
            $room->nama = 'Ruang ' . $i;

            $user->ruang()->save($room);
        }
    }
}
