<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Text</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<html>
<head>

</head>
<body>
	<h1><center><font color="blue" size="15"><I><B><U>Text Page</U></B></I></font></center></h1>

		<table border="5" width="50%">
			<tr><td style="font-family:verdana">This is font</td>
			<td style="font-family:courier;">รูป<a href="https://f.ptcdn.info/754/014/000/1390317148-xs-o.jpg">แมว</a>อ่ะอยากดูป่ะ</td>
			<p style="font-family:Times New Roman; font-style: italic;"><header><marquee behavior="slide"><b>แพทยสภา เตรียมเรียกหมอสูติฯฉาวสอบจริยธรรม</b></marquee></header>แพทยสภา ระบุสูตินรีแพทย์ที่ถูกกล่าวหาข่มขืนคนไข้ยังบริสุทธิ์สามารถตรวจคนไข้ได้ตามปกติ เตรียมเรียกสอบจริยธรรมธ.ค.นี้

วันนี้( 23 พ.ย.61) นายอัจฉริยะ เรืองรัตนพงษ์ ประธานชมรมช่วยเหลือเหยื่ออาชญากรรม นำหลักฐานการตรวจสอบคลีนิคในจังหวัดนครสวรรค์ พร้อมภาพวีดีโอจำลองเหตุการณ์ เข้าร้องเรียนต่อแพทยสภา ให้เอาผิดด้านจริยธรรมสูตินรีแพทย์ ที่ถูกกล่าวหาว่าล่วงละเมิดทางเพศคนไข้สาวจำนวนมากระหว่างการตรวจรักษา</p></tr>
			<tr><td style="font-family:Georgia; font-style: normal;" >This is font</td>
			<td style="font-family:Arial; font-style: oblique;">This is font 2</td>
			<td style="font-family:Lucida Console;">This is font 3</td></tr>
		</table>

		<table border="5" width="50%">
			<tr><td><marquee direction="left">ก็อปมาไม่ต้องถามว่าทำไง</marquee></td>
			<td><marquee direction="down">ก็อปมาไม่ต้องถามว่าทำไง</marquee></td>
			<td><marquee behavior="alternate" scrollamount="1">นี่ก็ก็อปมาอย่าเสือกถาม<marquee></td></tr>
			<tr><td><a href="https://www.w3schools.com/html/html_links.asp">อยากขยายยยยยยยยยยยยย</a></td>
			<td><a href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml_styles_font-family">ให้เห็นว่าาาาาาาาาา</a></td>
			<td><a href="https://www.w3schools.com/html/tryit.asp?filename=tryhtml_links">Text มันวิ่งด๊ายยยยยยยย</a></td></tr>
		</table>



</body>
</html>
</div>
</div>
</div>
</div>
</div>
@endsection
