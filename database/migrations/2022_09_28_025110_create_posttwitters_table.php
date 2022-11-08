<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosttwittersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posttwitters', function (Blueprint $table) {
            $table->id();
            $table->string('post', 281);
            $table->text('image_post')->nullable();
            $table->string('day_post');
            $table->date('date_post');
            $table->time('time_post');
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
        Schema::dropIfExists('posttwitters');
    }
}
