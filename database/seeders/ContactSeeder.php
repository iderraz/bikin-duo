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
                'icone' => 'bx bx-map',
                'titre' => 'Our Address',
                'contenu' => 'A108 Adam Street, New York, NY 535022'
            ],
            [
                'icone' => 'bx bx-envelope',
                'titre' => 'Email Us',
                'contenu' => 'info@example.com'
            ],
            [
                'icone' => 'bx bx-phone-call',
                'titre' => 'Call Us',
                'contenu' => '+1 5589 55488 55'
            ]
        ]);
    }
}
