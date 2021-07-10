<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DetailPerson</title>
    @include('include.header')
    @include('include.header-song')
</head>

<body>

<section id="header">
@include('include.menu')
</section>

<section id=content>
    <div class="bg container">
        <div class="row">

            <div class="icon_zone">
                <div class="txt">
                    <h2>{{ $list->firstname }} {{ $list->lastname }} ({{ $list->nickname }})</h2>
                </div>
            </div>

            @include('include.bubble')

            <div class="container">
                <div class="row">

                    <div class="box-left col-sm">
                        <div class="txt-span">DEFENDERS DETAIL</div>

                        <div class="tran-curve">

                            <img class="img-curve img-fluid gradient-curve" src="{{ asset($list->img) }}">
                        </div>
                    </div>


                    <div class="box-right col-sm">
                        <div class="text-span">{{ $list->firstname_th }} {{ $list->lastname_th }} ({{ $list->nickname_th }})
                            <div class="line-gradients"></div>
                        </div>

                        <div class="text-span">Student ID : {{ $list->sid }}
                            <div class="line-gradientes"></div>
                        </div>

                        <div class="text-span"><img class="img-icon img-fluid" src="{{ asset('assets/images/icon-facebook.png') }}"> : {{ $list->fb }} </div>
                        <div class="text-span"><img class="img-icon img-fluid" src="{{ asset('assets/images/icon-mail.png') }}"> : {{ $list->email }}</div>

                        <a href="{{ url($list->portfolio) }}" target="_blank">
                            <button class="button-curve">PORTFOLIO (PDF)</button>
                        </a>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="box-left col-sm">

                        <div class="txt-span">PROJECT OWNER</div>

                        <img class="img-curve img-fluid" src="{{ asset($list->project->logo) }}">
                    </div>

                    <div class="box-right col-sm">

                        <div class="icon_zone">
                            <div class="txt" style="margin-left:10px;text-align: left;">
                                <h2>{{ $list->project->nickname }}</h2>
                            </div>
                        </div>
                        <div class="text-spans">{{ $list->project->name }}</div>
                        <div class="text-spans">{{ $list->project->name_th }}</div>
                        <a href="{{ route('project.show', $list->project->code) }}">
                            <button class="button-curve">PROJECT DETAIL</button>
                        </a>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="box-left col-sm">
                        <div class="txt-span">MORE DEFENDERS FROM &TIVIRUS</div>
                        <a href="{{ route('defender.index') }}">
                            <div class="txt-right" style="position: relative; z-index: 5 !important;">VIEW ALL
                                <div class="line-gradient"></div>
                            </div>
                        </a>
                        <div class="container">
                            <div class="row w-100">
                                @forelse($randomLists as $rand)
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                                        <a href="{{ route('defender.show', [$rand->sid, $rand->nickname]) }}}" >
                                        <div id="change-img">
                                            <div class="tran-curves"></div>
                                                <img class="img-curves img-fluid gradient-curves copy-img" src="{{ asset($rand->img_art) }}" />
                                                <img class="img-curves img-fluid gradient-curves real-img" src="{{ asset($rand->img) }}" />
                                        </div>
                                        </a>
                                        <div class="paint-icon">
                                            <a href="{{ asset($rand->art_url) }}" target="_blank">
                                                <img src="{{ asset('assets/images/paint.png') }}">
                                            </a>
                                        </div>
                                        <div class="txt-under">
                                            <div class="text-spans">{{ $rand->firstname }} {{ $rand->lastname }}</div>
                                            <div class="text-spans">{{ $rand->role_name }}</div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12">Empty.</div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            @include('include.footer')

        </div>
    </div>
</section>

@include('include.analysis')

</body>
</html>
