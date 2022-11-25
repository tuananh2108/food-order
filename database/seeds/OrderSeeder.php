<?php

use Illuminate\Database\Seeder;
use App\models\order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(order::class, 100)->create();
    }
}
