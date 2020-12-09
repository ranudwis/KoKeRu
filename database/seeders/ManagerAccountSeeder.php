<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory;

class ManagerAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');

        if (User::where('email', 'manager@kokeru.id')->get()->isEmpty()) {
            $user = new User();
            $user->nama = $faker->name;
            $user->email = 'manager@kokeru.id';
            $user->password = 'manager';
            $user->tipe_akun = 'manager';

            $user->save();
        }
    }
}
