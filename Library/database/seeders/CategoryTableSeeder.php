<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['id' => '1', 'name' => 'E-book', 'slug' => 'ebook', 'photo' => 'c1.png'],
            ['id' => '2', 'name' => 'Novel', 'slug' => 'novel', 'photo' => 'c2.jpg'],
            ['id' => '3', 'name' => 'Komputer', 'slug' => 'komputer', 'photo' => 'c3.jpg'],
            ['id' => '4', 'name' => 'Kamus', 'slug' => 'kamus', 'photo' => 'c4.png'],
            ['id' => '5', 'name' => 'Cooking', 'slug' => 'cooking', 'photo' => 'c5.jpg'],
            ['id' => '6', 'name' => 'Jurnal', 'slug' => 'jurnal', 'photo' => 'c6.png'],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->updateOrInsert(
                ['id' => $category['id']], // Kondisi untuk mencari data
                $category // Data yang akan dimasukkan jika tidak ada atau diperbarui
            );
        }
    }
}
