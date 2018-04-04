<?php

use Illuminate\Database\Seeder;

class TableBoxersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('boxers')->insert([
              ['name_boxer'=>'Gado','Gender'=>'male','id_country'=>1
                                          ]
        




        ]);
    }
}
