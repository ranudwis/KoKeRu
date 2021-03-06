<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ManagerAccountSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ManagerAccountSeeder::class);
        $this->call(RuangSeeder::class);
        $this->call(EmptyRoomSeeder::class);
    }
}
