<?php

use Illuminate\Database\Seeder;
use App\Celda;
use Faker\Factory as Faker;

class TiltmecanicoTableSeeder extends Seeder
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
        	 DB::table('tiltmecanico')->insert([
	            'valor' => $faker -> randomNumber($nbDigits = 1),
	            'celda_id' => $i,
	         ]);
        }
        for ($i=1; $i < 200; $i++) { 
        	 DB::table('tiltmecanico')->insert([
	            'valor' => $faker -> randomNumber($nbDigits = 1),
	            'celda_id' => $faker -> randomElement($celda),
	         ]);
        }
        //
    }
}
