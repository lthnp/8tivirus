<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="&TIVIRUS Senior Project Showcase — FUNC/ 2021 จุลนิพนธ์ของนักศึกษาวิชาเอกเว็บและสื่อโต้ตอบ คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยศิลปากร ปีการศึกษา 2563 ในแนวคิด เพิ่มภูมิดิจิทัล ผสมสร้างส่งมอบคุณค่า" />
    <title>{{ $list->nickname }} {{ $list->name_th }} by {{ $list->students[0]->firstname.' '.$list->students[0]->lastname }}{{ count($list->students) > 1 ? ', '.$list->students[1]->firstname.' '.$list->students[1]->lastname : '' }}{{ count($list->students) > 2 ? ', '.$list->students[2]->firstname.' '.$list->students[2]->lastname : '' }} — &TIVIRUS SHOWCASE *FUNC/ 2021</title>

    @include('include.header-real')
</head>

<body>
    <main class="wrapper bg">
        <section>
            <div class="box-lodo-main">
                <a href="">
                    <img class="img-logo-small" src="https://www.ict.su.ac.th/func/&amp;tivirus/assets/images/logo.png">
                </a>
            </div>
        </section>

        <section class="sec-appilcation">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-2">
                        <img width="130" height="130" class="rounded-circle" src="{{ asset($list->logo) }}" alt="{{ $list->nickname }}">
                    </div>
                    <div class="col-8">
                        <div class="box-name">
                            <div class="arrow-ani">
                                <div class="name-txt-h">
                                    {{ $list->nickname }}
                                </div>
                            </div>
                            <div class="name-eng pt-3">
                                {{ $list->name }}
                            </div>
                            <div class="name-thai pt-2">
                                {{ $list->name_th }}
                            </div>
                            <div class="name-app pt-2">
                                {{ $list->description }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec-tec">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-2 overflow-hidden">
                        @include('include.tech')
                    </div>
                    <div class="col-8">
                        <div class="txt-tec">ความสามารถ</div>
                        <div class="display-block overflow-hidden">
                            <div class="w-25 float-left">
                                <div class="pb-4">
                                    <button id="func1" type="button" class="buttom-time"><i class="fas fa-play icon-play"></i><i class="fas fa-play icon-play"></i>
                                        {{ $list->detail->func1_start/60 > 10 ? '' : '0' }}{{ intval($list->detail->func1_start/60) }}
                                        :{{ $list->detail->func1_start%60 > 10 ? '' : '0' }}{{ $list->detail->func1_start%60 }}
                                    </button>
                                </div>
                            </div>
                            <div class="w-75 float-left">
                                <div class="txt-func1 pt-2">
                                    {{ $list->detail->func1 }}
                                </div>
                            </div>
                        </div>
                        <div class="display-block overflow-hidden">
                            <div class="w-25 float-left">
                                <div class="pb-4">
                                    <button id="func2" type="button" class="buttom-time"><i class="fas fa-play icon-play"></i><i class="fas fa-play icon-play"></i>
                                        {{ $list->detail->func2_start/60 > 10 ? '' : '0' }}{{ intval($list->detail->func2_start/60) }}
                                        :{{ $list->detail->func2_start%60 > 10 ? '' : '0' }}{{ $list->detail->func2_start%60 }}
                                    </button>
                                </div>
                            </div>
                            <div class="w-75 float-left">
                                <div class="txt-func1 pt-2">
                                    {{ $list->detail->func2 }}
                                </div>
                            </div>
                        </div>
                        <div class="display-block overflow-hidden">
                            <div class="w-25 float-left">
                                <div class="pb-4">
                                    <button id="func3" type="button" class="buttom-time"><i class="fas fa-play icon-play"></i><i class="fas fa-play icon-play"></i>
                                        {{ $list->detail->func3_start/60 > 10 ? '' : '0' }}{{ intval($list->detail->func3_start/60) }}
                                        :{{ $list->detail->func3_start%60 > 10 ? '' : '0' }}{{ $list->detail->func3_start%60 }}
                                    </button>
                                </div>
                            </div>
                            <div class="w-75 float-left">
                                <div class="txt-func1 pt-2">
                                    {{ $list->detail->func3 }}
                                </div>
                            </div>
                        </div>
                        <div class="display-block overflow-hidden">
                            <div class="box-name">
                                <div class="video-tutoral">
                                    <iframe width="100%" height="350px" border-radius="20px"
                                            src="https://www.youtube.com/embed/{{ $list->demo_url_code }}?modestbranding=1&autohide=1&showinfo=0&controls=0&start={{ $list->detail->func1_start }}&end={{ $list->detail->func1_stop }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            id="demo_vdo" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec-teacher">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-2">
                        <div class="txt-tec">อาจารย์ที่ปรึกษา :</div>
                    </div>
                    <div class="col-8">
                        <div class="txt-teacher">{{ $list->advisor }}</div>
                    </div>
                </div>
                <div class="row pro-olw">
                    <div class="col-2 col-lg-2">
                        <div class="txt-tec">เจ้าของผลงาน :</div>
                    </div>
                    @forelse($list->students as $key=>$student)
                        @if(count($list->students) > 2 && $key%2 == 0 && $key != 0)
                            <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                            </div>
                            <div class="col-12 py-2"></div>
                            <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                            </div>
                        @endif
                        <div class="col-4">
                            <div class="photo-us" style="width: 100px; height: 100px;">
                                <img class="rounded-circle" style="width: 100%; height: 100%; object-fit: cover" src="{{ asset($student->img) }}" alt="">
                            </div>
                            <div class="position">
                                {{ $student->role_name }}
                            </div>
                            <div class="my-name">
                                {{ $student->firstname }} {{ $student->lastname }}
                            </div>
                            <div class="my-e-mail">
                                {{ $student->email }}
                            </div>
{{--                            <a class="text-decoration-none" href="">--}}
{{--                                <div class="box-buttom-profile">--}}
{{--                                    <div class="buttom-profile">--}}
{{--                                        VIEW PROFILE--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
                        </div>
                    @empty
                        <p>ไม่พบข้อมูล</p>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="sec-interview">
            <div class="container">
                <div class="row pro-olw">
                    <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                        <div class="txt-tec">สัมภาษณ์ :</div>
                    </div>
                    @forelse($list->students as $key=>$student)
                        @if(count($list->students) > 2 && $key%2 == 0 && $key != 0)
                            <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                            </div>
                            <div class="col-12 py-2"></div>
                            <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                            </div>
                        @endif
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                            <div class="video-interview">
                                <iframe width="280px" height="280px" border-radius="20px"
                                        src="https://www.youtube.com/embed/{{ $student->interview_url_code }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>

                        </div>
                    @empty
                        <p>ไม่พบข้อมูล</p>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="sec-project-gallery">
            <div class="container">
                <div class="row pro-olw">
                    <div class="col col-lg-2 ">
                        <div class="txt-tec">คลังรูปภาพผลงาน :</div>
                    </div>
                    <div class="col">
                        <div class="bg-sponser">
                            <div class="swiper-container" id="slider_more-product">
                                <div class="swiper-wrapper">
                                    @forelse($list->screenshots as $screenshot)
                                    <div class="swiper-slide"><img src="{{ asset($screenshot->img) }}"></div>
                                    @empty
                                        <p>Empty.</p>
                                    @endforelse
                                </div>
                                <div class="swiper-pagination active"></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-pagination active"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="best-shot">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-4">
                        <div class="txt-tec">BEST SHOT</div>
                        <div class="my-code">
                            CODE SNIPPET EXAMPLE
                        </div>
                        <div class="my-code-dis">
                            {{ $list->detail->bs_code_description }}
                        </div>
                        <a class="text-decoration-none" href="{{ $list->detail->git }}" target="_blank">
                            <div class="box-buttom-gird">
                                <div class="buttom-gird">
                                    VIEW MORE ON GITHUB
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="box-codeding">
                            <div>
                                <pre><code class="language-php">{{ $list->detail->bs_code }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="best-shot-design">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-8">
                        <div class="box-best-design">
                            <img class="box-best-design-img" src="{{ asset($list->detail->bs_design) }}" alt="">
                        </div>
                    </div>
                    <div class="col-4 col-md-4">
                        <div class="txt-tec">BEST SHOT</div>
                        <div class="my-code">
                            DESIGN WORKS
                        </div>
                        <div class="my-code-dis">
                            {{ $list->detail->bs_design_description }}
                        </div>
                        <a class="text-decoration-none" href="{{ $list->detail->pinterest }}" target="_blank">
                            <div class="box-buttom-gird">
                                <div class="buttom-gird">
                                    REFERENCE PINTEREST BOARD
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec-persona">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-2 ">
                        <div class="txt-tec">PROJECT PERSONA</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-lg-2 ">
                        <div class="photo-persona">
                            <img class="rounded-circle"
                                 width="100"
                                 height="100"
                                 src="{{ asset($list->persona->img) }}" alt="{{ $list->persona->name }}">
                        </div>
                    </div>
                    <div class="col col-lg-2 ">
                        <div class="">
                            <div class="txt-h-n-persona">ชื่อ</div>
                            <div class="txt-persona">{{ $list->persona->name }}</div>
                            <div class="txt-h-persona">ตำแหน่ง</div>
                            <div class="txt-persona">{{ $list->persona->job }}</div>
                            <div class="txt-h-persona">อายุ</div>
                            <div class="txt-persona">{{ $list->persona->age }} ปี</div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="txt-h-n-persona">ประวัติ</div>
                        <div class="txt-background">{{ $list->persona->background }}</div>
                    </div>
                    <div class="col-4">
                        <div class="txt-h-n-persona">พฤติกรรม</div>
                        <div class="txt-behav">{{ $list->persona->identity1 }}</div>
                        <div class="">
                            <input type="range" class="form-range" min="0" max="5" step="1" id="customRange3" value="{{ $list->persona->identity1_score }}" disabled>
                        </div>
                        <div class="txt-behav">{{ $list->persona->identity2 }}</div>
                        <div class="">
                            <input type="range" class="form-range" min="0" max="5" step="1" id="customRange3" value="{{ $list->persona->identity2_score }}" disabled>
                        </div>
                        <div class="txt-behav">{{ $list->persona->identity3 }}</div>
                        <div class="">
                            <input type="range" class="form-range" min="0" max="5" step="1" id="customRange3" value="{{ $list->persona->identity3_score }}" disabled>
                        </div>
                        <div class="txt-behav">{{ $list->persona->identity4 }}</div>
                        <div class="">
                            <input type="range" class="form-range" min="0" max="5" step="1" id="customRange3" value="{{ $list->persona->identity4_score }}" disabled>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="sec-interesting">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="txt-inter">
                            @if(empty($list->reaction))
                                คุณมีความคิดเห็นว่าผลงานนี้มีความโดดเด่นในด้านใด ?
                            @elseif(empty($list->comment))
                                คุณต้องการให้คำแนะนำหรือบอกอะไรกับเราหรือไม่ ?
                            @else
                                คุณได้ให้ข้อเสนอแนะเรียบร้อยแล้ว
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    @if(empty($list->reaction))
                        <form id="react" class="bg-inter" action="{{ route('react.store', $list->id) }}" method="post" onsubmit="return reactSubmit()">
                            @csrf
                            <input type="number" name="project_id" value="{{ $list->id }}" hidden>
                            @if(empty($list->reaction))
                                <input type="number" name="react" value="0" onchange="reactSubmit()" hidden>
                                <div class="box-buttom-inters">
                                    <button id="react-design" type="submit" class="buttom-inters"><i class="fas fa-paint-brush"></i>&nbsp;โดดเด่นด้านออกแบบ</button>
                                </div>
                                <div class="box-buttom-inters">
                                    <button id="react-code" type="submit" class="buttom-inters"><i class="fas fa-code"></i>&nbsp;โดดเด่นด้านโค้ดดิ้ง</button>
                                </div>
                                <div class="box-buttom-inters">
                                    <button id="react-both" type="submit" class="buttom-inters"><i class="fas fa-border-all"></i>&nbsp;โดดเด่นด้านออกแบบและโค้ดดิ้ง</button>
                                </div>
                            @else
                                <input type="number" name="react" value="{{ $list->reaction->react }}" onchange="reactSubmit()" hidden>
                                <div class="box-buttom-inters">
                                    <button id="react-design" type="submit" class="{{ $list->reaction->react == 1 ? 'buttom-inters-active' : 'buttom-inters'}}"><i class="fas fa-paint-brush"></i>&nbsp;โดดเด่นด้านออกแบบ</button>
                                </div>
                                <div class="box-buttom-inters">
                                    <button id="react-code" type="submit" class="{{ $list->reaction->react == 2 ? 'buttom-inters-active' : 'buttom-inters'}}"><i class="fas fa-code"></i>&nbsp;โดดเด่นด้านโค้ดดิ้ง</button>
                                </div>
                                <div class="box-buttom-inters">
                                    <button id="react-both" type="submit" class="{{ $list->reaction->react == 3 ? 'buttom-inters-active' : 'buttom-inters'}}"><i class="fas fa-border-all"></i>&nbsp;โดดเด่นด้านออกแบบและโค้ดดิ้ง</button>
                                </div>
                            @endif
                        </form>
                    @else
                        @if(empty($list->comment) && empty($list->noComment))
                            <form id="react" class="bg-inter" action="{{ route('no.comment', $list->id) }}" method="post" @if($errors->has('message')) hidden @endif>
                                @csrf
                                <div class="box-buttom-inters">
                                    <button id="yes-btn" type="button" class="buttom-inters-active px-5">ใช่</button>
                                </div>
                                <div class="box-buttom-inters">
                                    <button id="no-btn" type="submit" class="buttom-inters px-5">ไม่</button>
                                </div>
                            </form>
                            <div id="comment-form" @if(!$errors->has('message')) hidden @endif>
                                <div class="bg-inter2">
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-arear">
                                                <form action="{{ route('comment.store', $list->id) }}" method="post">
                                                    @csrf
                                                    <input type="text" name="project_id" value="{{ $list->id }}" hidden>
                                                    <textarea name="message" class="form-control pad-box-are" id="exampleFormControlTextarea1" rows="3" placeholder="กรอกข้อความบอกพวกเราได้ที่นี่ . . ."></textarea>
                                                    <button id="submitFormBtn" type="submit" hidden></button>
                                                    @if($errors->has('message'))<small id="error-message" class="text-danger pt-5">{{ $errors->first('message') }}</small>@endif
                                                    <small id="error-message" class="text-danger pt-5" hidden>โปรดกรอกข้อความก่อนกดยืนยัน</small>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col"></div>
                                        <div class="col"></div>
                                        <div class="col testtest">
                                            <form action="{{ route('no.comment', $list->id) }}" method="post">
                                                @csrf
                                                <div class="box-buttom-inters2 ">
                                                    <button type="submit" class="buttom-inters">ยกเลิก</button>
                                                </div>
                                            </form>
                                            <div class="box-buttom-inters3 ">
                                                <button id="submitBtn" type="submit" class="buttom-inters-active">ส่ง</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div id="react" class="bg-inter">
                                <p class="txt-inter text-secondary pl-5" style="padding-top: 35px">ขอบคุณสำหรับข้อเสนอแนะและคำติชม</p>
                            </div>
                        @endif
                    @endif

                </div>
            </div>
        </section>

        @if(false)

            <section class="sec-more-form">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="txt-tec">MORE FROM &TIVIRUS</div>
                        </div>

                        <div class="col-sm-4">
                            <a class="text-decoration-none" href="">
                                <div class="txt-view-more">VIEW ALL</div>
                            </a>
                        </div>


                    </div>
                </div>
            </section>
            <section class="sec-more-project">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a class="text-decoration-none" href="">
                                <div class="grid-menu pad-21pro">
                                    <div class="box_eq">
                                        <span class="mirror"><img src="/assets/images/1projects.png" alt=""></span>
                                        <div class="txt21-pad">
                                            <div class="txt21">
                                                Production
                                            </div>
                                            <div class="txt21dis">
                                                Production
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="col">
                            <a class="text-decoration-none" href="">
                                <div class="grid-menu pad-21pro">
                                    <div class="box_eq">
                                        <span class="mirror"><img src="/assets/images/1projects.png" alt=""></span>
                                        <div class="txt21-pad">
                                            <div class="txt21">
                                                Production
                                            </div>
                                            <div class="txt21dis">
                                                Production
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col">
                            <a class="text-decoration-none" href="">
                                <div class="grid-menu pad-21pro">
                                    <div class="box_eq">
                                        <span class="mirror"><img src="/assets/images/1projects.png" alt=""></span>
                                        <div class="txt21-pad">
                                            <div class="txt21">
                                                Production
                                            </div>
                                            <div class="txt21dis">
                                                Production
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
            </section>
        @endif

        @include('include.footer')

    </main>

    @include('include.footer-js')
    <script src="{{ asset('assets/plugins/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/plugins/prism/prism.js') }}"></script>

    <script>
        $(document).ready(function (){
            $('#func1').click(function (){
                $('#demo_vdo').attr('src', 'https://www.youtube.com/embed/{{ $list->demo_url_code }}?modestbranding=1&autoplay=1&autohide=1&showinfo=0&controls=0&start={{ $list->detail->func1_start }}&end={{ $list->detail->func1_stop }}')
            });
            $('#func2').click(function (){
                $('#demo_vdo').attr('src', 'https://www.youtube.com/embed/{{ $list->demo_url_code }}?modestbranding=1&autoplay=1&autohide=1&showinfo=0&controls=0&start={{ $list->detail->func2_start }}&end={{ $list->detail->func2_stop }}')
            });
            $('#func3').click(function (){
                $('#demo_vdo').attr('src', 'https://www.youtube.com/embed/{{ $list->demo_url_code }}?modestbranding=1&autoplay=1&autohide=1&showinfo=0&controls=0&start={{ $list->detail->func3_start }}&end={{ $list->detail->func3_stop }}')
            });
        })
    </script>

    <script>
        $('#react-design').click(function (){
            $('input[name=react]').val(1)
        });
        $('#react-code').click(function (){
            $('input[name=react]').val(2)
        });
        $('#react-both').click(function (){
            $('input[name=react]').val(3)
        });
        $('#react-so').click(function (){
            $('input[name=react]').val(4)
        });
        $('#yes-btn').click(function (){
            $('input[name=react]').val(4)
        });
        $('#yes-btn').click(function (){
            $('#comment-form').removeAttr('hidden')
            $('#react').hide();
        });
        $('#submitBtn').click(function (){
            if($('textarea[name=message]').val()){
                $('#submitFormBtn').click();
            } else {
                $('#error-message').removeAttr('hidden')
            }
        });

        function submitForm(){
            return true;
        }

        function reactSubmit(){
            let react = $('input[name=react]').val()
            if(react >= 1 && react <= 4){
                return true;
            } else {
                return false;
            }
        }
    </script>

</body>

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
