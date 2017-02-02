<?php

use Illuminate\Database\Seeder;

class TecnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tecno')->insert([
	            'nombre' => '2G',
	    ]);
        DB::table('tecno')->insert([
	            'nombre' => '3G',
	    ]);
        DB::table('tecno')->insert([
	            'nombre' => '4G',
	    ]);
    }
}
