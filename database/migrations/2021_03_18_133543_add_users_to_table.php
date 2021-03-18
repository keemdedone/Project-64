<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddUsersToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('table', function (Blueprint $table) {
            DB::table('users')->insert(
                array(
                    'id' => '1',
                    'name' => 'Administrator',
                    'email' => 'admin@my-db.com',
                    'password' => '$2y$10$RGuRSLsfJUdaELnY9ZUER.w4pqSyoHeiluriZRahtJB1nWBNYUuwW',
                    'role' => 'ADMIN',
                )
            );

            DB::table('users')->insert(
                array(
                    'id' => '2',
                    'name' => 'User',
                    'email' => 'user@my-db.com',
                    'password' => '$2y$10$ggNGqa1vmznIwhTFcSRkoeBEI5ZN/EDYTwQAfBeIHYogpxGCNzfJG',
                    'role' => 'USER',
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
