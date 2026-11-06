<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan@gmail.com',
                'phone' => '09171234567',
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@gmail.com',
                'phone' => '09181234567',
            ],
            [
                'full_name' => 'Pedro Reyes',
                'email' => 'pedro@gmail.com',
                'phone' => '09191234567',
            ],
            [
                'full_name' => 'Ana Garcia',
                'email' => 'ana@gmail.com',
                'phone' => '09201234567',
            ],
            [
                'full_name' => 'Carlos Mendoza',
                'email' => 'carlos@gmail.com',
                'phone' => '09211234567',
            ],
        ]);

        DB::table('users')->insert([
            [
                'username' => 'admin',
                'full_name' => 'Administrator',
            ],
            [
                'username' => 'jdelacruz',
                'full_name' => 'Juan Dela Cruz',
            ],
            [
                'username' => 'msantos',
                'full_name' => 'Maria Santos',
            ],
            [
                'username' => 'preyes',
                'full_name' => 'Pedro Reyes',
            ],
            [
                'username' => 'agarcia',
                'full_name' => 'Ana Garcia',
            ],
        ]);
    }
}
