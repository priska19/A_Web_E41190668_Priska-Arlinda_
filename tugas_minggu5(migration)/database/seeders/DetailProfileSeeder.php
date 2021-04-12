<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'noHp' => '081234567890',
            'ttl' => '2000-10-09',
            'foto' => 'pict.png'
        ]);
    }
}
