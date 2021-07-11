<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('assets/favicon/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/favicon/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/scss/logo_hover.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/mouse-scroll.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/Link_menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/Home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/phone-mockup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/bubble_background.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/styles-most.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/delay.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fonts/font.css') }}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>&tivirus</title>

</head>
<body class="bg" style="background: #2A2A2A;">
<div class="wrapper" >
    <div class="container" >
        <div class="anchors"><ul></ul></div>
        <div class="row" >
            <div class="col" style="width: 90%;font-size: 80%;margin: 5%; margin-top: 2.5%; position: fixed;z-index: 99;">
                <a href="{{ route('index') }}" >
                    <img src="{{asset('assets/images/logo.png')}}" style="width: 6%; height: 100%; cursor: pointer; z-index: 99999;">
                </a>
{{--                <i class='bx bx-menu-alt-right' id="open" style="margin-top: 2.5%; float:right;margin-right: 10%;  font-size: 300%; color: white;background: none; z-index: 999999; cursor: pointer;"></i>--}}
            </div>

            <div class="container">
                <div class="row">

                    <nav id="overlay" class="over-lay">
                        <div class="col">
                            <button class="cross" id="close">
                                <div class="close-overlay"><i class='bx bx-x'></i></div>
                            </button>

                            <ul id="menubar" class="menu list-group" role="menubar" aria-orientation="vertical">
                                <li class="menu__item" ><a class="menu__link" href="#" role="menuitem" tabindex="-1">
                                        HOME</a>
                                </li>
                                <li class="menu__item" ><a class="menu__link" href="#" role="menuitem" tabindex="-1">
                                        PROJECTS LIST</a>
                                </li >
                                <li class="menu__item" ><a class="menu__link" href="#" role="menuitem" tabindex="-1">
                                        DEFENDERS LIST</a>
                                </li>
                                <li class="menu__item" >
                                    <a class="menu__link" href="#" role="menuitem" tabindex="-1">
                                        LOOKING FOR ?
                                    </a>
                                </li>
                                <li class="menu__item" ><a class="menu__link" href="#" role="menuitem" tabindex="-1">
                                        FREE RESOURCES</a>
                                </li>
                                <li class="menu__item" ><a class="menu__link" href="#" role="menuitem" tabindex="-1">
                                        INSIDER</a>
                                </li>
                                <li class="menu__item" ><a class="menu__link" href="#" role="menuitem" tabindex="-1">
                                        CONTACT</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <div class="bubble-1">
        <img src="{{ asset('assets/images/bubble.png') }}">
    </div>
    <div class="bubble-2">
        <img src="{{ asset('assets/images/bubble2.png') }}">
    </div>
    <div class="bubble-3">
        <img src="{{ asset('assets/images/bubble3.png') }}">
    </div>
    <div class="bubble-4">
        <img src="{{ asset('assets/images/bubble4.png') }}">
    </div>
    <div class="bubble-6">
        <img src="{{ asset('assets/images/bubble6.png') }}">
    </div>
    <main>
        <div class="row">
            <section data-anchor="Page 1" style="margin-top: 3%; overflow: hidden !important;">
                <section class="sec-21PROJECTS">
                    <div class="container">
                        <div class="row">
                            <div class="bubble-5">
                                <img src="{{ asset('assets/images/bubble5.png') }}">
                            </div>
                            <div class="col-6 bg-logo" style="z-index: 99;">
                                <img src="{{ asset('assets/images/hand_home.png') }}" class="hand">
                            </div>
                            <div class="col-6 bg-menu" style="margin-top: 5%; ">
                                <div class="text_menu" style=" margin-left: 10%; height: 100%;">
                                    <div class="icon_zone">
                                        <div class="txt text-end fw-bolder" style="font-size: 48px !important;">
                                            <a  class="dropbtn" style="text-decoration: none; transition: all 0.4s ease; color: #FEBDCD; cursor: pointer;" href="{{ route('project.index') }}">
                                                21 PROJECTS
                                            </a>
                                        </div>
                                    </div>

                                    <div class="icon_zone_line" style="z-index: 999;">
                                        <div class="txt">
                                            <p class="text-end fw-bolder">
                                                <a href="{{ route('project.index') }}?category=1" class="link_menu">
                                                    Life-Quality Improvements
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="icon_zone_line" style="z-index: 999; ">
                                        <div class="txt">
                                            <p class="text-end fw-bolder  ">
                                                <a href="{{ route('project.index') }}?category=2" class="link_menu">
                                                    Digital Technology Improves Well-Being
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="icon_zone_line" style="z-index: 999; ">
                                        <div class="txt">
                                            <p class="text-end fw-bolder  ">
                                                <a href="{{ route('project.index') }}?category=3" class="link_menu">
                                                    Creative Media Supporting Digital Education
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="icon_zone_line" style="z-index: 999; ">
                                        <div class="txt">
                                            <p class="text-end fw-bolder  ">
                                                <a href="{{ route('project.index') }}?category=4" class="link_menu">
                                                    Supporting Businesses in Growing
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="icon_zone">
                                        <div class="txt text-end fw-bolder" style="font-size: 48px;">

                                            <a href="{{ route('defender.index') }}" class="dropbtn-2" style="text-decoration: none; transition: all 0.4s ease; color: #FEBDCD; cursor: pointer;">
                                                31 DEFENDERS
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="center" style="margin-left: 5%; z-index: -99;">
                                <div class="photomoilehome" style="margin-top: -200px;">
                                        <iframe id="vdo" class="youtube-video" style="height: 54.5vh; width: auto; border-radius: 20px"
                                                src="https://www.youtube.com/embed/{{ $list->portrait_url_code }}?autoplay=1&loop=1&playlist={{ $list->portrait_url_code }}&autohide=1&showinfo=0&controls=0&mute=1"
                                                modestbranding="0"
                                                controls="0"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen=""></iframe>
                                    <!-- <div class="pxscreen"></div> -->
                                    <div class="flatscreen"></div>
                                </div>
                            </div>
                            <div class="scrolldownhere">
                                <img src="{{ asset('assets/images/scrolldown.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </section>

            </section>
        </div>


        <div class="row" style="overflow: hidden !important;">
            <section data-anchor="Page 2">
                <section class="sec-4project">
                    <div class="container">
                        <div class="row">
                            <div class="col" >
                                <div class="txt-4staff" style="margin-left: 40%;">
                                    <div class="icon_zone_page2" >
                                        4 PROJECTS STAFF PICK
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-lg-2 photo-pad">
                                <a href="{{ route('project.show', 'IN08') }}" class="text-decoration-none hover">
                                    <div class="photomoile">
                                        <img class="videoStaffPick" src="{{ asset('resource/images/tocsin.png') }}" alt="Tocsin" style="width: 75%; object-fit: cover">
                                        {{--                                    <iframe id="vdo1" class="videoStaffPick" src="https://www.youtube.com/embed/Cu2D13tNAZw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                                        <img class="mockupbest1" src="{{ asset('assets/images/mockup-phone.png') }}" alt="">

                                    </div>
                                    <div class="txt-staff">
                                        <div class="icon_zone_lineP2" >
                                            <div  class="NameProject"> TOCSIN</div>
                                        </div>
                                        <div class="detailProject">Life-Quality Improvements</div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-4 col-lg-2 photo-pad2">
                                <a href="{{ route('project.show', 'TW10') }}" class="text-decoration-none hover">
                                <div class="photomoile">
                                    <img class="videoStaffPick" src="{{ asset('resource/images/payoong.jpg') }}" alt="Payoong" style="width: 75%; object-fit: cover">
{{--                                    <iframe id="vdo2" class="videoStaffPick" src="https://www.youtube.com/embed/tzg0PIB-FyU?autoplay=1&loop=1&playlist=tzg0PIB-FyU&autohide=1&showinfo=0&controls=0&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                                    <img class="mockupbest2" src="{{ asset('assets/images/mockup-phone.png') }}" alt="" onclick="playVdo()">
                                </div>
                                <div class="txt-staff">
                                    <div class="icon_zone_lineP2" >
                                        <div  class="NameProject"> PAYOONG</div>
                                    </div>
                                    <div class="detailProject">Supporting Businesses<br> in Growing</div>
                                </div>
                                </a>
                            </div>

                            <div class="col-4 col-lg-2 photo-pad3">
                                <a href="{{ route('project.show', 'TW12') }}" class="text-decoration-none hover">
                                <div class="photomoile">
                                    <img class="videoStaffPick" src="{{ asset('resource/images/happyhunt.png') }}" alt="Happy Hunt" style="width: 75%; object-fit: cover">
{{--                                    <iframe id="vdo3" class="videoStaffPick" src="https://www.youtube.com/embed/11YHE6h9GBk?autoplay=1&loop=1&playlist=11YHE6h9GBk&autohide=1&showinfo=0&controls=0&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                                    <img class="mockupbest3" src="{{ asset('assets/images/mockup-phone.png') }}" alt="">
                                </div>
                                <div class="txt-staff">
                                    <div class="icon_zone_lineP2" >
                                        <div  class="NameProject"> HAPPY HUNT</div>
                                    </div>
                                    <div class="detailProject">Digital Technology<br> Improves Well-Being</div>
                                </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-2 photo-pad2">
                                <a href="{{ route('project.show', 'TW11') }}" class="text-decoration-none hover">
                                <div class="photomoile">
                                    <img class="videoStaffPick" src="{{ asset('resource/images/moodcloud.jpg') }}" alt="Mood Cloud" style="width: 75%; object-fit: cover">
{{--                                    <iframe id="vdo4" class="videoStaffPick" src="https://www.youtube.com/embed/4CuYyR2ENu8?autoplay=1&loop=1&playlist=4CuYyR2ENu8&autohide=1&showinfo=0&controls=0&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}

                                    <img class="mockupbest4" src="{{ asset('assets/images/mockup-phone.png') }}" alt="">
                                </div>
                                <div class="txt-staff">
                                    <div class="icon_zone_lineP2" >
                                        <div  class="NameProject"> MOOD CLOUD</div>
                                    </div>
                                    <div class="detailProject">Creative Media<br> Supporting Digital Education</div>
                                </div>
                                </a>
                            </div>
                            <div class="scrolldownhere">
                                <img src="{{ asset('assets/images/scrolldown.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>



        <div class="row" style="overflow: hidden !important;">
            <section data-anchor="Page 3">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card text-center" style="background: none; border: none; margin-top: 10%;">

                                <div class="txt-lookingfor">
                                    <div class="icon_zone_page3">
                                        LOOKING FOR ?
                                    </div>
                                </div>
                                <div class="col" style="margin-top: 5%;">
                                    <div class="centerlookingfor" style="margin-top: 8%;">
                                        <div class="icon-pad1">
                                            <a href="{{ route('looking.index') }}?type=1" class="text-decoration-none">
                                                <div class="lookingforicon">
                                                    <img src="{{ asset('assets/images/iconcode.png') }}" alt="Coding" style="margin-left: 20px">
                                                </div>
                                                <div class="txt-staff">
                                                    <div class="icon_zone_lineP3" style="z-index: 999;">
                                                        <div>5 Projects List</div>
                                                    </div>
                                                    <div>Focus on Programming<br>(Staff Pick)</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="icon-pad2">
                                            <a href="{{ route('looking.index') }}?type=2" class="text-decoration-none">
                                            <div class="lookingforicon">
                                                <img src="{{ asset('assets/images/icondesign.png') }}" alt="Design">
                                            </div>
                                            <div class="txt-staff">
                                                <div class="icon_zone_lineP3" style="z-index: 999; ">
                                                    <div> 4 Projects List</div>
                                                </div>
                                                <div>Focus on Design<br>(Staff Pick)</div>
                                            </div>
                                            </a>
                                        </div>
                                        <div class="icon-pad3">
                                            <a href="{{ route('looking.index') }}?type=3" class="text-decoration-none">
                                            <div class="lookingforicon">
                                                <img src="{{ asset('assets/images/iconboth.png') }}" alt="Design & Coding">
                                            </div>
                                            <div class="txt-staff">
                                                <div class="icon_zone_lineP3" style="z-index: 999; ">
                                                    <div> 8 Projects List</div>
                                                </div>
                                                <div>Focus on Both D&P<br>(Staff Pick)</div>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="scrolldownhere" style="margin-top: -10%;">
                                <img src="{{ asset('assets/images/scrolldown.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>



        <div class="row "style="overflow: hidden !important;">
            <section data-anchor="Page 4">

                <div class="container" style="margin-top: 20%;">
                    <div class="row">
                        <div class="col-4 photo-filter" style="width: auto;">
                            <div class="photomoile1">
                                <video autoplay muted loop playsinline preload="metadata" class="videofilterIG">
                                    <source src="{{ asset('assets/video/two.mp4')}}" type="video/mp4">
                                </video>
                                <!-- <img src="images/p4_filter.png" alt=""> -->
                            </div>
                            <div class="pxscreen_p4 position-sticky"></div>
                        </div>
                        <div class="col-4 photo-filter" style="width: auto;">
                            <div class="photomoile1" style="margin-top: 10%;margin-left: -45%;" >
                                <video autoplay muted loop playsinline preload="metadata" class="videofilterIG">
                                    <source src="{{ asset('assets/video/one.mp4') }}" type="video/mp4">
                                </video>
                                <!-- <img src="images/p4_filter_2.png" alt=""> -->
                            </div>
                            <div class="pxscreen_p4 position-sticky"></div>
                        </div>
                        <div class="col-6" style="width: auto; margin-top: 15%;">
                            <div class="txt-Cheerup">
                                <div class="icon_zone_page2">
                                    Cheer up US on <br>instagram
                                </div>
                            </div>
                            <div class="text_tivirus">
                                Let's have fun for filter "&tivirus" on instagram and don't forget to mention @funcslash, Let's have fun together.
                            </div>
                            <a href="https://www.instagram.com/funcslash/">
                                <button class="letsee" style="border: none; background-color: #FF1569;">

                                    LET’S PLAY

                                </button>
                            </a>
                        </div>
                        <div class="col-6" style="width: auto;">

                        </div>
                    </div>
                </div>


            </section>
        </div>
        <div class="row "style="  overflow: auto;">
            <section data-anchor="Page 5">
                @include('include.footer')
            </section>
        </div>
    </main>
</div>


<script src="{{ asset('assets/js/Home_menu_overlay.js" type="text/javascript')}}"></script>
<script src="{{ asset('assets/plugins/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/js/prism.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/js/pageable.min.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/prism.min.js"></script>
<script src="https://unpkg.com/pageable@latest/dist/pageable.min.js"></script>
<script src="{{ asset('assets/js/delay.js')}}"></script>
<script>
    let vdo1 = 'https://www.youtube.com/embed/Cu2D13tNAZw'
    let vdo2 = 'https://www.youtube.com/embed/tzg0PIB-FyU'
    let vdo3 = 'https://www.youtube.com/embed/11YHE6h9GBk'
    let vdo4 = 'https://www.youtube.com/embed/4CuYyR2ENu8'
    let text = '?autohide=1&showinfo=0&controls=0'
    // $(document).ready(function () {
    //     $('#vdo1').attr('src', vdo1);
    //     $('#vdo2').attr('src', vdo2);
    //     $('#vdo3').attr('src', vdo3);
    //     $('#vdo4').attr('src', vdo4);
    //     console.log($('#vdo1')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*'))
    //
    //     $('.mockupbest1').click(function () {
    //         let v = $('#vdo1').attr('src');
    //
    //         $('#vdo1')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
    //         $('#vdo2')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
    //         $('#vdo3')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
    //         $('#vdo4')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
    //     })
    //     $('.mockupbest2').click(function () {
    //         let v1 = $('#vdo1').attr('src');
    //         if(v == vdo2){
    //             $('#vdo2').attr('src', `${vdo2}&autoplay=1&loop=1`);
    //             $('#vdo1').attr('src', `${vdo1}`);
    //             $('#vdo3').attr('src', `${vdo3}`);
    //             $('#vdo4').attr('src', `${vdo4}`);
    //         } else {
    //             $('#vdo2').attr('src', `${vdo2}`);
    //         }
    //     })
    //     $('.mockupbest3').click(function () {
    //         let v1 = $('#vdo1').attr('src');
    //         if(v == vdo3){
    //             $('#vdo3').attr('src', `${vdo3}&autoplay=1&loop=1`);
    //             $('#vdo2').attr('src', `${vdo2}`);
    //             $('#vdo1').attr('src', `${vdo1}`);
    //             $('#vdo4').attr('src', `${vdo4}`);
    //         } else {
    //             $('#vdo3').attr('src', `${vdo3}`);
    //         }
    //     })
    //     $('.mockupbest4').click(function () {
    //         let v1 = $('#vdo1').attr('src');
    //         if(v == vdo4){
    //             $('#vdo4').attr('src', `${vdo4}&autoplay=1&loop=1`);
    //             $('#vdo2').attr('src', `${vdo2}`);
    //             $('#vdo3').attr('src', `${vdo3}`);
    //             $('#vdo1').attr('src', `${vdo1}`);
    //         } else {
    //             $('#vdo4').attr('src', `${vdo4}`);
    //         }
    //     })
    // })
</script>
<script>
</script>
</body>
</html>
