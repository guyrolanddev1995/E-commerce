<?php

use App\Attribute;
use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attribute::create([
            'code'          =>  'taille',
            'name'          =>  'Taille',
        ]);

        // Create a color attribute
        Attribute::create([
            'code'          =>  'couleur',
            'name'          =>  'Couleur',
        ]);
    }
}
