<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Skill;

class SkillsUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $users = User::all();
            
          //  $user = factory(App\User::class)->create();
            $skill = factory(App\Skill::class);

            foreach ($users as $user) {

                DB::table('skill_user')->insert([
                    'user_id' => $user->id,
                    'skill_id' => 3
                ]);

            }
    
           
    
           
    }
}
