<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            [
                'contenu' => 'Home'
            ],
            [
                'contenu' => 'About'
            ],
            [
                'contenu' => 'Services'
            ],
            [
                'contenu' => 'Portfolio'
            ],
            [
                'contenu' => 'Team'
            ],
            [
                'contenu' => 'Contact'
            ],
            [
                'contenu' => 'Get Started'
            ],
        ]);
    }
}
