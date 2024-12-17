<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            [
                'name' => 'admin',
                'email' => 'admin@prueba.com',
                'password' => bcrypt('admin'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Añade más registros según sea necesario
        ]);
    }
}
