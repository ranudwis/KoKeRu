<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class ManagerAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->nama = 'Manager';
        $user->email = 'manager@kokeru.id';
        $user->password = 'manager';
        $user->tipe_akun = 'manager';

        $user->save();
    }
}
