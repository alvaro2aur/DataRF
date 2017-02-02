<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Clusters;
use App\Tecno;
use App\Subtecno;
use App\Controladora;
use App\Antenas;
use App\Estaciones;

class CeldaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $cluster = Clusters::pluck('id')->all();
        $tecno = Tecno::pluck('id')->all();
        $subtecno = Subtecno::pluck('id')->all();
        $controladora = Controladora::pluck('id')->all();
        $antenas = Antenas::pluck('id')->all();
        $estaciones = Estaciones::pluck('id')->all();
        for ($i=0; $i < 400; $i++) { 
	    	 DB::table('celda')->insert([
	            'nombre' => $faker -> word.$faker ->randomNumber($nbDigits = 6),
	            'cellid' => $faker -> randomNumber($nbDigits = 5),
	            'sector' => $faker -> numberBetween($min = 1, $max = 3),
	            'tecno_id' => $faker -> randomElement($tecno),
	            'controladora_id' => $faker -> randomElement($controladora),
	            'subtecno_id' => $faker -> randomElement($subtecno),
	            'lac' => $faker -> randomNumber($nbDigits = 6),
	            'rac' => $faker -> randomNumber($nbDigits = 2),
	            'ura' => $faker -> randomNumber($nbDigits = 2),
	            'psc' => $faker -> numberBetween($min = 1, $max = 512),
	            'uarfcnDl' => $faker -> randomElement($array = array ('3077','3050','3052')),
		        'uarfcnUl' => $faker -> randomElement($array = array ('2850','2853','2841')),
	            'ret' => $faker -> randomElement($array = array ('BCU','INTENO','N/A')),
	            'antenas_id' => $faker -> randomElement($antenas),
	            'estacion_id' => $faker -> randomElement($estaciones),
	        ]);
        }
        //
    }
}
