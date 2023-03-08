<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Apple Macbook Pro 16',
                'details' => 'Apple M1 Pro, 16 GPU, 16 GB, 512 GB SSD',
                'description' => 'Supercharged by M2 Pro or M2 Max, MacBook Pro takes its power and efficiency further than ever. It delivers exceptional performance whether it’s plugged in or not, and now has even longer battery life. Combined with a stunning Liquid Retina XDR display and all the ports you need — this is a pro laptop without equal.',
                'brand' => 'Apple',
                'price' => 2499,
                'shipping_cost' => 25,
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'Samsung Galaxy Book Pro',
                'details' => '13.3 inch, 8 GB, DDR4, SDRAM, 256 GB',
                'description' => 'PC power that’s smartphone thin. Our lightest Galaxy Book yet gives you a powerful Intel® 11th Gen Core™ processor, Intel® Evo™ certification, an advanced AMOLED screen and comes equipped with our latest wi-fi chip. Finish important projects, download huge files fast or watch movies in brilliant color. Discover the perfect mix of portability and productivity.',
                'brand' => 'Samsung',
                'price' => 1400,
                'shipping_cost' => 25,
                'image_path' => 'storage/product2.png'
            ],
        ];

        foreach($products as $key => $value){
            Product::create($value);
        }
    }
}
