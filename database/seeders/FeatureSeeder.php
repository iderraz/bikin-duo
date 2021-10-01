<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            [
                'titre' => 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.',
                'description_1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'description_2' => ' Ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'url' => 'features-1.png'
            ],
            [
                'titre' => 'Corporis temporibus maiores provident',
                'description_1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'description_2' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'url' => 'features-2.png'
            ],
            [
                'titre' => '
                Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas',
                'description_1' => 'Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.',
                'description_2' => ' Ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'url' => 'features-3.png'
            ],
            [
                'titre' => 'Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in',
                'description_1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'description_2' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'url' => 'features-4.png'
            ],
            [
                'titre' => '',
                'description_1' => '',
                'description_2' => 'Duis aute irure dolor in reprehenderit in voluptate velit.',
                'url' => '/'
            ],
            [
                'titre' => '',
                'description_1' => '',
                'description_2' => 'Ullam est qui quos consequatur eos accusamus.
                ',
                'url' => '/'
            ],
            [
                'titre' => '',
                'description_1' => '',
                'description_2' => 'Duis aute irure dolor in reprehenderit in voluptate velit.',
                'url' => '/'
            ],
            [
                'titre' => '',
                'description_1' => '',
                'description_2' => 'Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.',
                'url' => '/'
            ],
        ]);
    }
}
