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
        <a class="col-2" href="{{ route('index') }}">
            <div class="txt-back">
                <img src="{{ asset('assets/images/back.png') }}">
                BACK TO HOME PAGE
                <div class="line-gradient-back"></div>
            </div>
        </a>
        <div class="col-10"></div>
        <div class="col-12 overflow-hidden">
            <div class="row">
                <div class="col-4 col-md-4 col-lg-4 px-5"></div>
                <div class="col-2 col-md-2 col-lg-2 px-5">
                    <a href="?p=font" class="text-decoration-none">
                        <div class="txt-normal" style="width: auto">
                            <span class="{{ $p != 'wallpaper' ? 'active' : '' }}">FONT</span>
                            @if($p != 'wallpaper')<img class="float-right" style="margin: -2px 0 0 15px;" src="{{ asset('assets/images/circle.png') }}">@endif
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-6 col-lg-6 px-5">
                    <a href="?p=wallpaper" class="text-decoration-none">
                        <div class="txt-normal" style="width: auto">
                            <span class="{{ $p == 'wallpaper' ? 'active' : '' }}">WALLPAPER</span>
                            @if($p == 'wallpaper')<img class="float-right" style="margin: -2px 0 0 15px;" src="{{ asset('assets/images/circle.png') }}">@endif
                        </div>
                    </a>
                </div>
                @if($p == 'wallpaper')
                    <div class="col-8 px-5">
                        <div class="row pt-5">
                            <div class="pt-3 col-2">DEVICE : </div>
                            <a href="?p=wallpaper&type=1" class="pt-3 col-2 text-decoration-none">
                                <span class="{{ $type != 2 && $type != 3 && $type != 4 ? 'active' : 'text-white' }}">ANDROID</span>
                                @if($type != 2 && $type != 3 && $type != 4)<img class="float-right" style="margin: -2px 0 0 10px;" src="{{ asset('assets/images/circle.png') }}">@endif
                            </a>
                            <a href="?p=wallpaper&type=2" class="pt-3 col-2 text-decoration-none">
                                <span class="{{ $type == 2 ? 'active' : 'text-white' }}">IPHONE</span>
                                @if($type == 2)<img class="float-right" style="margin: -2px 0 0 10px;" src="{{ asset('assets/images/circle.png') }}">@endif
                            </a>
                            <a href="?p=wallpaper&type=3" class="pt-3 col-2 text-decoration-none">
                                <span class="{{ $type == 3 ? 'active' : 'text-white' }}">DESKTOP</span>
                                @if($type == 3)<img class="float-right" style="margin: -2px 0 0 10px;" src="{{ asset('assets/images/circle.png') }}">@endif
                            </a>
                            <a href="?p=wallpaper&type=4" class="pt-3 col-2 text-decoration-none">
                                <span class="{{ $type == 4 ? 'active' : 'text-white' }}">TABLET</span>
                                @if($type == 4)<img class="float-right" style="margin: -2px 0 0 10px;" src="{{ asset('assets/images/circle.png') }}">@endif
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="mt-3 px-5">
                                @if($type == 2)
                                    <a href="{{ route('resource.download') }}?url=resource/downloads/iphone-wallpapers.zip" class="text-decoration-none">
                                        <button class="p-0 button-curve">DOWNLOAD ALL</button>
                                    </a>
                                @elseif($type == 3)
                                    <a href="{{ route('resource.download') }}?url=resource/downloads/desktop-wallpapers.zip" class="text-decoration-none">
                                        <button class="p-0 button-curve">DOWNLOAD ALL</button>
                                    </a>
                                @elseif($type == 4)
                                    <a href="{{ route('resource.download') }}?url=resource/downloads/tablet-wallpapers.zip" class="text-decoration-none">
                                        <button class="p-0 button-curve">DOWNLOAD ALL</button>
                                    </a>
                                @else
                                    <a href="{{ route('resource.download') }}?url=resource/downloads/android-wallpapers.zip" class="text-decoration-none">
                                        <button class="p-0 button-curve">DOWNLOAD ALL</button>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-12 mt-4">
            @if($p != 'wallpaper')
                <div class="row">
                    @forelse($fonts as $font)
                    <div class="col-4 my-5">
                        <div class="w-100 px-5">
                            <img class="rounded-circle" src="{{ asset($font->img) }}" alt="{{ $font->title }}" style="width: 100%">
                            <p class="ibm-bold mt-3 mb-0">{{ $font->title }}</p>
                            <p class="txt-normal mt-0">by {{ $font->student->firstname }} {{ $font->student->lastname }}</p>
                            <a href="{{ route('resource.download') }}?url={{ $font->download_url }}">
                                <button class="button-curve">DOWNLOAD</button>
                            </a>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
            @else
                <div class="row pro-olw py-5">
                    <div class="col">
                        <div class="bg-sponser">
                            <div class="swiper-container" id="slider_more-product">
                                <div class="swiper-wrapper">
                                    @forelse($wallpapers1 as $wallpaper)
                                        <div class="swiper-slide px-5 mb-2">
                                            <img style="border-radius: 20px;" src="{{ asset($wallpaper->download_url) }}">
                                            <p class="ibm-bold mt-3 mb-0">{{ $wallpaper->title }}</p>
                                            <p class="txt-normal mt-0">by Visual Desifn Team</p>
                                            <a href="{{ route('resource.download') }}?url={{ $wallpaper->download_url }}">
                                                <button class="button-curve">DOWNLOAD</button>
                                            </a>
                                        </div>
                                    @empty
                                        <p>Empty.</p>
                                    @endforelse
                                </div>
                                <div class="w-100 py-2"></div>
                                <div class="swiper-pagination active"></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-pagination active"></div>
                    </div>
                </div>
            <hr>
                <div class="row pro-olw py-5">
                    <div class="col">
                        <div class="bg-sponser">
                            <div class="swiper-container" id="slider_more-product">
                                <div class="swiper-wrapper">
                                    @forelse($wallpapers2 as $wallpaper)
                                        <div class="swiper-slide px-5 mb-2">
                                            <img style="border-radius: 20px;" src="{{ asset($wallpaper->download_url) }}">
                                            <p class="ibm-bold mt-3 mb-0">{{ $wallpaper->title }}</p>
                                            <p class="txt-normal mt-0">by Visual Desifn Team</p>
                                            <a href="{{ route('resource.download') }}?url={{ $wallpaper->download_url }}">
                                                <button class="button-curve">DOWNLOAD</button>
                                            </a>
                                        </div>
                                    @empty
                                        <p>Empty.</p>
                                    @endforelse
                                </div>
                                <div class="w-100 py-2"></div>
                                <div class="swiper-pagination active"></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-pagination active"></div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    @include('include.footer')
</div>

@include('include.analysis')

<script src="{{ asset('assets/plugins/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('assets/plugins/prism/prism.js') }}"></script>

<script>
    var swiper = new Swiper('#slider_more-product', {
        slidesPerView: 3,
        spaceBetween: 10,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },


        breakpoints: {
            640: {
                slidesPerView: 3,
                spaceBetween: 2,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 2,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
        },

    });
</script>
</body>
</html>
