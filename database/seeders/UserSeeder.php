<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'admin']);
        Permission::create(['name' => 'lecturer']);
        Permission::create(['name' => 'student']);
        Permission::create(['name' => 'hod']);

        Role::create(['name' => 'admin'])->givePermissionTo('admin');
        Role::create(['name' => 'lecturer'])->givePermissionTo('lecturer');
        Role::create(['name' => 'student'])->givePermissionTo('student');
        Role::create(['name' => 'hod'])->givePermissionTo('hod');

        $user = User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@local.com',
            'password' => bcrypt('12345678'),
        ]);
        
        $user->assignRole('admin');

        $user = User::create([
            'name' => 'Lecturer',
            'username' => 'lecturer',
            'email' => 'lecturer@local.com',
            'password' => bcrypt('12345678'),
        ]);
        
        $user->assignRole('lecturer');

        $user = User::create([
            'name' => 'Student',
            'username' => 'student',
            'email' => 'student@local.com',
            'password' => bcrypt('12345678'),
        ]);
        
        $user->assignRole('student');

        $user = User::create([
            'name' => 'Head Of Department',
            'username' => 'hod',
            'email' => 'hod@local.com',
            'password' => bcrypt('12345678'),
        ]);
        
        $user->assignRole('hod');
    }
}
