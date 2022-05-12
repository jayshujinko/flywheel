<?php

use Illuminate\Database\Seeder;
use App\Page;
use App\Menu;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::truncate();

        //about
        Page::create([
            'title'=>'Financing Alliance Overview',
            'menu_id'=>Menu::where('title','about')->first()->id,
            'status'=>'1'
        ]);

        Page::create([
            'title'=>'Background',
            'menu_id'=>Menu::where('title','about')->first()->id,
            'status'=>'1'
        ]);

        Page::create([
            'title'=>'Partners',
            'menu_id'=>Menu::where('title','about')->first()->id,
            'status'=>'1'
        ]);

        Page::create([
            'title'=>'Management Team and Advisory Commitee',
            'menu_id'=>Menu::where('title','about')->first()->id,
            'status'=>'1'
        ]);

        Page::create([
            'title'=>'Contributors',
            'menu_id'=>Menu::where('title','about')->first()->id,
            'status'=>'1'
        ]);

        //work
        Page::create([
            'title'=>'Our Work',
            'menu_id'=>Menu::where('title','our work')->first()->id,
            'status'=>'1'
        ]);

        Page::create([
            'title'=>'Country Engagement',
            'menu_id'=>Menu::where('title','our work')->first()->id,
            'status'=>'1'
        ]);

        Page::create([
            'title'=>'Analytical Tools',
            'menu_id'=>Menu::where('title','our work')->first()->id,
            'status'=>'1'
        ]);

        Page::create([
            'title'=>'Financing Modalities',
            'menu_id'=>Menu::where('title','our work')->first()->id,
            'status'=>'1'
        ]);

        Page::create([
            'title'=>'Awareness And Education',
            'menu_id'=>Menu::where('title','our work')->first()->id,
            'status'=>'1'
        ]);

        Page::create([
            'title'=>'Events',
            'menu_id'=>Menu::where('title','our work')->first()->id,
            'status'=>'1'
        ]);


        //updates
        Page::create([
            'title'=>'In the news',
            'menu_id'=>Menu::where('title','updates')->first()->id,
            'status'=>'1'
        ]);

        Page::create([
            'title'=>'Blog',
            'menu_id'=>Menu::where('title','updates')->first()->id,
            'status'=>'1'
        ]);

    }
}
