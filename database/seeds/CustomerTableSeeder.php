<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'code' => \Str::random(8),
            'first_name' => 'Kouadio',
            'last_name' => 'Ange',
            'email' => 'user@gmail.com',
            'country' => 'cote d\'ivoire',
            'city' => 'abidjan',
            'phone' => '68 35 73 97'
        ]);

        Customer::create([
            'code' => \Str::random(8),
            'first_name' => 'User 1',
            'last_name' => 'User1-user',
            'email' => 'user1@gmail.com',
            'country' => 'cote d\'ivoire',
            'city' => 'abidjan',
            'phone' => '68 35 73 97'
        ]);
    }
}
