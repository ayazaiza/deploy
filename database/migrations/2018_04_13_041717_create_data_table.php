<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imdb_id');
            $table->string('name');
            $table->string('title');
            $table->string('slug');
            $table->string('dates');
            $table->string('description');
            $table->string('rating');
            $table->string('poster');
            $table->string('backdrop');
            $table->string('iframe_1');
            $table->string('iframe_2');
            $table->string('iframe_3');
            $table->string('iframe_4');
            $table->string('iframe_5');
            $table->string('category');
            $table->string('language');
            $table->string('country');
            $table->string('genre');
            $table->string('type');
            $table->string('viewed');
            $table->string('status');
            $table->string('tmdb_id');
            $table->string('vote_count');
            $table->string('runtime');
            $table->string('year');
            $table->string('rel_date');
            $table->string('actors');
            $table->string('director');
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
        Schema::dropIfExists('data');
    }
}
