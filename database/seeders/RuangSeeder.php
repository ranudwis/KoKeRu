<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ruang;
use App\Models\User;
use Faker\Factory;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tempRooms = [];
        $letter = 'A';
        $faker = Factory::create('id_ID');
        $substractor = 0;

        for ($i = 0; $i < 95; $i++) {
            $room = new Ruang();
            $room->nama = 'Ruang ' . $letter . ($i + 1 - $substractor);
            $room->save();

            $tempRooms[] = $room;

            if ($i != 0 && $i % 5 == 0) {
                $user = new User();
                $user->nama = $faker->name;
                $user->email = $faker->unique()->email;
                $user->password = '123456';
                $user->tipe_akun = 'cs';
                $user->save();

                foreach ($tempRooms as $tempRoom) {
                    $tempRoom->user_id = $user->id;
                    $tempRoom->save();
                }

                $tempRooms = [];
            }

            if ($i != 0 && ($i + 1) % 20 == 0) {
                $letter++;
                $substractor += 20;
            }
        }
    }
}
