<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // подключаем
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class NewSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            [
                'id' => '22',
                'text'  => Hash::make('12345'),
                'name' => Str::random(5) . '.' . Str::random(10) . 'СЛЫШ',
            ],
        ]);
    }
}
?>