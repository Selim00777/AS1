<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'merc',
            'bmw',
            'kia',
            'toyota',
            'lamborgini',
            'bugatti',
            'lada',
            'vaz',
            'hyundai',
            'honda',
        ];

        foreach ($objs as $obj) {
            Category::create([
                'name' => $obj,
            ]);
        };
    }
}