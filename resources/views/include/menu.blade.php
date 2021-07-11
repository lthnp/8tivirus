
<div class="wrapper">
    <div class="container" >
        <div class="row" >
            <div class="col" style="width: 90%;font-size: 80%;margin: 1%; margin-top: 2.5%;z-index: 99;">
                <a href="{{ route('index') }}" >
                    <img src="{{ asset('assets/images/logo.png') }}" style="width: 6%; height: 100%; cursor: pointer; z-index: 99999; object-fit: cover">
                </a>
                <i class='bx bx-menu-alt-right' id="open" style="margin-top: 2.5%; float:right;   font-size: 300%; color: white;background: none; z-index: 99999; cursor: pointer;"></i>
            </div>

            <div class="container">
                <div class="row">

                    <nav id="overlay" class="over-lay">
                        <div class="col">
                            <button class="cross" id="close">
                                <div class="close-overlay"><i class='bx bx-x'></i></div>
                            </button>

                            <ul id="menubar" class="menu list-group" role="menubar" aria-orientation="vertical">

                                <li class="menu__item" >
                                    <div class="icon_zone_menubar">
                                        <a class="menu__link" href="{{ route('index') }}" role="menuitem" tabindex="-1">
                                            HOME</a>
                                    </div>
                                </li>
                                <li class="menu__item" ><a class="menu__link" href="{{ route('project.index') }}" role="menuitem" tabindex="-1">
                                        PROJECTS LIST</a>
                                </li >
                                <li class="menu__item" ><a class="menu__link" href="{{ route('defender.index') }}" role="menuitem" tabindex="-1">
                                        DEFENDERS LIST</a>
                                </li>
                                <li class="menu__item" >
                                    <a class="menu__link" href="{{ route('looking.index') }}" role="menuitem" tabindex="-1">
                                        LOOKING FOR ?
                                    </a>
                                </li>
                                <li class="menu__item" ><a class="menu__link" href="{{ route('resource.index') }}" role="menuitem" tabindex="-1">
                                        FREE RESOURCES</a>
                                </li>
                                <li class="menu__item" ><a class="menu__link" href="{{ route('insider') }}" role="menuitem" tabindex="-1">
                                        INSIDER</a>
                                </li>
                                <li class="menu__item" ><a class="menu__link" href="{{ route('contact') }}" role="menuitem" tabindex="-1">
                                        CONTACT</a>
                                </li>
                            </ul>
                            <div class="menulink_home">
                                <ul id="menubar" class="menu list-group" role="menubar" aria-orientation="vertical">
                                    <li class="menu__item" >
                                        <div class="icon_zone_line_menubar">
                                            <a class="menu__link2" href="{{ route('project.index') }}?category=1" role="menuitem" tabindex="-1">
                                                Life-Quality Improvements
                                            </a>
                                        </div>
                                    </li>
                                    <li class="menu__item" >
                                        <div class="icon_zone_line_menubar">
                                            <a class="menu__link2" href="{{ route('project.index') }}?category=2" role="menuitem" tabindex="-1">
                                                Digital Technology Improves Well-Being
                                            </a>
                                        </div>
                                    </li >
                                    <li class="menu__item" >
                                        <div class="icon_zone_line_menubar">
                                            <a class="menu__link2" href="{{ route('project.index') }}?category=3" role="menuitem" tabindex="-1">
                                                Creative Media Supporting Digital Education
                                            </a>
                                        </div>
                                    </li>

                                    <li class="menu__item" >
                                        <div class="icon_zone_line_menubar">
                                            <a class="menu__link2" href="{{ route('project.index') }}?category=4" role="menuitem" tabindex="-1">
                                                Supporting Businesses in Growing
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </nav>

                </div>
            </div>
        </div>
    </div>

</div>
