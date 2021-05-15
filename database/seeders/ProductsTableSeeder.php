<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Alitas de pollo',
            'price' => 4.5,
            'category_id' => 1,
            'image_path' => 'alitas_de_pollo.png'
        ]);

        Product::create([
            'name' => 'Patatas fritas',
            'price' => 2.5,
            'category_id' => 1,
            'image_path' => 'patatas_fritas.png'
        ]);

        Product::create([
            'name' => 'Patatas con bacon',
            'price' => 4,
            'category_id' => 1,
            'image_path' => 'patatas_con_bacon.png'
        ]);

        Product::create([
            'name' => 'Nuggets de pollo',
            'price' => 4.5,
            'category_id' => 1,
            'image_path' => 'nuggets_de_pollo.png'
        ]);

        Product::create([
            'name' => 'Hamburguesa clásica',
            'price' => 6.5,
            'category_id' => 2,
            'image_path' => 'hamburguesa_clasica.png'
        ]);

        Product::create([
            'name' => 'Hamburguesa con huevo',
            'price' => 7.5,
            'category_id' => 2,
            'image_path' => 'hamburguesa_con_huevo.png'
        ]);

        Product::create([
            'name' => 'Hamburguesa con bacon y queso',
            'price' => 8,
            'category_id' => 2,
            'image_path' => 'hamburguesa_bacon_queso.png'
        ]);

        Product::create([
            'name' => 'Burrito clásico',
            'price' => 8,
            'category_id' => 2,
            'image_path' => 'burrito_clasico.png'
        ]);

        Product::create([
            'name' => 'Burrito picante',
            'price' => 8.5,
            'category_id' => 2,
            'image_path' => 'burrito_picante.png'
        ]);

        Product::create([
            'name' => 'Coca Cola',
            'price' => 2,
            'category_id' => 3,
            'image_path' => 'coca_cola.png'
        ]);

        Product::create([
            'name' => 'Fanta Naranja',
            'price' => 2,
            'category_id' => 3,
            'image_path' => 'fatna_naranja.png'
        ]);

        Product::create([
            'name' => 'Fanta Limón',
            'price' => 2,
            'category_id' => 3,
            'image_path' => 'fanta_limon.png'
        ]);

        Product::create([
            'name' => 'Agua',
            'price' => 1,
            'category_id' => 3,
            'image_path' => 'agua.png'
        ]);
    }
}
