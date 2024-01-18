<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('tickets')->insert([
            [
                'date' => '2024-01-17 13:30:34',
                'price' => 3.45,
                'train_id' => 1,
                'ticket_type_id' => 1
            ],
            [
                'date' => '2024-01-17 17:36:58',
                'price' => 30.40,
                'train_id' => 2,
                'ticket_type_id' => 2
            ],
            [
                'date' => '2024-01-17 16:23:12',
                'price' => 9.85,
                'train_id' => 3,
                'ticket_type_id' => 3
            ]
        ]);
    }
}
