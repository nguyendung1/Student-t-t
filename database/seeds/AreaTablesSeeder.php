<?php

use Illuminate\Database\Seeder;

class AreaTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('country')->insert([
            ['Country'=>'Brazil']
           


        ]);
    }
}
