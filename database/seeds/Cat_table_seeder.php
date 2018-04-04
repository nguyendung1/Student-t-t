<?php

use Illuminate\Database\Seeder;

class Cat_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('cats')->insert(
         	
        	[ 
        	[ 'name'=>'micle','date_of_birth'=>'2015-23-2'],
        		['name'=>'isme','date_of_birth'=>'2017-23-2'],
        		['name'=>'ShenLong','date_of_birth'=>'2017-23-2'],
        		['name'=>'Long','date_of_birth'=>'2015-23-2'],
        		['name'=>'merical','date_of_birth'=>'2012-23-2']
        	]);
    }
}

