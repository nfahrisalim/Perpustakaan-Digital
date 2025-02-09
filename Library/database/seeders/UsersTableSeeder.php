<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Yuda Muhtar',
            'email' => 'yuda@gmail.com',
            'role_id' => '1',
            'umur' => '24',
            'password' => bcrypt('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Anggota1',
            'email' => 'anggota@gmail.com',
            'role_id' => '2',
            'jk' => 'L',
            'umur' => '20',
            'password' => bcrypt('12345678'),
        ]);
    }
}
