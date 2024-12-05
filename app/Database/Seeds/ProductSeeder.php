<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;




class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();


        for ($i = 0; $i < 15; $i++) {
            $products = [
                'products_name'      => $faker->word(),
                'products_image'     => $faker->imageUrl(640, 480, 'products', true, 'Faker'),
                'product_quantity'   => $faker->numberBetween(1, 100),
            ];

            // Insertion des données dans la table 'products'
            $this->db->table('products')->insert($products);
        }
    }
}
