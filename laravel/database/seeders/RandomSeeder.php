<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // подключаем
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RandomSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            [
                'id' => '2',
                'text'  => Str::random(10),
                'name' => Str::random(10),
            ],
        ]);
    }
}
?>