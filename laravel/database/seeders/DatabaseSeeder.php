<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // подключаем
use Database\Seeders\RandomSeeder;
use Database\Seeders\NewSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            NewSeeder::class,
        ]);
    }
}

?>