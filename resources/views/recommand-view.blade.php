@extends('layouts.main')

@section('title',$title)

@section('content')

<table class="" align="center"  border="0">

    @if ($check == "Game")
<tr>
    <td>
        @can('update',\App\Models\Recommand::class)
       <ul >
             <li><a href="{{ route('recommand-update-form',['recommand' => $recommand->id])}}" class="alias">UPDATE this Game Review</a></li>
             <li><a href="{{ route('recommand-delete', ['recommand' => $recommand->id]) }}" class="alias"  style="background-color: red;"> DELETE this Game Review</a></li>
       </ul>
    </td>
</tr>
</table>
<table class="button2" align="center"  border="0" style="width: 33.35%;">
<tr>
    <td >         
      <a href="{{ route('recommand-view-game',['recommand' => $recommand->id]) }}"  class="alias" style="color: rgb(255, 255, 255);">Show Game</a>
    </td>
</tr>

        @endcan
<tr>    
</table>
<table align="center" border="0" >
  <tr>
  <td><img src="{{ asset("images/recommand/re{$recommand['id']}.jpg") }}" alt="The image of {{ $recommand['name'] }}" style="width: 380px; margin-top: 20px;"/></td>
</tr>
<tr>
     <td style="color:white;">ช่วงเดือนที่ผ่านมาการระบาดของไวรัสโควิด-19 ส่งผลกระทบไปทุกวงการไม่เว้นอุตสาหกรรมเกม แม้ค่ายเกมต่างๆ 
         จะได้รับผลกระทบแต่ก็มอบความสุขให้ชาวเกมเมอร์ในช่วงวิกฤตทั้งลดราคาเกมและแจกฟรี จนตอนนี้เชื่อว่าหลายๆ
          คนน่าจะมีเกมอยู่ในมือเอาไว้เล่นออนไลน์บน PC ช่วงกักตัวทั้งปีอาจไม่จบ ขณะเดียวกันแพลตฟอร์มเกมพีซีที่ใหญ่ที่สุดอย่าง 
          Steam ทำลายสถิติผู้เล่นพร้อมกันทะลุ 20 ล้านคน อีกทั้งเกมประเภท Free-to-play เป็นตัวเลือกอันแรกที่เกมเมอร์พร้อมใจแห่เข้าเล่นพร้อมกันมากที่สุด 
          อาทิ Counter Strike: Global Offensive และ DOTA 2 รวมถึงเกมอื่นๆ ที่สายฟรีคุ้นเคยกันเป็นอย่างดี</td>
  </tr>
  </table>
<table class="" align="center"  border="0">   
    @else
<tr>
    <td>
       <ul >
        @can('update',\App\Models\Recommand::class)
             <li><a href="{{ route('recommand-update-form',['recommand' => $recommand->id])}}" class="alias">UPDATE this Manga Review</a></li>
             <li><a href="{{ route('recommand-delete', ['recommand' => $recommand->id]) }}" class="alias" style="background-color: red;"> DELETE this Manga Review</a></li>
       </ul>
    </td>
</tr>
</table>
<table class="button2" align="center"  border="0" style="width: 34.6%;">
<tr >
    <td >
          
    <a href="{{ route('recommand-view-manga',['recommand' => $recommand->id]) }}" class="alias" style="color: rgb(255, 255, 255);">Show Manga</a>
    </td>
</tr>
<tr>
        @endcan  
        
        
</table>
    @endif
    @if(session()->has('status'))
        <div class="status">
            <span>{{ session()->get('status') }}</span>
        </div>
    @endif 
@endsection