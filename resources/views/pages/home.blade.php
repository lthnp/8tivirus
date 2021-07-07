<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/scss/logo_hover.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/mouse-scroll.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/Link_menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/Home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/phone-mockup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/scss/bubble_background.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/delay.css') }}">

    <title>&tivirus</title>

  </head>
  <body style="background: url({{asset('assets/images/FINAL_DESIGN_APPROVE.png')}}); width: 100%; height: 100%; overflow: hidden;" >
    <div class="anchors"><ul></ul></div>
    <div class="container-fluid" style="padding-right: var(--bs-gutter-x,-.75rem);padding-left: var(--bs-gutter-x,-.75rem);" >
      <div class="row" >
        <div class="col " style="font-size: 300%; margin: 2.5%; margin-left: 5%; position: fixed;">
          <a href="#" >
            <img src="{{ asset('assets/images/logo.png') }}" style="width: 6%; height: 100%; cursor: pointer; z-index: 99999;">
          </a>
        </div>
        <div class="col" style="margin: 2.5%; margin-left: -2%;  text-align: right; position: fixed;">
            <button type="button" class="btn btn-link menu" id="open" style="font-size: 300%; color: white; z-index: 99999;">
                <i class='bx bx-menu-alt-right'></i>
            </button>
        </div>
        <div class="container">
            <nav id="overlay" class="over-lay">
                <button class="cross" id="close">
                    <div class="close-overlay"><i class='bx bx-x'></i></div>
                  </button>

                <ul id="menubar" class="menu list-group" role="menubar" aria-orientation="vertical">
                      <li class="menu__item" role="none"><a class="menu__link" href="#" role="menuitem" tabindex="-1">
                    HOME</a>
                  </li>
                      <li class="menu__item" role="none"><a class="menu__link" href="#" role="menuitem" tabindex="-1">
                    PROJECTS</a>
                  </li >
                      <li class="menu__item" role="none"><a class="menu__link" href="#" role="menuitem" tabindex="-1">
                    DEFENDERS</a>
                  </li>
                      <li class="menu__item" role="none"><a class="menu__link" href="#" role="menuitem" tabindex="-1">
                    POSITION</a>
                  </li>
                      <li class="menu__item" role="none"><a class="menu__link" href="#" role="menuitem" tabindex="-1">
                    SUPPORTERS</a>
                  </li>
                      <li class="menu__item" role="none"><a class="menu__link" href="#" role="menuitem" tabindex="-1">
                    CONTACT</a>
                  </li>
                </ul>
              </nav>

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
          <div class="bubble-5">
              <img src="{{ asset('assets/images/bubble5.png') }}">
          </div>

       </div>
    <main>
        <div class="row "style="width: 100%; height: 100%; margin-top: 3%;">
          <section data-anchor="Page 1">
            <div class="col-6 bg-logo">
              <img src="{{ asset('assets/images/hand_home.png') }}" class="hand">
            </div>
            <div class="col-6 bg-menu" >
                <div class="text_menu" style="margin: 5%; margin-right: 10%; height: 100%;margin-top: 12%;">

                      <div class="icon_zone">
                        <div class="txt text-end fw-bolder h1 display-5" style="font-family: 'IBM Plex Sans Thai Bold';">
                          <a  class="dropbtn" style="text-decoration: none; transition: all 0.4s ease; color: #FEBDCD; cursor: pointer;">
                            21 PROJECTS
                        </a>
                        </div>
                      </div>

                      <div class="icon_zone_line">
                        <div class="txt">
                          <p class="text-end fw-bolder h5">
                            <a href="#" class="link_menu" >
                                Life-Quality Improvements
                            </a>
                        </p>
                        </div>
                      </div>
                      <div class="icon_zone_line">
                        <div class="txt">
                          <p class="text-end fw-bolder h5 ">
                            <a href="#" class="link_menu">
                                Digital Technology Improves Well-Being
                            </a>
                          </p>
                        </div>
                      </div>
                      <div class="icon_zone_line">
                        <div class="txt">
                          <p class="text-end fw-bolder h5 ">
                            <a href="#" class="link_menu">
                                Creative Media Supporting Digital Education
                            </a>
                          </p>
                        </div>
                      </div>
                      <div class="icon_zone_line">
                        <div class="txt">
                          <p class="text-end fw-bolder h5 ">
                            <a href="#" class="link_menu">
                                Supporting Businesses in Growing
                            </a>
                          </p>
                        </div>
                      </div>
                      <div class="icon_zone">
                        <div class="txt text-end fw-bolder h1 display-5">

                            <a href="" class="dropbtn-2" style="text-decoration: none; transition: all 0.4s ease; color: #FEBDCD; cursor: pointer;">
                                31 DEFENDERS
                            </a>

                        </div>
                      </div>
                  </div>
                </div>

                <div class="pxscreen"></div>
            <div class="flatscreen">
            </div>
            </div>
        <div class="row "style="margin-top: 3%;">
          <section data-anchor="Page 2">
            <section class="sec-4project">
              <div class="container">
                  <div class="row">
                      <div class="col">
                        <div class="txt-4staff">
                          <div class="icon_zone_page2">
                            4 PROJECTS STAFF PICK
                          </div>
                          </div>
                      </div>
                      <div class="col photo-pad">
                          <div class="photomoile">
                              <img src="{{ asset('assets/images/mockup-mobile.png')}}" alt="">
                          </div>
                          <div class="txt-staff">
                              <div> HAPPY HUNT</div>
                              <div>Creative Media<br> Supporting Digital Education</div>
                          </div>
                      </div>

                      <div class="col photo-pad2">
                          <div class="photomoile">
                              <img src="{{ asset('assets/images/mockup-mobile.png')}}" alt="">
                          </div>
                          <div class="txt-staff">
                              <div> HAPPY HUNT</div>
                              <div>Creative Media<br> Supporting Digital Education</div>
                          </div>
                      </div>

                      <div class="col photo-pad3">
                          <div class="photomoile">
                              <img src="{{ asset('assets/images/mockup-mobile.png')}}" alt="">
                          </div>
                          <div class="txt-staff">
                              <div> HAPPY HUNT</div>
                              <div>Creative Media<br> Supporting Digital Education</div>
                          </div>
                      </div>

                      <div class="col photo-pad2">
                          <div class="photomoile">
                              <img src="{{ asset('assets/images/mockup-mobile.png')}}" alt="">
                          </div>
                          <div class="txt-staff">
                              <div> HAPPY HUNT</div>
                              <div>Creative Media<br> Supporting Digital Education</div>
                          </div>
                      </div>

                  </div>
              </div>
          </section>

          </section>
        </div>

        <div class="row "style="margin-top: 3%;">
          <section data-anchor="Page 3">
            <div class="container">
              <div class="row">
                  <div class="col">
                    <div class="txt-lookingfor">
                      <div class="icon_zone_page2">
                        LOOKING FOR ?
                      </div>
                      </div>
                  </div>
                  <div class="col icon-pad">
                    <div class="photomoile">
                        <img src="{{ asset('assets/images/Group 251.png') }}" alt="">
                    </div>
                    <div class="txt-staff">
                        <div> 5 Projects List</div>
                        <div>Focus on Programming<br> (Staff Pick) </div>
                    </div>
                </div>
                <div class="col icon-pad2">
                  <div class="photomoile">
                      <img src="{{ asset('assets/images/Group 252.png') }}" alt="">
                  </div>
                  <div class="txt-staff">
                      <div> 4 Projects List</div>
                      <div>Focus on Design<br> (Staff Pick) </div>
                  </div>
              </div>
              <div class="col icon-pad3">
                <div class="photomoile">
                    <img src="{{ asset('assets/images/Group 253.png') }}" alt="">
                </div>
                <div class="txt-staff">
                    <div> 8 Projects List</div>
                    <div>Focus on Both D&P<br> (Staff Pick) </div>
                </div>
            </div>
              </div>
            </div>
          </section>
        </div>

        <div class="row "style="margin-top: 3%;">
          <section data-anchor="Page 4">

              <div class="container">
                  <div class="row">
                    <div class="col photo-filter">
                      <div class="photomoile">
                          <img src="{{ asset('assets/images/p4_filter.png') }}" alt="">
                          <div class="pxscreen_p4"></div>
                      </div>

                    </div>

                  </div>
              </div>

          </section>
        </div>

      </main>
        </div>


    <script src="{{ asset('assets/js/Home_menu_overlay.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/DropMenu_projects.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/prism.min.js"></script>
    <script src="https://unpkg.com/pageable@latest/dist/pageable.min.js"></script>
    <script src="{{ asset('assets/js/delay.js') }}"></script>

  </body>
</html>
