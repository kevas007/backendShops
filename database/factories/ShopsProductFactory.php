<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shops_Product>
 */
class ShopsProductFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $shop= Shop::inRandomOrder()->first();
        $product= Product::inRandomOrder()->first();
        return [
            'shop_id' => $shop->id,
            'product_id' => $product->id,
        ];
    }
}
