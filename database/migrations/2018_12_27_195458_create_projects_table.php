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
            $table->string("title");
            $table->string("subTitle")->nullable();
            $table->longText("description");
            $table->string("imageProject");
            $table->integer("nbViews")->default(0);
            $table->unsignedInteger("user_id");
            $table->unsignedInteger("category_id");
            $table->foreign("user_id")->references('id')->on('users')->onDelete('cascade');
            $table->foreign("category_id")->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();

        });
        Schema::create('imagesProject', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->string("image")->nullable();
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
