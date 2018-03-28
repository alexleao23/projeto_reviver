<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'Alexander Silva de Leão',
        	'email' => 'alexandersilvadeleao23@gmail.com',
        	'cpf' => '031.809.842-36',
        	'celular' => '04196981276981',
        	'perfil' => 'Administrador',
            'lvpermissao' => 'Administrador',
        	'password' => Hash::make('kirito')
        ]);

        $user = User::create([
            'name' => 'João Victor Machado de Andrade',
            'email' => 'admin@gmail.com',
            'cpf' => '010.986.302-03',
            'celular' => '096981259500',
            'perfil' => 'Administrador',
            'lvpermissao' => 'Administrador',
            'password' => Hash::make('admin')
        ]);

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'cpf' => '000.000.000-00',
            'celular' => '22222222222',
            'perfil' => 'Administrador',
            'lvpermissao' => 'Administrador',
            'password' => Hash::make('admin')
        ]);
    }
}
