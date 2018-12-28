<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments("id")->unsigned();
            $table->string("title")->nullable();
            $table->string("subTitle")->nullable();
            $table->unsignedInteger("user_id");
            $table->foreign("user_id")->references('id')->on('users')->onDelete('cascade');

        });
        Schema::create('imagesProject', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->unsignedInteger("project_id");
            $table->foreign("project_id")->references('id')->on('projects')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
