<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMangaTable extends Migration
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
     ROLLBACK type "php artisan migrate:rollback"
     */
    {
        Schema::create('manga', function (Blueprint $table) {
            $table->id();
            $table->string('name',50); 
            $table->string('description',200);
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
        Schema::dropIfExists('manga');
    }
}
