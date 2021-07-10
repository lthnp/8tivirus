<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="&TIVIRUS Senior Project Showcase — FUNC/ 2021 จุลนิพนธ์ของนักศึกษาวิชาเอกเว็บและสื่อโต้ตอบ คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยศิลปากร ปีการศึกษา 2563 ในแนวคิด เพิ่มภูมิดิจิทัล ผสมสร้างส่งมอบคุณค่า" />

    <title>21 Projects — &TIVIRUS SHOWCASE *FUNC/ 2021</title>
    @include('include.header-song')

</head>

<body>

<section id="header">

</section>

<section id=content>
    <div class="bg container">
        <div class="row">

            <div class="icon_zone">
                <div class="txt">
                    <h2>21 PROJECTS</h2>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="bubble-conrol container">

                        <div class="bubble-1">
                            <img class="img-responsive" src="{{asset('assets/images/bubble.png')}}">
                        </div>
                        <div class="bubble-2">
                            <img class="img-responsive" src="{{asset('assets/images/bubble2.png')}}">
                        </div>
                        <div class="bubble-3">
                            <img class="img-responsive" src="{{asset('assets/images/bubble3.png')}}">
                        </div>
                        <div class="bubble-4">
                            <img class="img-responsive" src="{{asset('assets/images/bubble4.png')}}">
                        </div>
                        <div class="bubble-5">
                            <img class="img-responsive" src="{{asset('assets/images/bubble5.png')}}">
                        </div>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="nav-menu">
                        <a href="?category=0" class="col-3 {{ $category == 0 ? 'active' : '' }}">All Project (21)</a>
                        <a href="?category=1" class="col-3 {{ $category == 1 ? 'active' : '' }}">Life-Quality Improvements (3)</a>
                        <a href="?category=4" class="col-4 {{ $category == 4 ? 'active' : '' }}">Supporting Businesses in Growing (10)</a>
                        <a href="?category=3" class="col-3 {{ $category == 3 ? 'active' : '' }}">Creative Media Supporting <br>Digital Education (5)</a>
                        <a href="?category=2" class="col-3 {{ $category == 2 ? 'active' : '' }}">Digital Technology Improves <br>Well-Being (3)</a>
                        <div class="col-4"></div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    @forelse($lists as $list)
                        <div class="col-sm-4" style="margin-bottom: 50px">
                            <a href="{{ route('project.show', $list->code) }}">
                                <div class="tran-box"></div>
                                <img class="img-rect" width="278" height="157" src="{{ asset($list->img) }}" style="object-fit: cover"/>
                            </a>
                            <div class="line-under"></div>
                            <div class="txt-unders mt-3">
                                <div class="texts-title-span">{{ $list->nickname }}</div>
                                <div class="texts-span">{{ $list->category_name }}</div>
                            </div>
                        </div>
                    @empty
                        <div class="col-sm-4"><p>Empty.</p></div>

                    @endforelse



                </div>
            </div>


        </div>
    </div>

    @include('include.footer')
</section>


</body>
</html>
