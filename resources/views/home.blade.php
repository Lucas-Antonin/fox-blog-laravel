@extends("layouts.app")

@section("content")
<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->



<!-- ***** Welcome Area Start ***** -->
<div class="welcome-area" id="welcome">

    <!-- ***** Header Text Start ***** -->
    <div class="header-text">
        <div class="container">
            <div class="row">
                <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <h1>The best place to chat about <strong>Foxes</strong></h1>
                    <p>The objective of this blog is practice laravel.</p>
                    <a href="#about" class="main-button-slider">Find Out More</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img class="rounded rounded-circle uwu-image  d-block mx-auto" src="{{ asset("images/websiteimages/uwu-fox.jpg") }}"  alt="First Vector Graphic">
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Header Text End ***** -->
</div>
<!-- ***** Welcome Area End ***** -->


<!-- ***** Features Big Item Start ***** -->
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="{{ asset("images/websiteimages/fennec-fox.jpg") }}" class="rounded rounded-circle uwu-image  d-block mx-auto" alt="App">
            </div>
            <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                <div class="left-heading">
                    <h5>Here in the Fox Blog you can post anyfoxthing you wish!</h5>
                </div>
                <div class="left-text">
                    <p>If you want to make friends who like the same kind of fox as you, you are in the right place!</p>
                    <a href="#about2" class="main-button">Discover More</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hr"></div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->


<!-- ***** Features Big Item Start ***** -->
<section class="section" id="about2">
    <div class="container">
        <div class="row">
            <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                <div class="left-heading">
                    <h5>Curabitur aliquam eget tellus id porta</h5>
                </div>
                <p>Proin justo sapien, posuere suscipit tortor in, fermentum mattis elit. Aenean in feugiat purus.</p>
                <ul>
                    <li>
                        <img src="assets/images/about-icon-01.png" alt="">
                        <div class="text">
                            <h6>Nulla ultricies risus quis risus</h6>
                            <p>You can use this website template for commercial or non-commercial purposes.</p>
                        </div>
                    </li>
                    <li>
                        <img src="assets/images/about-icon-02.png" alt="">
                        <div class="text">
                            <h6>Donec consequat commodo purus</h6>
                            <p>You have no right to re-distribute this template as a downloadable ZIP file on any website.</p>
                        </div>
                    </li>
                    <li>
                        <img src="assets/images/about-icon-03.png" alt="">
                        <div class="text">
                            <h6>Sed placerat sollicitudin mauris</h6>
                            <p>If you have any question or comment, please <a rel="nofollow" href="https://templatemo.com/contact">contact</a> us on TemplateMo.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <img src="assets/images/right-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->


<!-- ***** Features Small Start ***** -->
<section class="section" id="services">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme">
                <div class="item service-item">
                    <div class="icon">
                        <i><img src="assets/images/service-icon-01.png" alt=""></i>
                    </div>
                    <h5 class="service-title">First Box Service</h5>
                    <p>Aenean vulputate massa sed neque consectetur, ac fringilla quam aliquet. Sed a enim nec eros tempor cursus at id libero.</p>
                    <a href="#" class="main-button">Read More</a>
                </div>
                <div class="item service-item">
                    <div class="icon">
                        <i><img src="assets/images/service-icon-02.png" alt=""></i>
                    </div>
                    <h5 class="service-title">Second Box Title</h5>
                    <p>Pellentesque vitae urna ut nisi viverra tristique quis at dolor. In non sodales dolor, id egestas quam. Aliquam erat volutpat. </p>
                    <a href="#" class="main-button">Discover More</a>
                </div>
                <div class="item service-item">
                    <div class="icon">
                        <i><img src="assets/images/service-icon-03.png" alt=""></i>
                    </div>
                    <h5 class="service-title">Third Title Box</h5>
                    <p>Quisque finibus libero augue, in ultrices quam dictum id. Aliquam quis tellus sit amet urna tincidunt bibendum.</p>
                    <a href="#" class="main-button">More Detail</a>
                </div>
                <div class="item service-item">
                    <div class="icon">
                        <i><img src="assets/images/service-icon-02.png" alt=""></i>
                    </div>
                    <h5 class="service-title">Fourth Service Box</h5>
                    <p>Fusce sollicitudin feugiat risus, tempus faucibus arcu blandit nec. Duis auctor dolor eu scelerisque vestibulum.</p>
                    <a href="#" class="main-button">Read More</a>
                </div>
                <div class="item service-item">
                    <div class="icon">
                        <i><img src="assets/images/service-icon-01.png" alt=""></i>
                    </div>
                    <h5 class="service-title">Fifth Service Title</h5>
                    <p>Curabitur aliquam eget tellus id porta. Proin justo sapien, posuere suscipit tortor in, fermentum mattis elit.</p>
                    <a href="#" class="main-button">Discover</a>
                </div>
                <div class="item service-item">
                    <div class="icon">
                        <i><img src="assets/images/service-icon-03.png" alt=""></i>
                    </div>
                    <h5 class="service-title">Sixth Box Title</h5>
                    <p>Ut nibh velit, aliquam vitae pellentesque nec, convallis vitae lacus. Aliquam porttitor urna ut pellentesque.</p>
                    <a href="#" class="main-button">Detail</a>
                </div>
                <div class="item service-item">
                    <div class="icon">
                        <i><img src="assets/images/service-icon-01.png" alt=""></i>
                    </div>
                    <h5 class="service-title">Seventh Title Box</h5>
                    <p>Sed a consequat velit. Morbi lectus sapien, vestibulum et sapien sit amet, ultrices malesuada odio. Donec non quam.</p>
                    <a href="#" class="main-button">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Small End ***** -->




<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <p class="copyright">Copyright &copy; 2020 Art Factory Company

                    . Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@endsection
