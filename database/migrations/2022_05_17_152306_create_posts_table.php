<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('title', 50);
            $table->string('name', 50);
            $table->string('address', 50);
            $table->string('tel', 50);
            $table->string('opening', 50)->nullable();
            $table->string('closed', 50)->nullable();
            $table->string('cafe_image1')->nullable();
            $table->string('cafe_image2')->nullable();
            $table->string('cafe_image3')->nullable();
            $table->string('cafe_image4')->nullable();
            $table->string('body', 200);
            $table->timestamps();
            $table->softDeletes();
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
