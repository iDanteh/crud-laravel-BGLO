<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Category;
        $category->name = "Deportes";
        $category->description = "Juegos de Deportes";
        $category->active = true;
        $category->save();

        $category2 = new Category;
        $category2->name = "Shooters";
        $category2->description = "Juegos de Shooters";
        $category2->active = true;
        $category2->save();

        $category3 = new Category;
        $category3->name = "Aventuras";
        $category3->description = "Juegos de aventura";
        $category3->active = true;
        $category3->save();

        $category4 = new Category;
        $category4->name = "Puzzles";
        $category4->description = "Juegos de puzzles";
        $category4->active = true;
        $category4->save();
    }
}
