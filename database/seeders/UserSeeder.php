<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = User::create([
            'name'      => 'Valupi',
            'email'     => 'valupi@gmail.com',
            'password'  => bcrypt('valupi'),
            'email_verified_at' => now()
        ]);

        $superadmin->assignRole('Super admin');

        $superadmin = User::create([
            'name'      => 'Admin',
            'email'     => 'admin@codelogy.dev',
            'password'  => bcrypt('123qweasd'),
            'email_verified_at' => now()
        ]);

        $superadmin->assignRole('Super admin');
    }
}
