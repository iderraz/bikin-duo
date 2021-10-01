<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            [
                'url' => 'portfolio-1.jpg',
                'description' => 'App 1'
            ],
            [
                'url' => 'portfolio-2.jpg',
                'description' => 'App 2'
            ],
            [
                'url' => 'portfolio-3.jpg',
                'description' => 'App 3'
            ],
            [
                'url' => 'portfolio-4.jpg',
                'description' => 'Web 1'
            ],
            [
                'url' => 'portfolio-5.jpg',
                'description' => 'Web 2'
            ],
            [
                'url' => 'portfolio-6.jpg',
                'description' => 'Web 3'
            ],
            [
                'url' => 'portfolio-7.jpg',
                'description' => 'Card 1'
            ],
            [
                'url' => 'portfolio-8.jpg',
                'description' => 'Card 2'
            ],
            [
                'url' => 'portfolio-9.jpg',
                'description' => 'Card 3'
            ],
        ]);
    }
}
