<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        Category::create([
            'title'=>'Category 1',
            'status'=>'1'
        ]);

        Category::create([
            'title'=>'Category 2',
            'status'=>'1'
        ]);

        Category::create([
            'title'=>'Category 3',
            'status'=>'1'
        ]);

    }
}
