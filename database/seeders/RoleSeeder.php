<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Genera role superadministrador
        Role::create([
            'name' => 'admin',
            'display_name' => 'Administrador',
        ]);

        // Genera role administrador
        Role::create([
            'name' => 'usuario',
            'display_name' => 'Usuario',
        ]);

    }
}
