<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="&TIVIRUS Senior Project Showcase — FUNC/ 2021 จุลนิพนธ์ของนักศึกษาวิชาเอกเว็บและสื่อโต้ตอบ คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยศิลปากร ปีการศึกษา 2563 ในแนวคิด เพิ่มภูมิดิจิทัล ผสมสร้างส่งมอบคุณค่า" />

    <title>Contacts — &TIVIRUS SHOWCASE *FUNC/ 2021</title>
    @include('include.header')
    @include('include.header-song')

</head>

<body>

<section id="header">

</section>

<section id=content>
    @include('include.menu')
    <div class="bg container">

        <div class="row">
            <div class="icon_zone">
                <div class="txt">
                    <h2>CONTACT</h2>
                </div>
            </div>

            @include('include.bubble')

            <div class="container txt-center">

                <div class="row pt-5">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm text-span-center">SOCIAL NETWORKS <img src="{{ asset('assets/images/circle.png') }}"></div>
                            <div class="col-sm text-span-center">EXHIBITION & SHOWCASE <img src="{{ asset('assets/images/circle.png') }}"></div>
                        </div>
                    </div>

                    <div class="col-sm">

                        <div class="txt-span-center-small"><a href="https://fb.com/funcslash">
                                <img class="icon-size" src="{{ asset('assets/images/icon-facebook.png') }}">facebook.com/funcslash/</a></div>

                        <div class="txt-span-center-small"><a href="https://instagram.com/funcslash">
                                <img class="icon-size" src="{{ asset('assets/images/icon-ig.png') }}">instagram.com/funcslash/</a></div>

                        <div class="txt-span-center-small"><a href="https://twitter.com/funcslash">
                                <img class="icon-size" src="{{ asset('assets/images/icon-tw.png') }}">twitter.com/funcslash/</a></div>

                        <div class="txt-span-center-small"><a href="https://bit.ly/ytfuncslash">
                                <img class="icon-size" src="{{ asset('assets/images/icon-youtube.png') }}">bit.ly/ytfuncslash</a></div>

                        <div class="txt-span-center-small"><a href="https://tiktok.com/@funcslash">
                                <img class="icon-size" src="{{ asset('assets/images/icon-tiktok.png') }}">tiktok.com/@funcslash/</a></div>

                        <div class="txt-span-center-small"><a href="https://medium.com/funcslash">
                                <img class="icon-size" src="{{ asset('assets/images/icon-m.png') }}">medium.com/funcslash/</a></div>

                    </div>



                    <div class="col-sm">

                        <div class="txt-span-center-small"><a href="https://www.ict.su.ac.th/func/extract/">ICTSUWEB#14 - ex;tract</a></div>

                        <div class="txt-span-center-small"><a href="https://www.ict.su.ac.th/func/shortcut/">ICTSUWEB#13 - SHORTCUT 13.5</a></div>

                        <div class="txt-span-center-small"><a href="https://www.ict.su.ac.th/func/2018/comeraam/">ICTSUWEB#12 - Comeraam 12.4</a></div>

                        <div class="txt-span-center-small"><a href="https://www.ict.su.ac.th/func/2017/portfolio/new_index.php">ICTSUWEB#11 - Ultra-Line 11.3</a></div>

                        <div class="txt-span-center-small"><a href="https://www.ict.su.ac.th/func/2016/">ICTSUWEB#10 - OATHLON 10.2</a></div>

                        <div class="txt-span-center-small"><a href="https://www.ict.su.ac.th/func/2015/">ICTSUWEB#09 - SURAROUND 9.1</a></div>

                    </div>


                </div>
            </div>

            @include('include.footer')

        </div> <!--row -->

    </div>

</section>


@include('include.analysis')
</body>
</html>
