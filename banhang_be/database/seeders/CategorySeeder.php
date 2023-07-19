<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            'Trouser',
            'T-shirt',
            'Vest',
            'Sport Shoes',
            'Jewelry',
            'Hat',
            'Jacket',
            'Short'
        ];
        $categories = category::all()->count();
        if (!$categories) {
            foreach ($category as $value) {
                DB::table('categories')->insert(
                    ['name' => $value]
                );
            }
        }
    }
}
