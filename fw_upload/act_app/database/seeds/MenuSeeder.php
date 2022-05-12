<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Menu::truncate();

        Menu::create([
            'title'=>'your industry',
            'menu_link'=>'your-industry',
            'status'=>'1'
        ]);

        Menu::create([
            'title'=>'solutions',
            'menu_link'=>'solutions',
            'status'=>'1'
        ]);

        Menu::create([
            'title'=>'insights',
            'menu_link'=>'insights',
            'status'=>'1'
        ]);

        Menu::create([
            'title'=>'about us',
            'menu_link'=>'about-us',
            'status'=>'1'
        ]);

        Menu::create([
            'title'=>'contact us',
            'menu_link'=>'contact-us',
            'status'=>'1'
        ]);

    }
}
