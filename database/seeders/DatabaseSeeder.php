<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Role::create([
            'id_role' => 'R01',
            'role' => 'Admin'
        ]);

        Role::create([
            'id_role' => 'R02',
            'role' => 'Penjual'
        ]);

        Role::create([
            'id_role' => 'R03',
            'role' => 'Pemebli'
        ]);

        User::create([
            'user_id' => 'U0001',
            'id_role' => key,
            'nama' => 'Admin 01',
            'username' => 'umkm',
            'password' => bcrypt('umkm'),
            'email' => 'umkm@gmail.com',
            'telp' => '081335839415',
            'gender' => null,
            'address' => 'Jl. Raya Kedung Baruk No.98'
        ]);
    }
}
