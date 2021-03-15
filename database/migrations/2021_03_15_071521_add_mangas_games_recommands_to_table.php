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
                    'recommand_id' => '1',
                    'description' => 'Dark Souls III เป็นเกมเล่นตามบทบาทแอคชั่นที่เล่นในมุมมองบุคคลที่สามคล้ายกับเกมก่อนหน้านี้ในซีรีส์ 
                    ตามที่ผู้กำกับนำและผู้สร้างซีรีส์ Hidetaka Miyazaki การออกแบบเกมของเกมเป็นไปตาม "อย่างใกล้ชิดจาก Dark Souls II" 
                    ผู้เล่นจะได้รับอาวุธที่หลากหลายเพื่อต่อสู้กับศัตรูเช่นธนูโพรเจกไทล์ที่ขว้างได้และดาบ โล่สามารถทำหน้าที่เป็นอาวุธรองได้ 
                    แต่ส่วนใหญ่จะใช้เพื่อเบี่ยงเบนการโจมตีของศัตรูและปกป้องผู้เล่นจากความเสียหายที่ได้รับ',
                    'point' => '10'
                )
            );
    
            DB::table('games')->insert(
                array(
                    'id' => '2',
                    'name' => 'Counter-Strike: Global Offensive',
                    'type' => 'FPS',
                    'recommand_id' => '1',
                    'description' => 'Counter-Strike: Global Offensive เป็นวิดีโอเกมออนไลน์ประเภทยิงทางยุทธวิธีมุมมองบุคคลที่หนึ่ง พัฒนาโดย วาล์ว คอร์ปอเรชั่น และฮิตเดน แพทซ์ เอ็นเตอร์เทนเมนท์ ซึ่งเป็นเกมชุดที่ 4 จากแฟรนไชส์เคาน์เตอร์-สไตรก์
                    แนวยิงมุมมองบุคคลที่1 ซึ่งจะมี 2ฝั่ง คือ ผู้ต่อต้านผู้ก่อการร้าย กับ ผู้ก่อการร้าย จะมีรูปแบบการเล่นมีโหมดแตกต่างกันออกไป 1.แคสชวล 2.เดทแมตซ์ 3.ทำลายล้าง 4.คลาสสิค 5.แข่งขัน ทุกโหมดนั้น จะมีระบบสุ่มของให้กับผู้เล่นอีกด้วย',
                    'point' => '10'
                )
            );
    
            DB::table('games')->insert(
                array(
                    'id' => '3',
                    'name' => 'Black Desert Online ',
                    'type' => 'MMORPG',
                    'recommand_id' => '1',
                    'description' => 'Black Desert Online เป็นเกมเล่นตามบทบาทออนไลน์ (MMORPG) แนวแฟนตาซีที่เน้นแนวแซนด์บ็อกซ์ที่พัฒนาโดยผู้พัฒนาวิดีโอเกมชาวเกาหลี Pearl Abyss และเผยแพร่ครั้งแรกสำหรับ Microsoft Windows ในปี 2015 เวอร์ชันมือถือชื่อ Black Desert Mobile เปิดตัวครั้งแรกในเอเชียในช่วงต้น 2019 และทั่วโลกในเดือนธันวาคม 2019 เวอร์ชัน Xbox One และ PlayStation 4 หรือที่รู้จักกันในชื่อ Black Desert เปิดตัวในปี 2019 เกมดังกล่าวให้เล่นฟรีในบางส่วนของโลก แต่จะมีการซื้อเพื่อเล่น รูปแบบธุรกิจในฉบับอื่น ๆ รวมถึงฉบับภาษาอังกฤษ

                    ในปี 2018 Pearl Abyss ได้เริ่มทำพรีเควลไปยังไทม์ไลน์ของ Black Desert ที่มีชื่อว่า Crimson Desert แต่ในระหว่างการพัฒนามันได้กลายเป็น IP ที่แยกจากกันโดยมีโครงเรื่องและตัวละครใหม่ที่แตกต่างกัน',
                    'point' => '10'
                )
            );
    
            DB::table('games')->insert(
                array(
                    'id' => '4',
                    'name' => 'Genshin impact',
                    'type' => 'Adventure',
                    'recommand_id' => '1',
                    'description' => 'Genshin Impact เป็นเกมแนวผจญภัยในโลกเปิดที่ผู้เล่นสามารถเข้าสำรวจซากปรักหักพังและภูมิประเทศต่าง ๆ ที่หลากหลายผ่านการปีนป่าย ว่ายน้ำ ร่อนลม และวิธีการเคลื่อนไหวต่าง ๆ  ผู้เล่นสามารถเลือกตัวละครสี่ตัวเพื่อเข้าร่วมทีมในการต่อสู้ และเมื่อเรื่องราวดำเนินไป พร้อมกับทำภารกิจให้สำเร็จแล้วคุณจะสามารถปลดล็อกได้สูงสุดถึง 30 ตัวละคร โดยตัวละครแต่ละตัวมีทักษะสองประเภท คือสกิลทั่วไปและสกิลธาตุสกิลทั่วไปสามารถใช้งานได้ทันทีตราบเท่าที่คูลดาวน์ของสกิลหมดลง ส่วนสกิลธาตุจะต้องใช้พลังงานธาตุที่สะสมไว้เพื่อใช้งาน ',
                    'point' => '10'
                )
            );

            DB::table('games')->insert(
                array(
                    'id' => '5',
                    'name' => 'Stardew valley',
                    'type' => 'Simulation',
                    'recommand_id' => '1',
                    'description' => 'ในสตาร์ดิวแวลลีย์ ผู้เล่นรับบทบาทตัวละครที่ต้องรับฟาร์มของปู่ในสตาร์ดิวแวลลีย์ที่ชำรุดทรุดโทรม ด้วยความที่อยากหนีจากงานในสำนักงานอันเร่งรีบ ขณะหาเงินในเกมเพื่อขยายฟาร์ม ผู้เล่นต้องจัดการกับเวลาและพลังงานของตัวละครระหว่างทำงาน เช่น ปลูกพืชผัก เลี้ยงสัตว์ สร้างของ ขุดเหมือง และเข้าสังคม รวมไปถึงการแต่งงานกับผู้อยู่อาศัยในเมืองเล็กๆ นี้ เกมมีปลายที่เปิดกว้างทำให้ผู้เล่นสามารถทำกิจกรรมได้ตามต้องการ',
                    'point' => '10'
                )
            );
    
            DB::table('mangas')->insert(
                array(
                    'id' => '1',
                    'name' => 'SPY×FAMILY',
                    'type' => 'action/comedies',
                    'recommand_id' => '1',
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
                    'recommand_id' => '1',
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
                    'recommand_id' => '1',
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
                    'recommand_id' => '1',
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
                    'recommand_id' => '1',
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
