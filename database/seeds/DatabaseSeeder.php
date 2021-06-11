<?php

use App\Adherant;
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
        // $this->call(AdminTableSeeder::class);
        // $this->call(SettingsTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        // $this->call(ProductSeeder::class);
        $this->call(CarouselSeeder::class);
    }
}
