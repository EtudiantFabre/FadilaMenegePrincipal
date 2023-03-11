<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RolesSeeder extends Seeder{
    public function run(){
        $roles = array('admin', 'client', 'agent_de_suivis', 'agent_de_marketing', 'comptable', 'secretaire', 'agent');
        foreach($roles as $role){
            Role::create(['name' => $role]);
        }
    }

}