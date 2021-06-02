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
            'parent_id' => null,
            'menu' => 0
        ]);    
        
        // Category::create([
        //     'name' => 'Accessoires',
        //     'slug' => \Str::slug('name', '-'),
        //     'parent_id' => 1,
        //     'menu' => 1,
        //     'niveau' => 1,
        // ]);  

        // Category::create([
        //     'name' => 'Camera & Photo',
        //     'slug' => \Str::slug('name', '-'),
        //     'parent_id' => 1,
        //     'menu' => 1,
        //     'niveau' => 1,
        // ]);  

        // Category::create([
        //     'name' => 'Smart Electronic',
        //     'slug' => \Str::slug('name', '-'),
        //     'parent_id' => 1,
        //     'menu' => 1,
        //     'niveau' => 1,
        // ]);  

        // Category::create([
        //     'name' => 'Audio & Video',
        //     'slug' => \Str::slug('name', '-'),
        //     'parent_id' => 1,
        //     'menu' => 1,
        //     'niveau' => 1,
        // ]);
        
        // Category::create([
        //     'name' => 'Portable Audio & Video',
        //     'slug' => \Str::slug('name', '-'),
        //     'parent_id' => 1,
        //     'menu' => 1,
        //     'niveau' => 1,
        // ]);

        // Category::create([
        //     'name' => 'Video Game',
        //     'slug' => \Str::slug('name', '-'),
        //     'parent_id' => 1,
        //     'menu' => 1,
        //     'niveau' => 1,
        // ]);

        // Category::create([
        //     'name' => 'Televisions',
        //     'slug' => \Str::slug('name', '-'),
        //     'parent_id' => 1,
        //     'menu' => 1,
        //     'niveau' => 1,
        // ]);

        // Category::create([
        //     'name' => 'Projectors',
        //     'slug' => \Str::slug('name', '-'),
        //     'parent_id' => 1,
        //     'menu' => 1,
        //     'niveau' => 1,
        // ]);

        
        // Category::create([
        //     'name' => 'Smart Watches',
        //     'slug' => \Str::slug('name', '-'),
        //     'parent_id' => 1,
        //     'menu' => 1,
        //     'niveau' => 1,
        // ]);
        
    }
}
