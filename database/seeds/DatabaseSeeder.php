<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(QuestionSeed::class);
        $this->call(PageSeeder::class);
        $this->call(AdminSeed::class);
        $this->call(KecamatanSeed::class);
    }
}
