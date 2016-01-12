<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Seat Hero</title>
    <meta name="description" content="Seat Hero">
    <meta name="keywords" content="" />
    <meta name="author" content="seathero">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400, 700, 500' rel='stylesheet' type='text/css'>
    <!-- Body font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300, 400' rel='stylesheet' type='text/css'>
    <!-- Navbar font -->
    <!-- Libs and Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('/lib/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/lib/animations/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/lib/font-awesome/css/font-awesome.min.css') }}">
    <!-- Font Icons -->
    <link rel="stylesheet" href="{{ asset('/lib/owl-carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/lib/owl-carousel/css/owl.theme.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/mobile.css') }}">
    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{ asset('/css/fresh-lime.css') }}">

</head>

<body data-spy="scroll" data-target="#main-navbar">
<div class="page-loader"></div>
<!-- Display loading image while page loads -->
<div class="body">
    <!-- body div ends -->
    <div>
        <!--========== BEGIN HEADER ==========-->
        <header id="header" class="header-main">
            <!-- Begin Navbar -->
            <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container2">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar" style="color:black !important"></span>
                            <span class="icon-bar" style="color:black !important"></span>
                            <span class="icon-bar" style="color:black !important"></span>
                        </button>
                        <a class="navbar-brand page-scroll" href="/" style="margin-left: 20px;">
                            Seat Hero
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-left:90px;">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#how_it_works" class="page-scroll">How IT WORKS</a></li>
                            <li><a href="#get_3_months_free" class="page-scroll">GET 3 MONTHS FREE</a></li>
                            <li><a href="#login" class="page-scroll login-menu">LOGIN</a></li>
                            <li><a href="#signup" class="page-scroll login-menu">SIGNUP</a></li>
                        </ul>
                    </div>
                    <!-- /.container -->
            </nav>
            <!-- End Navbar -->

        </header>


        <!-- Begin text carousel intro section -->
        <section id="home">
            <div class="container1" style="height:auto;">
                <div id="myCarousel" class="carousel slide" style="margin-top: 70px;" data-ride="carousel" data-interval="3000" data-pause="false" >
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/banner.jpg" class="mrgn" alt="">
                        </div>
                        <div class="item">
                            <img src="img/banner-2.jpg" class="mrgn" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.container -->
    <!-- End text carousel intro section -->


    <!-- Begin about section -->
    <section id="how_it_works" class="page text-center">
        <!-- Begin page header-->
        <div class="page-header-wrapper">
            <div class="container">
                <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                    <h2>How It Works</h2>
                    <div class="devider"></div>
                    <h5>SeatHero is an exclusive club that provides movie lovers with deep discount seats on last-minute unsold movie tickets.</h5>
                    <h5>Membership is just $5 a month with up to three months free when you sign up during our pre-launch period!</h5>
                </div>
            </div>
        </div>
        <!-- End page header-->

        <!-- Begin rotate box-1 -->
        <div class="rotate-box-2-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <a class="rotate-box-2 text-center square-icon wow zoomIn animated" data-wow-delay="0.2s">
                            <img src="{{ asset('/img/step1.PNG') }}" />
                            <div class="rotate-box-info">

                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <a class="rotate-box-2 text-center square-icon wow zoomIn" data-wow-delay="0.2s">
                            <img src="{{ asset('/img/step2.PNG') }}" />
                            <div class="rotate-box-info">

                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <a class="rotate-box-2 text-center square-icon wow zoomIn animated" data-wow-delay="0.2s">
                            <img src="{{ asset('/img/step3.PNG') }}" />
                            <div class="rotate-box-info">

                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <a class="rotate-box-2 text-center square-icon wow zoomIn" data-wow-delay="0.2s">
                            <img src="{{ asset('/img/step4.PNG') }}" />
                            <div class="rotate-box-info">

                            </div>
                        </a>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <button class="btn btn-custome col-sm-4 col-sm-offset-4">Signup</button>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- /.container -->
        </div>
        <!-- End rotate box-1 -->
    </section>
    <!-- End about section -->


    <!-- Begin about section -->
    <section id="awesome_benifits" class="page text-center">
        <!-- Begin page header-->
        <div class="page-header-wrapper">
            <div class="container">
                <div class="page-header text-center wow fadeInUp" data-wow-delay="0.3s">
                    <h2>Nearly 90% of Movie theater seats are empty</h2>
                    <div class="devider"></div>
                    <h5>Wouldn't it be better if those seats were filled at a reasonable price? We think so.</h5>
                    <h4>Awesome benefits include</h4>
                </div>
            </div>
        </div>
        <!-- End page header-->

        <!-- Begin rotate box-1 -->
        <div class="rotate-box-2-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <a class="rotate-box-2 text-center square-icon wow zoomIn animated" data-wow-delay="0.2s">
                            <img src="{{ asset('/img/awesome-benifits1.PNG') }}" />
                            <div class="rotate-box-info">

                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <a class="rotate-box-2 text-center square-icon wow zoomIn" data-wow-delay="0.2s">
                            <img src="{{ asset('/img/awesome-benifits2.PNG') }}" />
                            <div class="rotate-box-info">

                            </div>
                        </a>
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <a class="rotate-box-2 text-center square-icon wow zoomIn animated" data-wow-delay="0.2s">
                            <img src="{{ asset('/img/awesome-benifits3.PNG') }}" />
                            <div class="rotate-box-info">

                            </div>
                        </a>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <button class="btn btn-custome col-sm-4 col-sm-offset-4">Signup</button>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- /.container -->
        </div>
        <!-- End rotate box-1 -->
    </section>
    <!-- End about section -->


    <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a>
    <!-- Scroll to top button -->
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

<!-- Plugins JS -->
<script src="{{ asset('/lib/owl-carousel/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('/lib/stellar/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('/lib/animations/js/wow.min.js') }}"></script>
<script src="{{ asset('/lib/waypoints.min.js') }}"></script>
<script src="{{ asset('/lib/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('/lib/classie.js') }}"></script>
<script src="{{ asset('/lib/jquery.easing.min.js') }}"></script>
<script src="{{ asset('/lib/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('/lib/smoothscroll.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('/js/theme.js') }}"></script>




</body>
<!-- body ends -->
</html>
