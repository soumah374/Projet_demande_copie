<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
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

        Role::create([
            'name'=>'admin'
        ]);
        Role::create([
            'name'=>'pdg'
        ]);
        Role::create([
            'name'=>'demandeur'
        ]);
        Role::create([
            'name'=>'utilisateur'
        ]);
        Permission::create([
            'name'=>'createUser'
        ]);
        $user=User::create([
            'email'=>'admin@admin.com',
            'name'=>'admin',
            'prenom'=>'admin',
            'password'=>bcrypt(1234),
            'statuts'=>'1'
        ]);
        $users=User::create([
            'email'=>'condemohamedjean@gmail.com',
            'name'=>'Conde',
            'prenom'=>'Mohamed Jean',
            'password'=>bcrypt(1234),
        ]);
        $user->attachPermission('createUser');
        $user->attachRole('admin');
    }
}
