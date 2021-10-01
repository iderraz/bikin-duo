<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'url' => 'team-1.jpg',
                'nom' => 'Walter White',
                'fonction' => 'Chief Executive Officer',
                'icone' => 'bi bi-twitter'
            ],
            [
                'url' => 'team-2.jpg',
                'nom' => 'Sarah Johnson',
                'fonction' => 'Product Manager',
                'icone' => 'bi bi-facebook'
            ],
            [
                'url' => 'team-3.jpg',
                'nom' => 'William Anderson',
                'fonction' => 'CTO',
                'icone' => 'bi bi-instagram'
            ],
            [
                'url' => 'team-4.jpg',
                'nom' => 'Amanda Jepson',
                'fonction' => 'Accountant',
                'icone' => 'bi bi-linkedin'
            ],
        ]);
    }
}
