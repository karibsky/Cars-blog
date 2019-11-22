<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];

        $categoryName = 'Без категории';
        $categories[] = [
            'title' => $categoryName,
            'slug' => str_slug($categoryName),
            'parent_id' => 0
        ];
        for($i = 1; $i <= 10; $i++) {
            $categoryName = "Категория ".$i;
            $randomId = ($i > 4) ? rand(1,4) : 1;

            $categories[] = [
                'title' => $categoryName,
                'slug' => str_slug($categoryName),
                'parent_id' => 0
            ];
        }
        DB::Table('blog_categories')->insert($categories);
    }
}
