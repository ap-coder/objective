<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jobs')->delete();
        
        \DB::table('jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Web Developer',
                'created_at' => '2020-03-12 23:50:35',
                'updated_at' => '2020-03-12 23:50:35',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Designer',
                'created_at' => '2020-03-12 23:50:45',
                'updated_at' => '2020-03-12 23:50:45',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}