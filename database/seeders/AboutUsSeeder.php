<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_us')->insert([
            [
                'emoji' => 'bx bx-receipt',
                'titre' => 'Corporis voluptates sit',
                'description' => 'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip'
            ],
            [
                'emoji' => 'bx bx-cube-alt',
                'titre' => 'Labore consequatur',
                'description' => 'Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere'
            ],
            [
                'emoji' => 'bx bx-images',
                'titre' => 'Ullamco laboris nisi',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt'
            ],
            [
                'emoji' => 'bx bx-shield',
                'titre' => 'Beatae veritatis',
                'description' => 'Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta'
            ],
        ]);
    }
}
