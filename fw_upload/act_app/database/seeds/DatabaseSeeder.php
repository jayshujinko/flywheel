<?php

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
        // $this->call(UserSeeder::class);

        //$this->call(RolesTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        //$this->call(MenuSeeder::class);
        //$this->call(PagesTableSeeder::class);
        $this->call(CategorySeeder::class);
    }
}
