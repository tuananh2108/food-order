<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name'=>'admin','uid'=>'ADMIN'],
            ['name'=>'client','uid'=>'CLIENT'],
            ['name'=>'guest','uid'=>'GUEST'],
        ]);
    }
}
