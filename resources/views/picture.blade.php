<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Picture</div>

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
  <h1><center><font color="blue" size="15"><I><B><U>Picture Page</U></B></I></font></center></h1>

        <table border="5" bordercolor="green" width="50%">
            <tr><td bgcolor="#ffffe6"><font color="green" size="5"><center><B>MARIO</B></center></font></td>
            <td><center><img src="images/PNG.png" width="300" height="300"></center></td></tr>
            <tr><td width="100" height="100"><center><B><font color="green" size="5">รูปประเภท.png</font></B></center></td><td width="300" height="300">
            <a href="https://vignette.wikia.nocookie.net/fantendo/images/6/6e/Small-mario.png/revision/latest?cb=20120718024112"><center>ไปที่ลิงค์รูปภาพต้นฉบับ</center></a></td></tr>
        </table>

        <table border="5" bordercolor="red" width="50%">
            <tr><td bgcolor="#ffffe6"><font color="red" size="5"><center><B>MICKEY</B></center></font></td>
            <td><center><img src="images/jpeg.jpg" width="300" height="300"></center></td></tr>
            <tr><td width="100" height="100"><center><B><font color="red" size="5">รูปประเภท.jpg</font></B></center></td><td width="300" height="300">
            <a href="https://vignette.wikia.nocookie.net/cartoons/images/8/86/Mickey-mouse-10.jpg.jpeg/revision/latest?cb=20090310014517"><center>ไปที่ลิงค์รูปภาพต้นฉบับ</center></a></td></tr>
        </table>

         <table border="5" bordercolor="orange" width="50%">
            <tr><td bgcolor="#ffffe6"><font color="orange" size="5"><center><B>CAT</B></center></font></td>
            <td><center><img src="images/giphy.gif" width="300" height="300"></center></td></tr>
            <tr><td width="100" height="100"><center><B><font color="orange" size="5">รูปประเภท.gif</font></B></center></td><td width="300" height="300">
            <a href="https://media2.giphy.com/media/iz4XhMigHIat2/giphy.gif?cid=3640f6095bf2d0a74861366f51d24c73"><center>ไปที่ลิงค์รูปภาพต้นฉบับ</center></a></td></tr>
        </table>

  </body>
</html>
</div>
</div>
</div>
</div>
</div>
@endsection
