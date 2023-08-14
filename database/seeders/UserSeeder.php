<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'super',
                'last_name' => 'admin',
                'email' => 'superadmin@tmaken.com',
                'password' => Hash::make(123456),
                'phone' => '123456789',
                'status' => 1,
                'is_admin' => 1,
            ],
        ]);
    }
}
