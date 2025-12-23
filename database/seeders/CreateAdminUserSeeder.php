<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Str;

class CreateSuperAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'fullname' => 'SuperAdmin',
        	'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
        	'phone' => '9876543210',
        	'pwd' => '987654321',
        	'password' => bcrypt('987654321'),
            'remember_token' => Str::random(10),
        ]);
    }
}
