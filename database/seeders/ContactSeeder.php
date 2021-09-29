<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'icone' => '',
                'titre' => 'Our Address',
                'contenu' => 'A108 Adam Street, New York, NY 535022'
            ],
            [
                'icone' => '',
                'titre' => 'Email Us',
                'contenu' => 'info@example.com'
            ],
            [
                'icone' => '',
                'titre' => 'Call Us',
                'contenu' => '+1 5589 55488 55'
            ]
        ]);
    }
}
