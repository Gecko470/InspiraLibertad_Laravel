<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Product::create([
            'id' => 1,
            'name' => 'Vivir desde la calma',
            'price' => 40,
            'url' => 'video/Ocean.mp4'
        ]);

        Product::create([
            'id' => 2,
            'name' => 'Prevención de recaidas en adicciones',
            'price' => 65,
            'url' => 'video/Coffee.mp4'
        ]);

        Product::create([
            'id' => 3,
            'name' => 'Uso, abuso o dependencia',
            'price' => 50,
            'url' => 'video/Forest.mp4'
        ]);
    }
}
