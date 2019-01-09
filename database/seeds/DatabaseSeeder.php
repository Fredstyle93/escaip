<?php
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
         $this->call(UsersTableSeeder::class);
         $this->call(SchoolsTableSeeder::class);
         
         $this->call(SkillsTableSeeder::class);
         
         $this->call(SkillsUserSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         
    }
}
