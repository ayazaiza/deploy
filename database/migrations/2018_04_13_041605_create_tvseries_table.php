<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTvseriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tvseries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('imdb_id');
            $table->string('poster');
            $table->string('backdrop'); 
            $table->string('seasons_no');
            $table->string('no_of_episodes');
            $table->string('uni_id'); 
            $table->string('rel_date');
            $table->string('tmdb_id');
            $table->string('description');
            $table->string('genre');
            $table->string('type');
            $table->string('director');
            $table->string('actors');  
            $table->string('rating');
            $table->string('country');
            $table->string('language');
            $table->string('views');
            $table->string('votes');
            $table->string('year');
            $table->string('runtime');
       
     
         
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
        Schema::dropIfExists('tvseries');
    }
}
