<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClustersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 15; $i++) { 
        	 DB::table('clusters')->insert([
	            'nombre' => $faker -> state,
	        ]);
        }
    }
}
