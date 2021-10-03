<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'contact' => '0123456789',
                'address' => 'Hà Nội',
                'role_id' => 1
            ],
            [
                'name' => 'guest',
                'email' => 'guest@gmail.com',
                'password' => bcrypt('123456'),
                'contact' => '0329561925',
                'address' => 'Hà Nội',
                'role_id' => 2
            ],
            [
                'name' => 'client',
                'email' => 'client@gmail.com',
                'password' => bcrypt('123456'),
                'contact' => '0329561925',
                'address' => 'Hà Nội',
                'role_id' => 2
            ],
        ];
        DB::table('users')->insert($data);
    }
}
