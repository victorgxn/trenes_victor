<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('trains')->insert([
            [
                'name' => 'Tren 1',
                'passengers' => 60,
                'year' => 2009,
                'train_type_id' => 2
            ],
            [
                'name' => 'Tren 2',
                'passengers' => 53,
                'year' => 2022,
                'train_type_id' => 3
            ],
            [
                'name' => 'Tren 3',
                'passengers' => 210,
                'year' => 2023,
                'train_type_id' => 1
            ]
        ]);
    }
}
