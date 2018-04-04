<?php

use Illuminate\Database\Seeder;

class breee_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('breeds')->insert(

        	[ 
        		[ 'name_breed'=>'micle'],
        		['name_breed'=>'isme'],
        		['name_breed'=>'ShenLong'],
        		['name_breed'=>'Long'],
        		['name_breed'=>'merical']
        			


        	]);
    }
}
