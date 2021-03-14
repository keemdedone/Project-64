<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class GameMangaData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('game')->insert(
            array(
                'id' => '1',
                'name' => 'Dark Soul 3',
                'type' => 'MMO',
                'description' => 'very hard game',
                'point' => '10'
            )
        );

        DB::table('manga')->insert(
            array(
                'id' => '1',
                'name' => 'No Game No Life',
                'type' => 'fantasy',
                'description' => 'good idea manga',
                'point' => '10'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
