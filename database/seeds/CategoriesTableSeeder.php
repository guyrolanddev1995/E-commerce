<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Root',
            'slug' => \Str::slug('name', '-'),
            'description' => 'This is the root category',
            'parent_id' => null,
            'menu' => 0
        ]);    

        for($i = 1; $i < 6; $i++){
            Category::create([
                'name' => 'Categorie'.$i,
                'description' => "description",
                'parent_id' => 1,
                'menu' => 1
            ]);  
        }
    }
}
