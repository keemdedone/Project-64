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
        DB::table('games')->insert(
            array(
                'id' => '1',
                'name' => 'Dark Soul 3',
                'type' => 'MMO',
                'description' => 'very hard game',
                'point' => '10'
            )
        );
        DB::table('games')->insert(
            array(
                'id' => '2',
                'name' => 'CSGO',
                'type' => 'FPS',
                'description' => 'classic shooting game',
                'point' => '10'
            )
        );

        DB::table('mangas')->insert(
            array(
                'id' => '1',
                'name' => 'No Game No Life',
                'type' => 'fantasy',
                'description' => 'good idea manga',
                'point' => '10'
            )
        );
        DB::table('mangas')->insert(
            array(
                'id' => '2',
                'name' => 'Goblin Slayer',
                'type' => 'fantasy',
                'description' => 'blood stike',
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
