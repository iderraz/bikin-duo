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
                'url' => '/',
                'description' => 'App 1'
            ],
            [
                'url' => '/',
                'description' => 'App 2'
            ],
            [
                'url' => '/',
                'description' => 'App 3'
            ],
            [
                'url' => '/',
                'description' => 'Web 1'
            ],
            [
                'url' => '/',
                'description' => 'Web 2'
            ],
            [
                'url' => '/',
                'description' => 'Web 3'
            ],
            [
                'url' => '/',
                'description' => 'Card 1'
            ],
            [
                'url' => '/',
                'description' => 'Card 2'
            ],
            [
                'url' => '/',
                'description' => 'Card 3'
            ],
        ]);
    }
}
