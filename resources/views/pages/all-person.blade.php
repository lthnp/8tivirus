<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ count($lists) }} Defenders — &TIVIRUS SHOWCASE *FUNC/ 2021</title>

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
                    <h2>MORE DEFENDERS FROM &TIVIRUS</h2>
                </div>
            </div>

            <div class="text-subtitle">Many Skill, Different and Creative</div>

            @include('include.bubble')

            <div class="container">
                <div class="row">
                    @forelse($lists as $list)
                        <div class="col-sm-4">
                            <a href="{{ route('defender.show', [$list->sid, $list->nickname]) }}}" >
                            <div id="change-img">
                                    <div class="tran-curves"></div>
                                    <img class="img-curves img-fluid gradient-curves copy-img" src="{{ asset($list->img_art) }}" />
                                    <img class="img-curves img-fluid gradient-curves real-img" src="{{ asset($list->img) }}" />
                            </div>
                            </a>
                            <div class="paint-icon">
                                <a href="{{ asset($list->art_url) }}" target="_blank">
                                    <img src="{{ asset('assets/images/paint.png') }}">
                                </a>
                            </div>
                            <div class="txt-under">
                                <div class="text-spans">{{ $list->firstname }} {{ $list->lastname }}</div>
                                <div class="text-spans">{{ $list->role_name }}</div>
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

</section>

@include('include.analysis')
</body>
</html>
