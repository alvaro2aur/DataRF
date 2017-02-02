<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AntenasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 20; $i++) { 
        	 DB::table('antenas')->insert([
	            'marca' => $faker -> company,
	            'modelo' => $faker -> randomNumber($nbDigits = 6),
	            'AV_900' => $faker -> randomNumber($nbDigits = 1),
	            'AH_900' => $faker -> randomNumber($nbDigits = 2),
	            'AV_1800' => $faker -> randomNumber($nbDigits = 1),
	            'AH_1800' => $faker -> randomNumber($nbDigits = 2),
	            'TE_900' => $faker -> randomNumber($nbDigits = 1),
	            'TE_1800' => $faker -> randomNumber($nbDigits = 1),
	            'GAN_900' => $faker -> randomNumber($nbDigits = 2),
	            'GAN_1800' => $faker -> randomNumber($nbDigits = 2),
		        'tipo' => $faker -> randomElement($array = array ('Dual-Band','Single-Band','Qual-pole')),
		        'bandas' => $faker -> randomElement($array = array ('900','1800','900-1800')),
	            
	        ]);
        }
    }
}
