<?php

use Illuminate\Database\Seeder;
use App\Celda;
use Faker\Factory as Faker;

class AzimutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $celda = Celda::pluck('id')->all();
        $length = Celda::pluck('id')->count();
        $faker = Faker::create();
        for ($i=1; $i <= $length; $i++) { 
        	 DB::table('azimut')->insert([
	            'valor' => $faker -> numberBetween($min = 0, $max = 360),
	            'celda_id' => $i,
	         ]);
        }
        for ($i=1; $i < 100; $i++) { 
        	 DB::table('azimut')->insert([
	            'valor' => $faker -> numberBetween($min = 0, $max = 360),
	            'celda_id' => $faker -> randomElement($celda),
	         ]);
        }
        //
    }
}
