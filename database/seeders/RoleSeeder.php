<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
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
            'name'=>'boursier'
        ]);
        
        Role::create([
            'name'=>'assistant'
        ]);
        $users=User::create([
            'email'=>'admin@gmail.com',
            'telephone'=>'620000000',
            'password'=>bcrypt(1234)
        ]);
        $users->attachRole('admin');
    }
}
