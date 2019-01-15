<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendshipsTable extends Migration
{

    public function up() {

        Schema::create(config('friendships.tables.fr_pivot'), function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('sender');
            $table->morphs('recipient');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });

        Schema::create('friendship_user', function(Blueprint $table){
            $table->increments('id');
            $table->integer('recipient_id')->unsigned()->index();
            $table->integer('sender_id')->unsigned()->index();
            $table->foreign('recipient_id')->references('id')->on('friendships')->onDelete('cascade');
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
        });

    }

    public function down() {
        Schema::dropIfExists(config('friendships.tables.fr_pivot'));
    }

}