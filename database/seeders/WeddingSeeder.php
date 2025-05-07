<?php

namespace Database\Seeders;

use App\Models\Wedding;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeddingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wedding::create([
            'name'          => 'Chintya & Valupi',
            'note'          => 'A great marriage is not when the perfect couple comes together. \
            It is when an imperfect couple learns to enjoy their differences.',
            'status'        => 'Active',
            'hero1'         => 'back1.jpg',
            'hero2'         => 'back2.jpg',
            'hero3'         => 'back3.jpg',
            'created_at'    => now(),
            'updated_at'    => now()
        ]);
    }
}
