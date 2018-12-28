<?php

use Illuminate\Database\Seeder;
use App\User;
use  Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $userFred = new User();
      $userFred->firstName = "Frédéric";
      $userFred->lastName = "Beaulieu";
      $userFred->userName = "fredstyle93";
      $userFred->email = "fred.beaulieu123@gmail.com";
      $userFred->password = bcrypt("fruit123");
      $userFred->level = 1;
      $userFred->posts = 45;
      $userFred->avatar = "1534278075";
      $userFred->interactions = 108;
      $userFred->helps = 12;
      $userFred->description = "Admin";
      $userFred->save();

      $userFab = new User();
      $userFab->firstName = "Fabrice";
      $userFab->lastName = "Garrec";
      $userFab->userName = "fab";
      $userFab->email = "fabrice@garrec.com";
      $userFab->password = bcrypt("0000");
      $userFab->level = 1;
      $userFab->avatar = "1534278075";
      $userFab->description = "Admin";
      $userFab->posts = 59;
      $userFab->interactions = 20;
      $userFab->helps = 32;
      $userFab->save();


      for($i = 0 ; $i < 10 ; $i++){
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'firstName'=> "John$i",
            'lastName'=> "doe",
            'userName'=> "john $i doe",
            'email'=> "John$i@Doe.com",
            'password'=> bcrypt('0000'),
            'level'=> 0,
            'posts'=> 4,
            'interactions'=> 4,
            'helps'=> 4,
            'description'=> "test $i",
            'email'=> "John$i@Doe.com",
            'email'=> "John$i@Doe.com",
            

        ]);
    }
    }
}
