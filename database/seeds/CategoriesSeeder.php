<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ["code" => "music", "description" => "music post"],
            ["code" => "photo", "description" => "photo post"],
            ["code" => "video", "description" => "video post"],
            ["code" => "text", "description" => "text post"],
        ];
        foreach ($categories as $category) {
            $newCat = new Category();
            $newCat->code = $category["code"];
            $newCat->description = $category["description"];
            $newCat->save();
        }
    }
}
