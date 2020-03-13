<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('skills')->delete();
        
        \DB::table('skills')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Java',
                'created_at' => '2020-03-12 23:50:03',
                'updated_at' => '2020-03-13 00:20:04',
                'deleted_at' => NULL,
                'applicant_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'C',
                'created_at' => '2020-03-13 00:20:42',
                'updated_at' => '2020-03-13 00:20:42',
                'deleted_at' => NULL,
                'applicant_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'C++',
                'created_at' => '2020-03-13 00:20:55',
                'updated_at' => '2020-03-13 00:20:55',
                'deleted_at' => NULL,
                'applicant_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Javascript',
                'created_at' => '2014-01-08 17:13:29',
                'updated_at' => '2014-01-08 17:13:29',
                'deleted_at' => NULL,
                'applicant_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'C',
                'created_at' => '2014-01-08 17:13:29',
                'updated_at' => '2014-01-08 17:13:29',
                'deleted_at' => NULL,
                'applicant_id' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'PHP',
                'created_at' => '2014-01-08 17:13:29',
                'updated_at' => '2014-01-08 17:13:29',
                'deleted_at' => NULL,
                'applicant_id' => 3,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'C',
                'created_at' => '2014-01-08 17:13:29',
                'updated_at' => '2014-01-08 17:13:29',
                'deleted_at' => NULL,
                'applicant_id' => 4,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Python',
                'created_at' => '2014-01-08 17:13:29',
                'updated_at' => '2014-01-08 17:13:29',
                'deleted_at' => NULL,
                'applicant_id' => 4,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'HTML',
                'created_at' => '2014-01-08 17:13:29',
                'updated_at' => '2014-01-08 17:13:29',
                'deleted_at' => NULL,
                'applicant_id' => 4,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Fireworks',
                'created_at' => '2014-01-08 17:13:29',
                'updated_at' => '2014-01-08 17:13:29',
                'deleted_at' => NULL,
                'applicant_id' => 5,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Fireworks',
                'created_at' => '2014-01-08 17:13:29',
                'updated_at' => '2014-01-08 17:13:29',
                'deleted_at' => NULL,
                'applicant_id' => 6,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Illustrator',
                'created_at' => '2014-01-08 17:13:29',
                'updated_at' => '2014-01-08 17:13:29',
                'deleted_at' => NULL,
                'applicant_id' => 7,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Fireworks',
                'created_at' => '2014-01-08 17:13:29',
                'updated_at' => '2014-01-08 17:13:29',
                'deleted_at' => NULL,
                'applicant_id' => 8,
            ),
        ));
        
        
    }
}