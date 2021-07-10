<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="&TIVIRUS Senior Project Showcase — FUNC/ 2021 จุลนิพนธ์ของนักศึกษาวิชาเอกเว็บและสื่อโต้ตอบ คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยศิลปากร ปีการศึกษา 2563 ในแนวคิด เพิ่มภูมิดิจิทัล ผสมสร้างส่งมอบคุณค่า" />
    <title>Free Resource — &TIVIRUS SHOWCASE *FUNC/ 2021</title>

    @include('include.header')
    @include('include.header-fang')
</head>
<body class="bg-img">
@include('include.menu')

<div class="container font-ibm text-light">

    @include('include.bubble')
    <div class="row" style="position: relative; z-index: 5">
        <div class="icon_zone text-center">
            <div class="txt w-100">
                <h2>FREE RESOURCE</h2>
            </div>
        </div>
        <a class="col-12" href="{{ route('index') }}">
            <div class="txt-back">
                <img src="{{ asset('assets/images/back.png') }}">
                BACK TO HOME PAGE
                <div class="line-gradient-back"></div>
            </div>
        </a>
        <div class="col-12 overflow-hidden">
            <div class="row">
                <div class="col-4 col-md-4 col-lg-4 float-left px-5"></div>
                <div class="col-2 col-md-2 col-lg-2 float-left px-5">
                    <a href="?p=font" class="text-decoration-none">
                        <div class="txt-normal" style="width: auto">
                            <span class="{{ $p != 'wallpaper' ? 'active' : '' }}">FONT</span>
                            @if($p != 'wallpaper')<img class="float-right" style="margin: -2px 0 0 15px;" src="{{ asset('assets/images/circle.png') }}">@endif
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-6 col-lg-6 float-left px-5">
                    <a href="?p=wallpaper" class="text-decoration-none">
                        <div class="txt-normal" style="width: auto">
                            <span class="{{ $p == 'wallpaper' ? 'active' : '' }}">WALLPAPER</span>
                            @if($p == 'wallpaper')<img class="float-right" style="margin: -2px 0 0 15px;" src="{{ asset('assets/images/circle.png') }}">@endif
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12">
            @if($p != 'wallpaper')
                <div class="row">
                    @forelse($fonts as $font)
                    <div class="col-4 my-5">
                        <div class="w-100 px-5">
                            <img class="rounded-circle" src="{{ asset($font->img) }}" alt="{{ $font->title }}" style="width: 100%">
                            <p class="ibm-bold mt-3 mb-0">{{ $font->title }}</p>
                            <p class="txt-normal mt-0">by {{ $font->student->firstname }} {{ $font->student->lastname }}</p>
                            <a href="{{ route('resource.download') }}?url={{ $font->download_url }}">
                                <button class="button-curve">DOWNLOAD FONT</button>
                            </a>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
            @else
            @endif
        </div>
    </div>
    @include('include.footer')
</div>

@include('include.analysis')

</body>
</html>
