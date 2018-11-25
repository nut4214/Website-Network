@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Protocol</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Protocol คืออะไร ?
                      <img src="images/ptcpc2.gif" hspace="75" alt="process of protocol" style="width:550px;height:350px; "><br>
                    </h3><br>
                          <p style="text-indent: 2.5em;" > โปรโตคอล คือ ข้อกำหนดหรือข้อตกลงในการสื่อสารระหว่างคอมพิวเตอร์ หรือภาษาสื่อสารที่ใช้เป็น
                            ภาษากลางในการสื่อสารระหว่างคอมพิวเตอร์ด้วยกัน การที่เครื่องคอมพิวเตอร์ที่ถูกเชื่อมโยงกันไว้ในระบบจะสามารถติดต่อสื่อสารกันได้นั้น
                            จำเป็นจะต้องมีการสื่อสารที่เรียกว่า โปรโตคอล (Protocol) เช่นเดียวกับคนเราที่ต้องมีภาษาพูดเพื่อให้สื่อสารเข้าใจกันได้
                          </p><br>
                          <p style="text-indent: 2.5em;">โปรโตคอลช่วยให้ระบบคอมพิวเตอร์สองระบบ ที่แตกต่างกันสามารถสื่อสารกันอย่างเข้าใจได้
                            คือข้อตกลงที่กำหนดเกี่ยว กับการสื่อสารระหว่างเครื่องคอมพิวเตอร์ต่างๆ ทั้งวิธีการส่งและรับข้อมูล วิธีการตรวจสอบข้อผิดพลาดของการส่งและรับข้อมูล
                            การแสดงผลข้อมูลเมื่อส่งและรับกันระหว่างเครื่องสองเครื่อง ดังนั้นจะเห็นได้ว่าโปรโตคอลมีความสำคัญมากในการสื่อสารบนเครือข่าย
                            หากไม่มีโปรโตคอลแล้ว การสื่อสารบนเครือข่ายจะไม่สามารถเกิดขึ้นได้
                          </p><br>

                        <h5>ตัวอย่างของโปรโตคอล</h5><br>

                          <p style="text-indent: 2.5em;">1. โปรโตคอล HTTP หรือ Hypertext Transfer Protocol
                            จะใช้เมื่อเรียกโปรแกรมบราวเซอร์ (Browser)
                          </p><br>
                          <p style="text-indent: 2.5em;">2. โปรโตคอล  หรือ Transfer Control Protocol/Internet Protocolคือเครือข่ายโปรโตคอลที่สำคัญมากที่สุด
                            เนื่องจากเป็นโปรโตคอลที่ใช้ในระบบเครือข่าย Internet รวมทั้ง Intranet ซึ่งประกอบด้วย 2 โปรโตคอลคือ TCP และ IP
                          </p><br>
                          <p style="text-indent: 2.5em;">3. โปรโตคอล SMTP หรือ Simple Mail Transfer Protocol คือ โปรโตคอล
                            ที่ใช้ในการรับส่งจดหมายอิเล็กทรอนิกส์บนเครือข่ายอินเทอร์เน็ต
                          </p><br>
                </div>
            </div><br>
            <div class="card">
                <div class="card-header">OSI Model</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>OSI Model คืออะไร ?
                      <img src="https://sites.google.com/site/kwanthida53/_/rsrc/1295230292799/charpter4/0001.jpg" hspace="75" alt="process of protocol" style="width:auto;height:auto; "><br>
                    </h3><br>

                      <p style="text-indent: 2.5em;" >  Open Systems Interconnection Basic Reference Model (OSI Model หรือ OSI Reference Model)
                        เป็นมาตรฐานการอธิบายการติดต่อสื่อสารและโพรโทคอลของระบบคอมพิวเตอร์ที่ถูกพัฒนาขึ้นโดยองค์กรที่ชื่อว่า International Organization for Standardization (ISO)
                      </p><br>

                      <h5>การแบ่งชั้นใน OSI Model</h5><br>

                      <p style="text-indent: 2.5em;"> 1. Application Layer - ชั้นที่เจ็ดเป็นชั้นที่อยู่ใกล้ผู้ใช้มากที่สุดและเป็นชั้นที่ทำงานส่งและ รับข้อมูลโดยตรงกับผู้ใช้ ตัวอย่างเช่น ซอร์ฟแวร์โปรแกรม ต่างๆที่อาศัยอยู่บนเลเยอร์นี้ เช่น DNS,HTTP,Browser เป็นต้น
                      </p><br>
                      <p style="text-indent: 2.5em;"> 2. Presentation Layer - ชั้นที่หกเป็นชั้นที่รับผิดชอบเรื่องรูปแบบของการแสดงผลเพื่อโปรแกรมต่างๆ ที่ใช้งานระบบเครือข่ายทำให้ทราบว่าข้อมูลที่ได้เป็นประเภทใด เช่น [รูปภาพ,เอกสาร,ไฟล์วีดีโอ]
                      </p><br>
                      <p style="text-indent: 2.5em;"> 3. Session Layer - ชั้นที่ห้านี้ทำหน้าที่ในการจัดการกับเซสชั่นของโปรแกรม ชั้นนี้เองที่ทำให้ในหนึ่งโปรแกรมยกตัวอย่างเช่น โปรแกรมค้นดูเว็บ (Web browser) สามารถทำงานติดต่ออินเทอร์เน็ตได้พร้อมๆกันหลายหน้าต่าง
                      </p><br>
                      <p style="text-indent: 2.5em;"> 4. Transport Layer - ชั้นนี้ทำหน้าที่ดูแลจัดการเรื่องของความผิดพลาดที่เกิดขึ้นจากการสื่อสาร ซึ่งการตรวจสอบความผิดพลาดนั้นจะพิจารณาจากข้อมูลส่วนที่เรียกว่า checksum และอาจมีการแก้ไขข้อผิดพลาดนั้นๆ โดยพิจารณาจาก ฝั่งต้นทางกับฝั่งปลายทาง (End-to-end) โดยหลักๆแล้วชั้นนี้จะอาศัยการพิจารณาจาก พอร์ต (Port) ของเครื่องต้นทางและปลายทาง
                      </p><br>
                      <p style="text-indent: 2.5em;"> 5. Network Layer - ชั้นที่สามจะจัดการการติดต่อสื่อสารข้ามเน็ตเวิร์ค ซึ่งจะเป็นการทำงานติดต่อข้ามเน็ตเวิร์คแทนชั้นอื่นๆที่อยู่ข้างบน
                      </p><br>
                      <p style="text-indent: 2.5em;"> 6. Data Link Layer - ชั้นนี้จัดเตรียมข้อมูลที่จะส่งผ่านไปบนสื่อตัวกลาง
                      </p><br>
                      <p style="text-indent: 2.5em;"> 7. Physical Layer - ชั้นสุดท้ายเป็นชั้นของสื่อที่ใช้ในการติดต่อสื่อสาร ซึ่งอาจจะเป็นทั้งแบบที่ใช้สายหรือไม่ใช้สาย ตัวอย่างของสื่อที่ใช้ได้แก่ Shield Twisted Pair (STP), Unshield Twisted Pair (UTP), Fibre Optic และอื่นๆ
                      </p><br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
