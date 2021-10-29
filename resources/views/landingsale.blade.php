@extends('layouts.app')

@section('content')

<div class="container background-in">
    <div class="index">
        <div class="">
            <div class="top-img">
                <div class="" style=" display: flex; justify-content: center; ">
                    <div class="col-0 col-xl-2">
                        <div class="AMB-group-con">
                            <div style="padding: 20px;">
                                <img class="" style="" src=" {{ url('/images/AMB LOTTO.png') }}"
                                    alt="Image" />
                            </div>
                            <div style="padding: 20px;">
                                <img class="" style="" src=" {{ url('/images/line.png') }}"
                                    alt="Image" />
                            </div>
                            <div style="padding: 20px;">
                                <div class="icon-cont-pc">
                                    <img class="icon-cont-p" style="" src=" {{ url('/images/Linei.png') }}">
                                    <img class="icon-cont-p" style="" src=" {{ url('/images/Instagram.png') }}">
                                    <img class="icon-cont-p" style="" src=" {{ url('/images/Twitter.png') }}">
                                    <img class="icon-cont-p" style="" src=" {{ url('/images/Facebook.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fonthead col-12 col-xl-10">
                        <img class="image-girl" src="{{ url('/images/girl.png') }}" alt="Image" />
                        <div class="icon-cont">
                            <img class="icon-cont-p" style="" src=" {{ url('/images/Linei.png') }}">
                            <img class="icon-cont-p" style="" src=" {{ url('/images/Instagram.png') }}">
                            <img class="icon-cont-p" style="" src=" {{ url('/images/Twitter.png') }}">
                            <img class="icon-cont-p" style="" src=" {{ url('/images/Facebook.png') }}">
                        </div>
                        <div class="slide-text">
                            <div class="box-con-slide col-lg-3">
                                ประกาศจากเว็บ :
                            </div>
                            <div class="ticker">
                                <marquee>ยินดีต้อนรับเข้าสู่เว็บแทงหวยออนไลน์ <a
                                        class="font-slide">AMB-LOTTO.COM</a>
                                    ติดต่อแอดมินได้ที่ Tel: 09x-xxx-xxx Line ID: @xxx</marquee>
                                {{-- <div id="ticker">ยินดีต้อนรับเข้าสู่เว็บแทงหวยออนไลน์ <span
                                        class="font-slide">AMB-LOTTO.COM</span>
                                    ติดต่อแอดมินได้ที่ Tel: 09x-xxx-xxx Line ID: @xxx</div> --}}
                            </div>
                        </div>


                        <div class="col-12 ">
                            <div class="dis-crow-p">
                                <div class="font-crow">
                                    เว็บแทงหวย<div class="font-in">ที่มั่นคงที่สุด </div>
                                </div>
                            </div>
                        </div>

                        <div class="dis-crow col-12-m">
                            <div class="col-12-m col-xl-4 ">
                                <div>
                                    <div class="dis-crow-p">
                                        <div class="font-crow">เว็บแทงหวยที่มั่นคงที่สุด</div>
                                    </div>
                                </div>

                                <div class="dis-crow-m">
                                    <div class="font-crow">เว็บแทงหวยที่มั่นคงที่สุด</div>
                                </div>
                                <div class="box-in">
                                    ด้วยประสบการณ์การให้บริการทั้งคาสิโนออนไลน์
                                    และแทงหวยออนไลน์ นานนับ 10 ปี และไม่หยุดพัฒนา
                                    เพื่อประสบการณ์ต่อผู้เล่น ที่สะดวก เสถียรที่สุด รองรับทั้งมือถือ และ คอมพิวเตอร์
                                    อีกทั้งยังมีระบบ
                                    ฝากถอนรวดเร็ว ทำให้เว็บที่ทีมงานดูแลและพัฒนา
                                    เป็นที่นิยมแพร่หลายจนถึงทุกวันนี้ ซึ่งผู้เล่นอยากจะ
                                    แทงหวยยี่กี ที่มีให้ลุ้นรวยทั้งวันรวมทั้งหวยหุ้น
                                    ทั้งในและต่างประเทศ หวยลาวและหวยอื่นๆ
                                    อีกมากมายต้องนึกถึง เราเป็นเว็บแรกแน่นอน
                                    โปรโมชั่นพิเศษสำหรับสมาชิกใหม่ และสิทธิพิเศษ
                                    มากมาย แจกเครดิตฟรีอย่างต่อเนื่อง
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="col-12-m col-lg-4 col-xl-12 " style="text-align: center;">
                                    <div class="font-crow" style="display: flex;
                                    flex-direction: column;
                                    align-items: center;">
                                        เว็บแทงหวย
                                        ที่ดีที่สุด
                                    </div>
                                    <div class="frame" style="">
                                        <img class="frame-icon" src="{{ url('/images/frame.png') }}"
                                            alt="Image" />
                                        <div class="" style="position: relative;
                                        top: -90px;">
                                            <div>
                                                <img class="" src="{{ url('/images/rocket.png') }}"
                                                    alt="Image" />
                                            </div>
                                            <div>
                                                ฝากถอนรวดเร็ว
                                            </div>
                                        </div>
                                    </div>
                                    <div class="frame" style="">
                                        <img class="frame-icon" src="{{ url('/images/frame.png') }}"
                                            alt="Image" />
                                        <div class="" style="position: relative;
                                        top: -90px;">
                                            <div>
                                                <img class="" src="{{ url('/images/shield.png') }}"
                                                    alt="Image" />
                                            </div>
                                            <div>
                                                โปรงใส 100%
                                            </div>
                                        </div>
                                    </div>
                                    <div class="frame" style="">
                                        <img class="frame-icon" src="{{ url('/images/frame.png') }}"
                                            alt="Image" />
                                        <div class="" style="position: relative;
                                        top: -90px;">
                                            <div>
                                                <img class="" src="{{ url('/images/bank.png') }}"
                                                    alt="Image" />
                                            </div>
                                            <div>
                                                จ่ายแน่นอน
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 font-crow ">
                                <img class="image-girl" src="{{ url('/images/money.png') }}" alt="Image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="background-qr-a col-12" style="">
            <div class="font-crow">
                โปรโมชั่น<div class="font-in">สำหรับสมาชิก</div>

            </div>
            <div class="displayqr">
                <div>
                    สมาชิกใหม่ฝากเงินครั้งแรก
                </div>
                <div>
                    รับโบนัสสูงสุด 5,000 บาท
                </div>
                <div class="font-qr">
                    เติม 1,000 รับเพิ่ม 300
                </div>
                <div class="font-qr">
                    เติม 5,000 รับเพิ่ม 500
                </div>
                <div class="font-qr">
                    เติม 10,000 รับเพิ่ม 1,000
                </div>
                <div class="font-qr">
                    เติม 50,000 รับเพิ่ม 2,000
                </div>
            </div>

        </div>
        <div class="col-12 dis-qrM">
            <img class="" src="{{ url('/images/qr.png') }}" alt="Image" />
        </div>
        <div class="col-12 ">
            <div class="dis-crow-p">
                <div class="font-crow">
                    หวยออนไลน์<div class="font-in">ที่เปิดให้บริการ</div>
                </div>
            </div>
            <div class="">
                <div class=" carousel-inner">
                    <div class=" font-un-crow font-un row">
                        <div class="col-5 col-lg-5 pe-0  d-flexend">
                            <a href="{{ url('thai') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/thai.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0 d-flexstart">
                            <a href="{{ url('tgs') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/tks.png') }}" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="col-5 col-lg-5 pe-0 d-flexend">
                            <a href="{{ url('aomsin') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/aomsin.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0 d-flexstart">
                            <a href="{{ url('laos') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/laos.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0 d-flexend">
                            <a href="{{ url('hanoy') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/hanoy.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0 d-flexstart">
                            <a href="{{ url('maley') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/maley.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="textarea" style="display: none" class=" font-un-crow font-un row">
                        <div class="col-5 col-lg-5 pe-0 d-flexend">
                            <a href="{{ url('yekee') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/yekee.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0 d-flexstart">
                            <a href="{{ url('pingpong') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/pingpong.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0 d-flexend">
                            <a href="{{ url('sing') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/sing.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0 d-flexstart">
                            <a href="{{ url('stockthai') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockthai.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0 d-flexend">
                            <a href="{{ url('stocknikkei') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stocknikkei.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0 d-flexstart">
                            <a href="{{ url('stockchina') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockchina.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0 d-flexend">
                            <a href="{{ url('stockhangseng') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockhangseng.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0 d-flexstart">
                            <a href="{{ url('stockkorea') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockkorea.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0 d-flexend">
                            <a href="{{ url('stocktaiwan') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stocktaiwan.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0 d-flexstart">
                            <a href="{{ url('stockindia') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockindia.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0 d-flexend">
                            <a href="{{ url('stockgerman') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockgerman.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0 d-flexstart">
                            <a href="{{ url('stockeng') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockeng.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0 d-flexend">
                            <a href="{{ url('stockdownjones') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockdownjones.png') }}"
                                        alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0 d-flexstart">
                            <a href="{{ url('stockrussia') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockrussia.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-5 col-lg-5 pe-0" style="text-align: center;">
                            <a href="{{ url('stockegypt') }}">
                                <div class="bg-border">
                                    <img class="bg-img" src="{{ url('/images/stockegypt.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="group-add">
                        <button class="but-add " id="seeMore" onclick="toggleSeeMore()"
                            href="javascript:void(0);">ดูเพิ่มเติม</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 dis-non-M">
            <div class="background-girl col-12 " style="">
                <div class="font-crow">
                    หวยออนไลน<div class="font-in">ที่ดีที่สุด</div>
                </div>
                <div class="col-12 displayqr">
                    <div class="size">
                        เว็บแทงหวยออนไลน์, แทงหวย, แทงหวยออนไลน์,
                        ซื้อหวย, แทงหวยหุ้น, หวยหุ้น, หวยรัฐบาล, ตรวจหวย,
                        เว็บแทงหวย, ซื้อหวยหุ้นทำงานด้วยระบบอัตโนมัติ
                        การฝากเงิน การถอนเงิน รวดเร็ว ปลอดภัย
                        การเงินมั่นคง เหมาะสำหรับลูกค้าที่ต้องการ
                        ความสะดวกสบาย โปรงใส่ 100%
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 dis-non-PC">
            <div class="background-girl-M col-12 " style="">
                <div class="font-crow">
                    หวยออนไลน<div class="font-in">ที่ดีที่สุด</div>
                </div>
                <div class="col-12 displayqr">
                    <div class="size">
                        เว็บแทงหวยออนไลน์, แทงหวย, แทงหวยออนไลน์,
                        ซื้อหวย, แทงหวยหุ้น, หวยหุ้น, หวยรัฐบาล, ตรวจหวย,
                        เว็บแทงหวย, ซื้อหวยหุ้นทำงานด้วยระบบอัตโนมัติ
                        การฝากเงิน การถอนเงิน รวดเร็ว ปลอดภัย
                        การเงินมั่นคง เหมาะสำหรับลูกค้าที่ต้องการ
                        ความสะดวกสบาย โปรงใส่ 100%
                    </div>
                </div>
            </div>
            <div class="col-12 dis-qrM">
                <img class="" src="{{ url('/images/Banner-Mo1.png') }}" alt="Image" />
            </div>
        </div>

        <div class="col-12 ">
            <div class="dis-crow-p">
                <div class="font-crow">
                    หวยออนไลน์<div class="font-in">ยอดนิยมในไทย </div>
                </div>
            </div>
        </div>

        <div class="col-12 d-flex pe-0 row">

            <div class="card col-lg-3 col-6">
                <div class="card-header">
                    <div class="font-qr">
                        หวยยี่กี
                    </div>
                </div>
                <div class="card-body card-body-yekee">
                    <p class="card-text"></p>
                </div>
                <div class="card-footer">
                    <p class="card-text">หวยจับยี่กีออนไลน์ เป็นการเลือกซื้อหวยออนไลน์
                        อีกรูปแบบ ที่สามารถแทงได้ทุก ๆ
                        15 นาที ใน 1 วัน
                        สามารถซื้อ
                        ได้ถึง 88 ครั้งเลยทีเดียว </p>
                </div>
            </div>

            <div class="card col-lg-3 col-6">
                <div class="card-header">
                    <div class="font-qr">
                        หวยลาว
                    </div>
                </div>
                <div class="card-body card-body-laos">
                    <p class="card-text"></p>
                </div>
                <div class="card-footer">
                    <p class="card-text">หวยลาวเป็นหนึ่งในหวยต่างประเทศ
                        ที่คนนิยมเล่นกันมาก โดยเฉพาะ
                        ในรูปแบบ หวยออนไลน์ เข้าเล่นง่าย
                        และสามารถแทงผ่านออนไลน์
                        ได้บ่อยกว่าหวยรัฐบาลไทย</p>
                </div>
            </div>

            <div class="card col-lg-3 col-6">
                <div class="card-header">
                    <div class="font-qr">
                        หวยรัฐบาล
                    </div>
                </div>
                <div class="card-body card-body-thai">
                    <p class="card-text"> </p>
                </div>
                <div class="card-footer">
                    <p class="card-text">เป็นหวยที่นิยมมากที่สุด หวยรัฐบาล
                        ในหนึ่งเดือนสามารถแทงได้สองรอบ
                        คือ งวดวันที่ 1 และงวดวันที่ 16
                        ของทุกเดือน ตามวันที่ออกผลการออก
                        สลากกินแบ่งรัฐบาล </p>
                </div>
            </div>

            <div class="card col-lg-3 col-6">
                <div class="card-header">
                    <div class="font-qr">
                        หวยหุ้น
                    </div>
                </div>
                <div class="card-body card-body-stock">
                    <p class="card-text"></p>
                </div>
                <div class="card-footer">
                    <p class="card-text">หวยหุ้นคือเล่นทายผลตัวเลข
                        ที่อิงผลการออกรางวัลจาก
                        ตลาดหลักทรัพย์
                        ทั้งหุ้นไทย และหุ้นต่างประเทศ เป็นหวยที่
                        กำลังนิยม
                        กันมากในปัจจุบัน</p>
                </div>
            </div>
        </div>
        <div class="col-12 dis-non-M">
            <div class="col-12 ">
                <div class="dis-crow-p">
                    <div class="font-crow">
                        หวยออนไลน์<div class="font-in">ยอดนิยมในไทย </div>
                    </div>
                </div>
            </div>
            <div class="background-girl-AMB col-12" style="">
                <div class="col-12 displayqr">
                    <div class="font-crow font-crow-AMB">
                        AMB Lottoแทงหวย<div class="font-in">ออนไลน์ 24 ชั่วโมง</div>
                    </div>
                    <div class="size">
                        การให้บริการทั้งคาสิโนออนไลน์ และ แทงหวยออนไลน์ นานนับ 10 ปี และไม่หยุด
                        พัฒนาเพื่อประสบการณ์ต่อผู้เล่น ที่สะดวก เสถียรที่สุด รองรับทั้งมือถือ และ
                        คอมพิวเตอร์ อีกทั้งยังมีระบบฝากถอนรวดเร็ว ทำให้เว็บที่ทีมงานดูแลและพัฒนา
                        เป็นที่นิยมแพร่หลายจนถึงทุกวันนี้ ซึ่งผู้เล่นอยากจะแทง หวยยี่กี ที่มีให้ลุ้นรวยทั้งวัน
                        รวมทั้งหวยหุ้นทั้งในและต่างประเทศ หวยลาว และหวยอื่นๆ อีกมากมาย
                        ต้องนึกถึง เราเป็นเว็บแรกแน่นอนโปรโมชั่นพิเศษสำหรับสมาชิกใหม่
                        และสิทธิพิเศษมากมาย แจกเครดิตฟรีอย่างต่อเนื่อง
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 dis-non-PC">
            <div class="background-girl-M col-12 " style="">
                <div class="font-crow">
                    AMB Lottoแทงหวย<div class="font-in">ออนไลน์ 24 ชั่วโมง</div>
                </div>
                <div class="col-12 displayqr">
                    <div class="size">
                        การให้บริการทั้งคาสิโนออนไลน์ และ แทงหวยออนไลน์
                        นานนับ 10 ปีและไม่หยุด
                        พัฒนาเพื่อประสบการณ์
                        ต่อผู้เล่นที่สะดวก เสถียรที่สุด รองรับทั้งมือถือ
                        และคอมพิวเตอร์ อีกทั้งยังมีระบบฝากถอนรวดเร็ว
                        ทำให้เว็บที่ทีมงานดูแลและพัฒนา
                        เป็นที่นิยมแพร่หลาย
                        จนถึงทุกวันนี้ซึ่งผู้เล่นอยากจะแทง หวยยี่กี
                        ที่มีให้ลุ้นรวยทั้งวันรวมทั้งหวยหุ้นทั้งใน
                        และต่างประเทศ หวยลาว และหวยอื่นๆ อีกมากมาย
                        ต้องนึกถึง เราเป็นเว็บแรกแน่นอนโปรโมชั่นพิเศษ
                        สำหรับสมาชิกใหม่
                        และสิทธิพิเศษมากมาย
                        แจกเครดิตฟรีอย่างต่อเนื่อง
                    </div>
                </div>
            </div>
            <div class="col-12 dis-qrM">
                <img class="" src="{{ url('/images/Banner-Mo2.png') }}" alt="Image" />
            </div>
        </div>
        <div class="d-flex col-12 aos-init aos-animate row"
            style="padding: 0px 0px 70px 0px; justify-content: center; " data-aos="fade-up">
            <div class="col-11 col-md-7 col-xxl-6 gradient-contact">
                <div class="box-tex2">
                    <div class="box-tex-con">ฝาก - ถอน 24 ชม. </div>
                    <div class="box-tex-in">
                        ผ่านธนาคารชั้นนำของไทย โอนไว จ่ายเต็ม มั่นใจ 100%
                    </div>
                    <div class="">
                        <img class="tana" src="{{ url('/images/tana1.png') }}" alt="Image">
                        <img class="tana" src="{{ url('/images/tana2.png') }}" alt="Image">
                        <img class="tana" src="{{ url('/images/tana3.png') }}" alt="Image">
                    </div>
                    <div class="">
                        <img class="tana" src="{{ url('/images/tana4.png') }}" alt="Image">
                        <img class="tana" src="{{ url('/images/tana5.png') }}" alt="Image">
                        <img class="tana" src="{{ url('/images/tana6.png') }}" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-9 col-md-5 col-xxl-3 contract">
                <div class="box-tex">
                    <div class="box-tex-con">ติดต่อเรา</div>
                    <div class="box-tex-in">
                        สอบถามหรือแจ้งปัญหากับทางเว็บไซต์
                        ได้ตลอด 24 ชม.
                        <div>
                            02 - xxxxxxx
                        </div>
                        <div>
                            08x-xxxxxxx
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




@endsection
