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
                'url' => '/',
                'nom' => 'Walter White',
                'fonction' => 'Chief Executive Officer',
                'icone' => 'bi bi-twitter'
            ],
            [
                'url' => '/',
                'nom' => 'Sarah Johnson',
                'fonction' => 'Product Manager',
                'icone' => 'bi bi-facebook'
            ],
            [
                'url' => '/',
                'nom' => 'William Anderson',
                'fonction' => 'CTO',
                'icone' => 'bi bi-instagram'
            ],
            [
                'url' => '/',
                'nom' => 'Amanda Jepson',
                'fonction' => 'Accountant',
                'icone' => 'bi bi-linkedin'
            ],
        ]);
    }
}
