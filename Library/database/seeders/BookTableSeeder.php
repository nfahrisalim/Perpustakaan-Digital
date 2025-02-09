<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'id' => '1',
            'user_id' => '1',
            'judul' => 'Contoh buku',
            'slug' => 'contoh-buku',
            'cover' => 'cover1.png',
            'file' => '1.pdf',
            'ringkasan' => 'ini adalah ringkasan',
            'penulis' => 'nama penulis',
            'penerbit' => 'nama penerbit',
            'category_id' => '1',
            'jml_halaman' => '250',
            'is_verify' => '1',
        ]);
    }
}