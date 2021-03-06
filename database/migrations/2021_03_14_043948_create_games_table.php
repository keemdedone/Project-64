<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    /*
     RUN -> php artisan migrate on terminal 
     ROLLBACK -> php artisan migrate:rollback
     REFRESH DATA -> php artisan migrate:refresh
     Last data update ->php artisan migrate:fresh
     */
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name',200);
            $table->string('type',50);
            $table->integer('recommands_id')->nullable();
            $table->string('description',1500);
            $table->integer('point');
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
        Schema::dropIfExists('games');
    }
}
