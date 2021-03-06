<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('type')->comment('1:Promotion 2:Guide 3:Experience 4:Game');
            $table->string('title');
            $table->string('slug');
            $table->string('cover');
            $table->string('description');
            $table->text('content');
            $table->unsignedInteger('pos');
            $table->unsignedInteger('view');
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
        Schema::dropIfExists('posts');
    }
}
