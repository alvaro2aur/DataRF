<?php

use Illuminate\Database\Seeder;

class ControladoraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('controladora')->insert([
	            'nombre' => 'BSC06',
	            'tecno_id' => '1'
	    ]);
        DB::table('controladora')->insert([
	            'nombre' => 'BSC05',
	            'tecno_id' => '1'
	    ]);
        DB::table('controladora')->insert([
	            'nombre' => 'BSC12',
	            'tecno_id' => '1'
	    ]);
        DB::table('controladora')->insert([
	            'nombre' => 'BNC06',
	            'tecno_id' => '2'
	    ]);
        DB::table('controladora')->insert([
	            'nombre' => 'BNC05',
	            'tecno_id' => '2'
	    ]);
        DB::table('controladora')->insert([
	            'nombre' => 'BNC12',
	            'tecno_id' => '2'
	    ]);
        DB::table('controladora')->insert([
	            'nombre' => 'MME',
	            'tecno_id' => '3'
	    ]);
        //
    }
}
