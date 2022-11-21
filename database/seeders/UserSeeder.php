<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Admin',
            'level' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(60),
        ]);
    }
}
