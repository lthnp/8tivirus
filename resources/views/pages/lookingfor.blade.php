<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="&TIVIRUS Senior Project Showcase — FUNC/ 2021 จุลนิพนธ์ของนักศึกษาวิชาเอกเว็บและสื่อโต้ตอบ คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยศิลปากร ปีการศึกษา 2563 ในแนวคิด เพิ่มภูมิดิจิทัล ผสมสร้างส่งมอบคุณค่า" />
    <title>Looking for @if($type == 2) Design @elseif($type == 3) D&P @else Programing @endif — &TIVIRUS SHOWCASE *FUNC/ 2021</title>
    @include('include.header-fang')

</head>

<body class="bg-img">

@include('include.menu')
    <div class="container font-ibm  text-light">
        @include('include.bubble')
        <div class="row">
            <div class=" col-12 ">
                <div class="d-flex justify-content-center arrow-ani">
                    <h1 class="ibm-bold pt-4 pb-4">LOOKING FOR ?</h1>
                </div>
            </div>
            <div class=" col-12 back-pad">
                <a href="{{ route('index') }}">
                    <div class="txt-back">
                        <img src="{{ asset('assets/images/back.png') }}">
                        BACK TO HOME PAGE
                        <div class="line-gradient-back"></div>
                    </div>
                </a>
            </div>

            <!-- icon -->
            <div class=" col-12 pt-3 pb-3  d-flex flex-md-row flex-column  justify-content-center align-items-center ">
                <div class=" col-12 col-md-4 p-3 p-md-0">
                    <div class="d-flex flex-column text-center justify-content-center align-items-center text-show ">
                        <div class=" test bg-light rounded-circle d-flex justify-content-center align-items-center ">
                            <i class="fa fa-code fa-2x text-light bg-dark rounded icon-set"></i>
                        </div>
                        <a href="?type=1" class="text-decoration-none {{ $type == 1 ? 'active' : 'text-white' }}">
                            <p class="m-0 p-0 pt-3">5 Projects List</p>
                            <div class="line-under {{ $type == 1 ? 'active' : '' }}">
                                <p class="m-0 p-0 "> Focus on Programming</p>
                            </div>
                            <p class="m-0 p-0"> (Staff Pick) </p>
                        </a>
                    </div>
                </div>

                <div class=" col-12 col-md-4 p-3 p-md-0">
                    <div class="d-flex flex-column text-center justify-content-center align-items-center text-show ">
                        <div class=" test bg-light rounded-circle d-flex justify-content-center align-items-center ">
                            <i class="fa fa-paint-brush fa-2x text-dark "></i>
                        </div>
                        <a href="?type=2" class="text-decoration-none {{ $type == 2 ? 'active' : 'text-white' }}">
                            <p class="m-0 p-0 pt-3">7 Projects List</p>
                            <div class="line-under2 {{ $type == 2 ? 'active' : '' }}">
                                <p class="m-0 p-0">Focus on Design</p>
                            </div>
                            <p class="m-0 p-0"> (Staff Pick)</p>
                        </a>

                    </div>
                </div>
                <div class=" col-12 col-md-4 p-3 p-md-0">
                    <div class="d-flex flex-column text-center justify-content-center align-items-center text-show ">
                        <div class=" test bg-light rounded-circle d-flex justify-content-center align-items-center ">
                            <i class="fa fa-stethoscope fa-2x text-light bg-dark rounded icon-set"></i>
                        </div>
                        <a href="?type=3" class="text-decoration-none {{ $type == 3 ? 'active' : 'text-white' }}">
                            <p class="m-0 p-0 pt-3">9 Projects List</p>
                            <div class="line-under3 {{ $type == 3 ? 'active' : '' }}">
                                <p class="m-0 p-0">Focus on Both D&P</p>
                            </div>
                            <p class="m-0 p-0">(Staff Pick)</p>
                        </a>

                    </div>
                </div>

            </div>
            @forelse($lists as $key=>$list)
                @if($key%2 == 0)
                    <a href="{{ route('project.show', $list->code) }}" class="text-decoration-none text-white">
                        <div class="col-12 d-flex flex-row pt-5">
                            <div class="col-8  rounded-project d-flex align-items-end justify-content-start position-relative ">

                                <img src="@if($type == 2) {{ asset($list->design_img) }} @elseif($type == 3) {{ asset($list->img) }} @else {{ asset($list->dev_img) }} @endif" alt="{{ $list->nickname }}" class="img-set position-absolute">

                                <div class="bg-liner position-absolute"></div>

                                <div class=" d-flex flex-column p-4 position-absolute ">
                                    <h2 class="m-0" style="font-size: 16px;">Category : {{ $list->category_name }}</h2>
                                    <p style="font-size: 24px; font-weight: 400;">{{ $list->nickname }}</p>
                                </div>
                            </div>
                            &nbsp;
                            <div class="col-4 bg-info rounded-person d-flex d-flex align-items-end justify-content-start position-relative">
                                @foreach($list->students as $key=>$student)
                                    @if(count($list->students) == 1)
                                        <img src="{{ $student->img }}" alt="{{ $student->nickname }}" class="img-set-person photo-back">
                                    @elseif(count($list->students) == 2)
                                        <img src="{{ $student->img }}" alt="{{ $student->nickname }}" class="img-set-person photo-back" style="width: 50%; {{ $key == 0 ? 'border-radius: 0px;' : '' }}">
                                    @else
                                        <img src="{{ $student->img }}" alt="{{ $student->nickname }}" class="img-set-person photo-back" style="width: 33.33%; {{ $key < 2 ? 'border-radius: 0px;' : '' }}">
                                    @endif
                                @endforeach

                                <div class=" d-flex flex-column p-4 position-absolute ">
                                    <h2 class="m-0" style="font-size: 16px;">Project by</h2>
                                    @foreach($list->students as $student)
                                        <p class="m-0 b-0 text-uppercase" style="font-size: 20px; font-weight: 600;">{{ $student->firstname }} {{ $student->lastname }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </a>
                @else
                    <a href="{{ route('project.show', $list->code) }}" class="text-decoration-none text-white">
                        <div class="col-12 d-flex flex-row pt-5">
                            <div class="col-4  rounded-person d-flex d-flex align-items-end justify-content-start position-relative">
                                @foreach($list->students as $key=>$student)
                                    @if(count($list->students) == 1)
                                        <img src="{{ $student->img }}" alt="{{ $student->nickname }}" class="img-set-person-2 photo-back">
                                    @elseif(count($list->students) == 2)
                                        <img src="{{ $student->img }}" alt="{{ $student->nickname }}" class="img-set-person-2 photo-back" style="width: 50%; {{ $key != 0 ? 'border-radius: 0px;' : '' }}">
                                    @else
                                        <img src="{{ $student->img }}" alt="{{ $student->nickname }}" class="img-set-person-2 photo-back" style="width: 33.33%; {{ $key != 0 ? 'border-radius: 0px;' : '' }}">
                                    @endif
                                @endforeach

                                <div class=" d-flex flex-column p-4 position-absolute ">
                                    <h2 class="m-0" style="font-size: 16px;">Project by</h2>
                                    @foreach($list->students as $student)
                                        <p class="m-0 b-0 text-uppercase" style="font-size: 20px; font-weight: 600;">{{ $student->firstname }} {{ $student->lastname }}</p>
                                    @endforeach
                                </div>
                            </div>
                            &nbsp;
                            <div class="col-8  rounded-project d-flex align-items-end justify-content-end position-relative ">
                                <img src="@if($type == 2) {{ asset($list->design_img) }} @elseif($type == 3) {{ asset($list->img) }} @else {{ asset($list->dev_img) }} @endif" alt="" class="img-set-2 position-absolute">
                                <div class="bg-liner-2 position-absolute"></div>

                                <div class=" d-flex flex-column p-4 position-absolute  justify-content-end align-items-end ">
                                    <h2 class="m-0" style="font-size: 0.75rem; font-weight: bold;">Category : Supporting Businesses in Growing</h2>
                                    <p style="font-size: 1.125rem; font-weight: 600;">LALA NOTE</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endif
            @empty
                <div class="col-12 d-flex flex-row pt-5"><p>Empty.</p></div>
            @endforelse
            @include('include.footer')

        </div>
    </div>
@include('include.analysis')
</body>

</html>
