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
            <tr><td bgcolor="#ffffe6"><font color="green" size="5"><center><B>Token-ring</B></center></font></td>
            <td><center><img src="images/PNG1.png" width="300" height="300"></center></td></tr>
            <tr><td width="100" height="100"><center><B><font color="green" size="5">รูปประเภท.png</font></B></center></td><td width="300" height="300">
            <a href="https://s.hswstatic.com/gif/ethernet4.gif"><center>ไปที่ลิงค์รูปภาพต้นฉบับ</center></a></td></tr>
        </table>

        <table border="5" bordercolor="red" width="50%">
            <tr><td bgcolor="#ffffe6"><font color="red" size="5"><center><B>OSI Model</B></center></font></td>
            <td><center><img src="images/jpeg1.jpg" width="300" height="300"></center></td></tr>
            <tr><td width="100" height="100"><center><B><font color="red" size="5">รูปประเภท.jpg</font></B></center></td><td width="300" height="300">
            <a href="https://cdn-images-1.medium.com/max/1600/0*vNEkf-2ppecgkZCb.jpg"><center>ไปที่ลิงค์รูปภาพต้นฉบับ</center></a></td></tr>
        </table>

         <table border="5" bordercolor="orange" width="50%">
            <tr><td bgcolor="#ffffe6"><font color="orange" size="5"><center><B>Network Topology</B></center></font></td>
            <td><center><img src="images/giphy1.gif" width="300" height="300"></center></td></tr>
            <tr><td width="100" height="100"><center><B><font color="orange" size="5">รูปประเภท.gif</font></B></center></td><td width="300" height="300">
            <a href="https://giphy.com/gifs/9PcQDGVja38Eseg8pi"><center>ไปที่ลิงค์รูปภาพต้นฉบับ</center></a></td></tr>
        </table>

  </body>
</html>
</div>
</div>
</div>
</div>
</div>
@endsection
