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
                'name' => 'JAVA',
                'created_at' => '2020-03-02 22:54:52',
                'updated_at' => '2020-03-02 22:54:52',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'C',
                'created_at' => '2020-03-02 22:54:59',
                'updated_at' => '2020-03-02 22:54:59',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'C++',
                'created_at' => '2020-03-02 22:55:07',
                'updated_at' => '2020-03-02 22:55:07',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'PHP',
                'created_at' => '2020-03-02 22:55:20',
                'updated_at' => '2020-03-02 22:55:20',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Python',
                'created_at' => '2020-03-02 22:55:27',
                'updated_at' => '2020-03-02 22:55:27',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'HTML',
                'created_at' => '2020-03-02 22:55:34',
                'updated_at' => '2020-03-02 22:55:34',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Fireworks',
                'created_at' => '2020-03-02 22:55:42',
                'updated_at' => '2020-03-02 22:55:42',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Illustrator',
                'created_at' => '2020-03-02 22:55:50',
                'updated_at' => '2020-03-02 22:55:50',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Javascript',
                'created_at' => '2020-03-02 22:58:28',
                'updated_at' => '2020-03-02 22:58:28',
                'deleted_at' => NULL,
            ),
        ));


    }
}
