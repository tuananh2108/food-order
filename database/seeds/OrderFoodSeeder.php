<?php

use Illuminate\Database\Seeder;
use App\models\{food, order};

class OrderFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 100;

        for($i = 0; $i < $limit; $i++) {
            DB::table('order_food')->insert([
                'food_id' => food::all()->random()->id,
                'order_id' => order::all()->random()->id,
                'quantity' => $faker->numberBetween(0, 10),
            ]);
        }
    }
}
