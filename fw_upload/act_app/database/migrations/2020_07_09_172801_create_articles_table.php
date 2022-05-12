<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->string('link_id');
            $table->string('title');
            $table->text('content');
            //$table->text('second_content');
            $table->integer('page_id');
            $table->integer('user_id');
            $table->integer('home_page');
            $table->integer('slider');
            $table->string('article_type');
            $table->integer('article_order');
            //$table->string('image_orientation');
            $table->integer('status');
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
        Schema::dropIfExists('articles');
    }
}
