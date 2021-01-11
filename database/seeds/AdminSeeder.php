<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Ahmed',
            'username' => 'ahmed',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'created_at' =>  '2020-11-18',
            'updated_at' => '2020-11-18',
        ]);
    }
}
