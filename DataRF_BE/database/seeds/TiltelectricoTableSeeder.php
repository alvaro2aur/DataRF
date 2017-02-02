<?php

use Illuminate\Database\Seeder;
use App\Celda;
use Faker\Factory as Faker;

class TiltelectricoTableSeeder extends Seeder
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
        	 DB::table('tiltelectico')->insert([
	            'valor' => $faker -> randomNumber($nbDigits = 1),
	            'celda_id' => $i,
	         ]);
        }
        for ($i=1; $i < 300; $i++) { 
        	 DB::table('tiltelectico')->insert([
	            'valor' => $faker -> randomNumber($nbDigits = 1),
	            'celda_id' => $faker -> randomElement($celda),
	         ]);
        }
        for ($i=1; $i < 100; $i++) { 
        	 DB::table('tiltelectico')->insert([
	            'valor' => $faker -> randomNumber($nbDigits = 1),
	            'celda_id' => $faker -> randomElement($celda),
	         ]);
        }
        //
    }
}
