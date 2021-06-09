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
                'address' => 'Thanh Hóa',
                'level' => 1
            ],
        ];
        DB::table('tbl_users')->insert($data);
    }
}
