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
        	'cpf' => '03180984236',
        	'celular' => '04196981276981',
        	'perfil' => 'Admin',
            'lvpermissao' => 'Admin',
        	'password' => Hash::make('kirito')
        ]);

        $user = User::create([
            'name' => 'João Victor Machado de Andrade',
            'email' => 'admin@gmail.com',
            'cpf' => '01098630203',
            'celular' => '096981259500',
            'perfil' => 'Admin',
            'lvpermissao' => 'Admin',
            'password' => Hash::make('admin')
        ]);

        $user = User::create([
            'name' => 'Kirigaya Kazuto',
            'email' => 'kirigaya@gmail.com',
            'cpf' => '00000000000',
            'celular' => '22222222222',
            'perfil' => 'Nutrição',
            'lvpermissao' => 'Coordenador',
            'password' => Hash::make('asuna1')
        ]);
    }
}
