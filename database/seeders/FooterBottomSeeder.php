<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterBottomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footer_bottoms')->insert([
            [
                'titre' => '© Copyright Bikin. All Rights Reserved
                Designed by BootstrapMade',
                'icone' => 'bx bxl-twitter'
            ],
            [
                'titre' => '',
                'icone' => 'bx bxl-facebook'
            ],
            [
                'titre' => '',
                'icone' => 'bx bxl-instagram'
            ],
            [
                'titre' => '',
                'icone' => 'bx bxl-skype'
            ],
            [
                'titre' => '',
                'icone' => 'bx bxl-linkedin'
            ],
        ]);
    }
}
