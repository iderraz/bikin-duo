<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            NavbarSeeder::class,
            Section2Seeder::class,
            AboutUsSeeder::class,
            FeatureSeeder::class,
            ServiceSeeder::class,
            PortfolioSeeder::class,
            TestimonialSeeder::class,
            TeamSeeder::class,
            ContactSeeder::class,
            FooterSeeder::class,
            FooterBottomSeeder::class,
            TitreSeeder::class,
            RoleSeeder::class,
            UserSeeder::class
        ]);
    }
}
