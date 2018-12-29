<?php

use Illuminate\Database\Seeder;
use App\School;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schools = array(
            array('name' =>'Cégep de Saint-Jérôme'
        	),
            array('name' =>'Cégep du vieux Montréal'
        	),
            array('name' =>'Cégep lionel-Groulx'
        	),
            array('name' =>'Collège Ahunstic'),
             array('name' =>'Université de Montréal')
        );

        DB::table('schools')->insert($schools);
    }
}
