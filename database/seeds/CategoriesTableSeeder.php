<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ["Multimédia", "multimedia", "multimedia.jpg"],
            ["Art", "art", "art.jpg"],
            ["Sport", "sport", "sport.jpg"],
            ["Fabrication", "making", "making.jpg"],
            ["Esthétique", "beauty", "beauty.jpg"],
            ["Humour", "humor", "humor.jpg"],
            ["Cuisine", "food", "food.jpg"],
            ["Informatique", "informatic", "informatic.jpg"],
        ];

        foreach($categories as $category){
            DB::table('categories')->insert([
                'title' => $category[0],
                'slug' => $category[1],
                'image' => $category[2],
            ]);
        }
    }
}
