<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('userName');
            $table->integer('posts')->nullable();
            $table->integer('interactions')->nullable();
            $table->integer('helps')->nullable();
          //  $table->foreign('school_id')->references('id')->on('schools');
            $table->string('email')->unique()->default('email@gmail.com');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('description')->nullable();;
            $table->string('avatar')->default('avatar.jpg');
            $table->integer('level')->default('0');  // verifier admin 0 = membre normal
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
