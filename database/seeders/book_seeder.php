<?php

namespace Database\Seeders;

use App\Models\book_models;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class book_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        book_models::factory(10)->create();
    }
}
