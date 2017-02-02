<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Clusters;

class EstacionesTableSeeder extends Seeder
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
        for ($i=0; $i < 200; $i++) { 
        	 DB::table('estaciones')->insert([
	            'nombre' => $faker -> word.$faker ->randomNumber($nbDigits = 3),
	            'cluster_id' => $faker -> randomElement($cluster),
	            'estado' => $faker -> state,
	            'ciudad' => $faker -> city,
	            'municipio' => $faker -> state,
	            'parroquia' => $faker -> state,
	            'direccion' => $faker -> streetAddress,
	            'longitud' => $faker -> latitude($min = -90, $max = 90),
	            'latitud' => $faker -> longitude($min = -180, $max = 180),
	            'estructura' => $faker -> randomElement($array = array ('Torre','Azotea','Monopolo')),
		        'region' => $faker -> randomElement($array = array ('Centro','Centro llanos')),
		        'altura' => $faker -> randomNumber($nbDigits = 2),
	            'pisos' => $faker -> randomNumber($nbDigits = 2),
	            'coubi_op' => $faker -> randomElement($array = array ('MOVISTA','MOVILNET')),
	            'coubi_acc' => $faker -> randomElement($array = array ('MOVISTA','MOVILNET','DIGITEL')),
	            'back2back' => $faker -> randomElement($array = array ('NO','SI')),
	            'vendor' => $faker -> randomElement($array = array ('ERICCSON','HUAWEI')),
	        ]);
        }
    }
}
