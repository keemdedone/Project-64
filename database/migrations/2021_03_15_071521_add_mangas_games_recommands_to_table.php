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
                    'name' => 'SPY×FAMILY',
                    'type' => 'action/comedies',
                    'writer' => 'TATSUYA ENDO  ',
                    'description' => 'สุดยอดสปาย "สนธยา" ได้ปฏิบัติการสอดแนมทุกๆวันเพื่อโลกที่ดีกว่า แต่แล้ววันนึงเขาก็ได้รับภารกิจสุดหิน... เพื่อการนั้นเขาจึงได้สร้างครอบครัวปลอมๆและเริ่มชีวิตใหม่!? สปาย x แอคชั่น x คอเมดี้ครอบครัวสุดแนว!',
                    'point' => '10'
                )
            );
    
            DB::table('mangas')->insert(
                array(
                    'id' => '2',
                    'name' => 'One piece',
                    'type' => 'adventure',
                    'writer' => 'EIICHIRO ODA',
                    'description' => 'สุดยอดมังงะ ยุคโจรสลัด เหล่าโจรสลัดต่างต่อสู้กันเพื่อตามหา "วันพีซ" ที่ราชาโจรสลัด G.โรเจอร์เหลือทิ้งไว้ และลูฟี่เด็กหนุ่มผู้หลงใหลในโจรสลัดก็ได้ออกเดินทางเพื่อเป็นราชาโจรสลัด!!',
                    'point' => '10'
                )
            );
    
            DB::table('mangas')->insert(
                array(
                    'id' => '3',
                    'name' => 'My Hero Academia',
                    'type' => 'action/comedies',
                    'writer' => 'KOHEI HORIKOSHI',
                    'description' => 'ในโลกที่พลังพิเศษเหนือมนุษย์"อัตลักษณ์" กลายเป็นเรื่องปกติ เด็กหนุ่มผู้เคย"ไร้อัตลักษณ์"เดกุ ได้รับอัตลักษณ์"วัน ฟอร์ ออล"จาก No.1 ฮีโร่ "ออลไมท์" และเข้าไปฝึกฝนตนเองกับเหล่านักเรียนใน"โรงเรียนยูเอ"เพื่อเป็นฮีโร่ ',
                    'point' => '10'
                )
            );
    
            DB::table('mangas')->insert(
                array(
                    'id' => '4',
                    'name' => 'Black Clover',
                    'type' => 'action/comedies',
                    'writer' => 'YUKI TABATA',
                    'description' => 'โลกแห่งหนึ่งที่เวทมนต์คือทุกสิ่ง--- เด็กหนุ่มอัสทาที่เกิดมาโดยใช้เวทมนตร์ไม่ได้ตั้งเป้าที่จะเป็น “จักรพรรดิเวทมนต์” จุดสูงสุดของจอมเวท เพื่อพิสูจน์ความสามารถของตัวเอง และเพื่อทำตามคำสัญญากับเพื่อน! การ์ตูนแฟนตาซีเวทมนตร์ เริ่มเปิดฉากแล้ว!!',
                    'point' => '10'
                )
            );

            DB::table('mangas')->insert(
                array(
                    'id' => '5',
                    'name' => 'Dr. STONE',
                    'type' => 'Science',
                    'writer' => 'YUKI TABATA',
                    'description' => 'วันหนึ่งที่เป็นเวรเป็นกรรมมนุษยชาติทุกคนตกตะลึงด้วยแสงวาบที่ทำให้ไม่เห็น หลังจากผ่านไปหลายพันปี Taiju นักเรียนมัธยมปลายตื่นขึ้นมาและพบว่าตัวเองหลงทางในโลกแห่งรูปปั้น อย่างไรก็ตามเขาไม่ได้อยู่คนเดียว! Senku เพื่อนรักวิทยาศาสตร์ของเขาเริ่มทำงานมาได้สองสามเดือนแล้วและเขาก็มีแผนการที่ยิ่งใหญ่อยู่ในใจนั่นคือการเริ่มต้นอารยธรรมด้วยพลังแห่งวิทยาศาสตร์!',
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

            DB::table('recommands')->insert(
                array(
                    'id' => '2',
                    'name' => 'Top 10 FPS GAME Recommand!!!',
                    'review_by' => 'Komchan Thongsen',
                    'description' => 'This is game recommand for you, FPS player',
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
