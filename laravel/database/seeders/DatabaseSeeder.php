<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // подключаем
use Database\Seeders\RandomSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RandomSeeder::class,
        ]);
    }
}

?>