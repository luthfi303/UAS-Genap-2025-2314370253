<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::query()->delete();
        $categories = ['Modul', 'Desain', 'Buku'];

        foreach ($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}
