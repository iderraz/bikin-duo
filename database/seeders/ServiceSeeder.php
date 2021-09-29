<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'emoji' => 'bx bxl-dribbble',
                'titre' => 'Lorem Ipsum',
                'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi'
            ],
            [
                'emoji' => 'bx bx-file',
                'titre' => 'Sed ut perspiciatis',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore'
            ],
            [
                'emoji' => 'bx bx-tachometer',
                'titre' => 'Magni Dolores',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia'
            ],
            [
                'emoji' => 'bx bx-layer',
                'titre' => 'Nemo Enim',
                'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis'
            ],
        ]);
    }
}
