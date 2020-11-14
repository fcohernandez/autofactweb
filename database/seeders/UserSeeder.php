<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Agregamos usuario administrador
        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@autofact.cl';
        $user->password = Hash::make('12345678');

        $user->save();
        $user->attachRole('admin');
    }
}
