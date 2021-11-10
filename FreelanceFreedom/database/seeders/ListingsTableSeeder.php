<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Listing;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Modifiy your count value here to increase/decrease amount of seeded entries to your database
        Listing::factory()->count(20)->create();
    }
}
