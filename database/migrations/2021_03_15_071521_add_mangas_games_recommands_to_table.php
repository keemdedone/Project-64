<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddMangasGamesRecommandsToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('table', function (Blueprint $table) {
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
    
            DB::table('games')->insert(
                array(
                    'id' => '3',
                    'name' => 'BDO',
                    'type' => 'MMORPG',
                    'description' => 'Good Game....',
                    'point' => '10'
                )
            );
    
            DB::table('games')->insert(
                array(
                    'id' => '4',
                    'name' => 'Genshin',
                    'type' => 'MMORPG',
                    'description' => 'Salt game',
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
    
            DB::table('mangas')->insert(
                array(
                    'id' => '3',
                    'name' => 'Kimisuno Yaiba',
                    'type' => 'demon',
                    'description' => 'demon vs demon-slayer',
                    'point' => '10'
                )
            );
    
            DB::table('mangas')->insert(
                array(
                    'id' => '4',
                    'name' => 'Call her GOD, Susumiya Haruhi',
                    'type' => 'school life',
                    'description' => 'day of SS HQ',
                    'point' => '10'
                )
            );
    
            DB::table('recommands')->insert(
                array(
                    'id' => '1',
                    'name' => 'Top 10 MMORPG GAME Recommand!!!',
                    'review_by' => 'Komchan Thongsen',
                    'description' => 'This is game recommand for you, MMORPG player',
                )
            );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table', function (Blueprint $table) {
            //
        });
    }
}
