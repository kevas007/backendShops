<?php

namespace Database\Seeders;

use App\Models\Avatar;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Shops_Product;
use App\Models\ShopsProduct;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Avatar::factory(10)->create();
        User::factory(10)->create();
        Shop::factory(10)->create();
        Product::factory(10)->create();
        ShopsProduct::factory(10)->create();
    }
}
