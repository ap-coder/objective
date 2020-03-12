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
                'job_title' => 'Web Developer',
                'created_at' => '2020-03-02 22:53:32',
                'updated_at' => '2020-03-02 22:53:32',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'job_title' => 'Designer',
                'created_at' => '2020-03-02 22:53:40',
                'updated_at' => '2020-03-02 22:53:40',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}