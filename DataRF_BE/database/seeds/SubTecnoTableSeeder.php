<?php

use Illuminate\Database\Seeder;

class SubTecnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subtecno')->insert([
	            'nombre' => 'GSM900',
	            'tecno_id' => '1'
	    ]);
        DB::table('subtecno')->insert([
	            'nombre' => 'DSC1800',
	            'tecno_id' => '1'
	    ]);
        DB::table('subtecno')->insert([
	            'nombre' => 'F1',
	            'tecno_id' => '2'
	    ]);
        DB::table('subtecno')->insert([
	            'nombre' => 'F2',
	            'tecno_id' => '2'
	    ]);
        //
    }
}
