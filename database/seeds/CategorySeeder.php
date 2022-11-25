<?php

use Illuminate\Database\Seeder;
use App\models\category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(category::class, 5)->create();
    }
}
