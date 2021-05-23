<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurante;
use Illuminate\Support\Facades\Hash;

class RestaurantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Restaurante::create([
            'name' => 'restaurante518',
            'password' => Hash::make('518restaurante')
        ]);
    }
}
