<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [["name" => "DEPORTE"], ["name" => "GASTRONOMIA"], ["name" => "MUSICA"], ["name" => "FARANDULA"], ["name" => "POLITICA"], ["name" => "OTROS"]];
        Category::insert($categories);

    }

}
