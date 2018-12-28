<?php

use Illuminate\Database\Seeder;
use App\Skill;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = array(
            array('name' =>'Programmation'
        	),
            array('name' =>'Photoshop'
        	),
            array('name' =>'Design Web'
        	),
            array('name' =>'Edition vidéo'

             ),  array('name' =>'Music'
        	)
        );

        DB::table('skills')->insert($skills);
    }
}
