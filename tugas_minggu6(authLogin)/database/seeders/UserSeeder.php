<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;

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
          'name' => 'Priska Arlinda',
          'username' => 'priska@gmail.com',
          'email'  => 'priska@gmail.com',
          'password' => Hash::make('12345678'),
          'role' => 'admin',
          'created_at' => \Carbon\Carbon::now(),
          'email_verified_at' => \Carbon\Carbon::now(),
        ]);
    }
}
