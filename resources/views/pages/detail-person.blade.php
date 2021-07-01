@extends('layouts.app')
@section('content')
    <div class="box-one">
        <div class="box-left">
            <img class="img-curve img-fluid float-start" src="assets/images/test.jpg">
        </div>
        <div class="box-right float-end">
            <h2 class="text-span">ภัทรานิษฐ์ อัศวเลิศปัญญา (สอง)</h2>
            <h2 class="text-span">Phattranit Asawalertpanya (song)</h2>
            <h2 class="text-span">Student ID : 13600197</h2>
            <div class="box-inside">
                <h2 class="text-span"><img class="img-icon img-fluid" src="assets/images/facebook.png"> : SoNg Phattranit </h2>
                <h2 class="text-span"><img class="img-icon img-fluid" src="assets/images/mail.png"> : phattranitsong@hotmail.com</h2>
            </div>
            <button class="button-curve float-end">SEE PORTFOLIO</button>
        </div>
    </div>

    <div class="box-two">
        <div class="box-left">
            <h2 class="text-title">Project Owner</h2>
            <img class="img-logo img-fluid float-start" src="assets/images/test.jpg">
        </div>
        <div class="box-right float-end">
            <h1 class="text-head">Balance</h1>
            <h2 class="text-span">การออกแบบและพัฒนาแอปพลิเคชันแนะนำการออกแบบสร้างบ้านในเชิงฮวงจุ้ย</h2>
            <h2 class="text-span">Design and Development Web Application Recommending Fengshui Home Building Design</h2>
            <button class="button-curve float-end">SEE PROJECT</button>
        </div>
    </div>

    <div class="box-three sec-more">
        <div class="text-title">MORE DEFENDERS FROM &TIVIRUS</div>
        <div class="container">
            <div class="bg-sponser">
                <div class="swiper-container" id="slider_more-product">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide img-curve"><img src="assets/images/devno1.png">
                            <div class="museum-icon">
                                <a href="xxx">
                                    <img src="assets/images/museum.png">
                                </a>
                                <div class="text-line">
                                    Phattranit Asawalertpanya
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide img-curve"><img src="assets/images/devno1.png">
                            <div class="museum-icon">
                                <a href="xxx">
                                    <img src="assets/images/museum.png">
                                </a>
                                <div class="text-line">
                                    Phattranit Asawalertpanya
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide img-curve"><img src="assets/images/test.jpg">
                            <div class="museum-icon">
                                <a href="xxx">
                                    <img src="assets/images/museum.png">
                                </a>
                                <div class="text-line">
                                    Phattranit Asawalertpanya
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide img-curve"><img src="assets/images/devno1.png">
                            <div class="museum-icon">
                                <a href="xxx">
                                    <img src="assets/images/museum.png">
                                </a>
                                <div class="text-line">
                                    Phattranit Asawalertpanya
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-pagination active"></div>

                </div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>
            <div class="swiper-pagination active"></div>
        </div>
    </div>


    @include('include.contact-section')
@endsection

@section('footer.js')
    <script>
        var swiper = new Swiper('#slider_more-product', {
            slidesPerView: 4,
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
                    slidesPerView: 1,
                    spaceBetween: 2,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 2,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 5,
                },
            }
        });
    </script>
@endsection
