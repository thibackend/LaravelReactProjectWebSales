<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        if (product::all()->count() === 0) :
            foreach (category::pluck('id')->all() as $cateID) :
                for ($i = 0; $i < 5; $i++) {
                    $product = new product();
                    $product->category_id = $cateID; // Generate category_id (e.g., use a random existing category ID or create new categories and store their IDs)
                    $product->name = $faker->word;
                    $product->price = $faker->randomNumber(2); // Assuming you want a random price with 2 digits
                    $product->description = $faker->paragraph;
                    $product->quantity = $faker->numberBetween(1, 100);
                    $product->status = true;
                    $product->save();
                }
            endforeach;
        endif;
    }
}
