<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            [
                'links' => 'Home',
                'services' => 'Web design'
            ],
            [
                'links' => 'About Us',
                'services' => 'Web Development'
            ],
            [
                'links' => 'Services',
                'services' => 'Product Management'
            ],
            [
                'links' => 'Terms of service',
                'services' => 'Marketing'
            ],
            [
                'links' => 'Privacy Policy',
                'services' => 'Graphic Design'
            ],
        ]);
    }
}
