<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'nom' => "admin",
            'prenom' => "admin",
            "phone" => "68357397",
            'email' => 'admin@admin.com',
            'status' => 1,
            'password' => bcrypt('password')
        ]);
    }
}
