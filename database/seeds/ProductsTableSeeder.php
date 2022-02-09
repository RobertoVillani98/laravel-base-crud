<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config("comics");

        foreach ($products as $product) {
            $newProduct = new Product();
            $newProduct->title = $product["title"];
            $newProduct->description = $product["description"];
            $newProduct->image = $product["thumb"];
            $newProduct->price = $product["price"];
            $newProduct->series = $product["series"];
            $newProduct->sale_date = $product["sale_date"];
            $newProduct->type = $product["type"];
            $newProduct->save();
        }
    }
}
