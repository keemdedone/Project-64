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
     RUN by type "php artisan migrate" on terminal 
     ADD colum by type "php artisan make:migration add_(colum name)_to_(table name)_table" this will display- 
     -add migration that you can insert colum
     ROLLBACK -> "php artisan migrate:rollback"
     REFRESH DATA -> php artisan migrate:refresh
     */
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name',200);
            $table->string('type',50);
            $table->string('description',200);
            $table->integer('point');
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
