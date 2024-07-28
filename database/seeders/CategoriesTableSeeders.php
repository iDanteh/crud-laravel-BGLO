<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category1 = new Category;
        $category1->name = 'Deportes';
        $category1->description = 'juegos deportivos';
        $category1->active = true;
        $category1->save();
    }
}
