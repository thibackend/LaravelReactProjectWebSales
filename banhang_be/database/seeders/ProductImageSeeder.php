<?php

namespace Database\Seeders;

use App\Models\product;
use App\Models\product_image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $products = product::pluck('id')->all();
        if (product_image::all()->count() === 0) :
            foreach ($products  as $id) :
                for ($i = 0; $i < 5; $i++) {
                    $productImage = new product_image();
                    $productImage->product_id = $id; // Generate product_id (e.g., use a random existing product ID or create new products and store their IDs)
                    $productImage->image_path = $faker->imageUrl();
                    $productImage->description = $faker->sentence;
                    $productImage->save();
                }
            endforeach;
        endif;
    }
}
