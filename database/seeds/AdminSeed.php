<?php

use Illuminate\Database\Seeder;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => "Admin",
            'email' => "admin@app.com",
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);
    }
}
