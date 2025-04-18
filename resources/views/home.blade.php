@extends('Layouts.homeLayout')

@section('title')
    Home
@endsection

@section('main')
    <div class="page-content bg-white">

        <!-- Banner -->
        <div class="main-bnr-one">
            <div class="swiper main-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner-inner" style="background-image: url(assets/images/main-slider/slider1/bg1.jpg)">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xxl-7 col-xl-8 col-sm-8">
                                        <div class="banner-content">
                                            <div class="top-content">
                                                <h1 class="title" data-swiper-parallax="-50">
                                                    <span>Work Hard to Get</span>
                                                    <span class="text2 text-primary">Better</span> Life
                                                </h1>
                                                <div class="clearfix" data-swiper-parallax="-100">
                                                    <p class="para-1">START YOUR TRAININGS WITH OUR</p>
                                                    <p class="para-2"><span>PROFESSIONAL </span>TRAINERS</p>
                                                    <a href="about-us.html"
                                                        class="btn btn-skew btn-lg btn-primary align-text-bottom">
                                                        <span class="skew-inner">
                                                            <span class="text">Get Started</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-5 col-xl-4 col-sm-4">
                                        <div class="banner-media">
                                            <img src="assets/images/main-slider/slider1/pic1.png" class="main-img"
                                                data-swiper-parallax="300" alt="">
                                            <ul data-swiper-parallax="-50">
                                                <li>7 DAYS AWEEK TRAININGS</li>
                                                <li>AWESOME PROGRAMS</li>
                                                <li>FOR EVERY DAY</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-inner" style="background-image: url(assets/images/main-slider/slider1/bg1.jpg)">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xxl-7 col-xl-8 col-sm-8">
                                        <div class="banner-content">
                                            <div class="top-content">
                                                <h1 class="title" data-swiper-parallax="-50">
                                                    <span class="text1">
                                                        <span class="sub-title text-primary">Work Hard</span> to
                                                        Get</span>
                                                    <span class="text2 text-primary">Better</span> Life
                                                </h1>
                                                <div class="clearfix" data-swiper-parallax="-100">
                                                    <p class="para-1">START YOUR TRAININGS WITH OUR</p>
                                                    <p class="para-2"><span>PROFESSIONAL </span>TRAINERS</p>
                                                    <a href="/pricing"
                                                        class="btn btn-skew btn-lg btn-primary align-text-bottom">
                                                        <span class="skew-inner">
                                                            <span class="text">Get Started</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-5 col-xl-4 col-sm-4">
                                        <div class="banner-media">
                                            <img src="assets/images/main-slider/slider1/pic2.png" class="main-img"
                                                data-swiper-parallax="300" alt="">
                                            <ul data-swiper-parallax="-50">
                                                <li>7 DAYS AWEEK TRAININGS</li>
                                                <li>AWESOME PROGRAMS</li>
                                                <li>FOR EVERY DAY</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-inner" style="background-image: url(assets/images/main-slider/slider1/bg1.jpg)">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xxl-7 col-xl-8 col-sm-8">
                                        <div class="banner-content">
                                            <div class="top-content">
                                                <h1 class="title" data-swiper-parallax="-50">
                                                    <span class="text1">
                                                        <span class="sub-title text-primary">Work Hard</span> to
                                                        Get</span>
                                                    <span class="text2 text-primary">Better</span> Life
                                                </h1>
                                                <div class="clearfix" data-swiper-parallax="-100">
                                                    <p class="para-1">START YOUR TRAININGS WITH OUR</p>
                                                    <p class="para-2"><span>PROFESSIONAL </span>TRAINERS</p>
                                                    <a href="/pricing"
                                                        class="btn btn-skew btn-lg btn-primary align-text-bottom">
                                                        <span class="skew-inner">
                                                            <span class="text">Get Started</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-5 col-xl-4 col-sm-4">
                                        <div class="banner-media">
                                            <img src="assets/images/main-slider/slider1/pic3.png" class="main-img"
                                                data-swiper-parallax="300" alt="">
                                            <ul data-swiper-parallax="-50">
                                                <li>7 DAYS AWEEK TRAININGS</li>
                                                <li>AWESOME PROGRAMS</li>
                                                <li>FOR EVERY DAY</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="num-pagination wow bounceInUp center" data-wow-delay="1.6s">
                        <div class="swiper-pagination main-pagination style-2"></div>
                    </div>
                </div>
                <div class="main-btn wow wow rollIn" data-wow-delay="1.8s">
                    <div class="main-btn-prev btn-prev"><i class="fa-solid fa-arrow-left"></i></div>
                    <div class="main-btn-next btn-next"><i class="fa-solid fa-arrow-right"></i></div>
                </div>
            </div>
        </div>

        <div class="call-action style-3 bg-img-fix bg-primary">
            <div class="container">
                <div class="inner-content row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-6 action-title wow fadeInUp m-sm-b10" data-wow-delay="2.0s">
                        <h2>Trail <span>Session</span></h2>
                        <h3>Free trail with pro trainers</h3>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 align-self-center text-align-center order-2 order-md-0 m-sm-b10 wow fadeInUp"
                        data-wow-delay="2.2s">
                        <a href="contact-us.html" class="btn-skew-icon">
                            <span class="text"><span>Join Now</span></span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 contact wow fadeInUp m-sm-b10" data-wow-delay="2.4s">
                        <h4>CALL US FIND OUT MORE</h4>
                        <h2><a href="tel:+4733378901">987-654-3210</a></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-wrapper1 bg-parallax" style="background-image: url(assets/images/background/bg5.png);">
            <!-- Our Services -->
            <section class="content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 m-lg-b30 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-bx-wraper style-1 hover-aware">
                                <div class="icon-bx m-b20">
                                    <div class="icon-cell text-primary">
                                        <i class="flaticon-fitness"></i>
                                    </div>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dz-title m-b10"><a href="/classes">Our Classes</a></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                </div>
                                <a href="/classes" class="btn-link">Read More <i
                                        class="fa-solid fa-arrow-right"></i></a>
                                <div class="effect"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 m-lg-b30 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-bx-wraper style-1 hover-aware">
                                <div class="icon-bx m-b20">
                                    <div class="icon-cell text-primary">
                                        <i class="flaticon-user"></i>
                                    </div>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dz-title m-b10"><a href="/coaches">Our Trainers</a></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                </div>
                                <a href="/coaches" class="btn-link">Read More <i
                                        class="fa-solid fa-arrow-right"></i></a>
                                <div class="effect"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 m-lg-b30 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-bx-wraper style-1 hover-aware">
                                <div class="icon-bx m-b20">
                                    <div class="icon-cell text-primary">
                                        <i class="flaticon-medal"></i>
                                    </div>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dz-title m-b10"><a href="/pricing">Memberships</a></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                </div>
                                <a href="/pricing" class="btn-link">Read More <i
                                        class="fa-solid fa-arrow-right"></i></a>
                                <div class="effect"></div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 m-lg-b30 wow fadeInUp" data-wow-delay="0.8s">
                            <div class="icon-bx-wraper style-1 hover-aware">
                                <div class="icon-bx m-b20">
                                    <div class="icon-cell text-primary">
                                        <i class="flaticon-calendar"></i>
                                    </div>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dz-title m-b10"><a href="service-details.html">Our Timeline</a></h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                </div>
                                <a href="service-details.html" class="btn-link">Read More <i
                                        class="fa-solid fa-arrow-right"></i></a>
                                <div class="effect"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Our Services -->
            </section>

            <section class="about-bx1">
                <!-- About Services -->
                <div class="container">
                    <div class="row align-items-center ">
                        <div class="col-lg-6">
                            <div class="dz-media p-r20">
                                <div class="image-box wow fadeInUp" data-wow-delay="0.4s">
                                    <!-- <img src="assets/images/about/pic5.jpg" alt=""> -->
                                    <div class="tag">
                                        <h2 class="counter">20</h2>
                                        <h5>year experience</h5>
                                    </div>
                                    <div class="split-box h-100">
                                        <video autoplay loop muted id="about-video">
                                            <source src="assets/images/about/video.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                <div class="split-box">
                                    <img src="assets/images/about/pic6.jpg" alt="" class="wow fadeInUp"
                                        data-wow-delay="0.6s">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 about-content m-lg-t40 wow fadeInUp" data-wow-delay="0.6s">
                            <h3 class="sub-title wow fadeInUp" data-wow-delay="0.8s">WAKE UP IT’S TIME</h3>
                            <h2 class="title m-0 wow fadeInUp" data-wow-delay="1.0s">To Take The <span
                                    class="text-primary">Action</span></h2>
                            <p class="description m-b10 wow fadeInUp" data-wow-delay="1.2s">Start your training with
                                our Professional Trainers</p>
                            <p class="wow fadeInUp" data-wow-delay="1.4s">Nunc vulputate urna ut erat posuere
                                accumsan. Curabitur ut commodo mauris, ac volutpat dui. Nullam eget enim ut mi
                                bibendum ultrices. Pellentesque non feugia.</p>
                            <ul class="pr-list list-italic m-t30 m-b35 wow fadeInUp" data-wow-delay="1.6s">
                                <li><i class="flaticon-check-mark"></i>Personal Training</li>
                                <li><i class="flaticon-check-mark"></i>Body Building</li>
                                <li><i class="flaticon-check-mark"></i>Boxing Classess</li>
                                <li><i class="flaticon-check-mark"></i>Cardio And More</li>
                                <li><i class="flaticon-check-mark"></i>Personal Training</li>
                                <li><i class="flaticon-check-mark"></i>Body Building</li>
                                <li><i class="flaticon-check-mark"></i>Boxing Classess</li>
                                <li><i class="flaticon-check-mark"></i>Cardio And More</li>
                            </ul>
                            <div class="wow fadeInUp" data-wow-delay="1.8s">
                                <a href="/pricing" class="btn btn-skew btn-lg btn-primary">
                                    <span class="skew-inner">
                                        <span class="text">Get Started</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Services -->
        </div>

        <!-- Schedule Table -->
        <div class="content-inner-2">
            <div class="container">
                <div class="section-head style-2 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h2 class="title">Find The Class That Suits You</h2>
                </div>
                <div class="schedule-table style-1 table-responsive wow fadeInUp" data-wow-delay="0.4s">
                    <table class="table-responsive-md ck-table">
                        <thead>
                            <tr class="">
                                <th></th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="row_1">
                                <td class="event-time"> 06:00 - 07:00 </td>
                                <td class="event" rowspan="2">
                                    <a class="title" href="javascript:void(0);">Open Gym</a>
                                    <div class="event-tag">Gym</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="row_2">
                                <td class="event-time"> 07:00 - 08:00 </td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Cardio Burn</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Power Lifting</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Aerobic</div>
                                </td>
                            </tr>
                            <tr class="row_3">
                                <td class="event-time"> 08:00 - 09:00 </td>
                                <td></td>
                                <td></td>
                                <td class="event" rowspan="2">
                                    <a class="title" href="javascript:void(0);">Crossfit Class</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Strenght</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="row_4">
                                <td class="event-time"> 09:00 - 10:00 </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Cardio Burn</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                            </tr>
                            <tr class="row_5">
                                <td class="event-time"> 10:00 - 11:00 </td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Crossfit Class</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Crossfit Class</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="row_6">
                                <td class="event-time"> 11:00 - 12:00 </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="row_7">
                                <td class="event-time"> 12:00 - 13:00 </td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Cardio Burn</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Power Lifting</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Aerobic</div>
                                </td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Crossfit Class</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                                <td></td>
                            </tr>
                            <tr class="row_8">
                                <td class="event-time"> 13:00 - 14:00 </td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Power Lifting</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Aerobic</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="row_9">
                                <td class="event-time"> 14:00 - 15:00 </td>
                                <td></td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Crossfit Class</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="row_10">
                                <td class="event-time"> 15:00 - 16:00 </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Cardio Burn</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                                <td></td>
                            </tr>
                            <tr class="row_11">
                                <td class="event-time"> 18:00 - 19:00 </td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Crossfit Class</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Schedule Table -->

        <!-- Team -->
        <section class="content-inner-1 team-slider-wrapper">
            <div class="container">
                <div class="section-head style-2 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h2 class="title">They Are Always Best</h2>
                </div>
                <div class="swiper team-slider style-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide wow fadeInUp" data-wow-delay="0.4s">
                            <div class="dz-team style-1">
                                <div class="dz-media">
                                    <a href="team.html"><img src="assets/images/team/team-1.png" alt=""></a>
                                    <ul class="team-social">
                                        <li><a href="https://www.facebook.com/" class="fab fa-facebook-f"></a></li>
                                        <li><a href="https://www.instagram.com/" class="fab fa-instagram"></a></li>
                                        <li><a href="https://twitter.com/?lang=en" class="fab fa-twitter"></a></li>
                                    </ul>
                                </div>
                                <div class="dz-content ">
                                    <h4 class="dz-name">DESERT</h4>
                                    <span class="dz-position">FITNESS TRAINER</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide wow fadeInUp" data-wow-delay="0.6s">
                            <div class="dz-team style-1">
                                <div class="dz-media">
                                    <a href="team.html"><img src="assets/images/team/team-2.png" alt=""></a>
                                    <ul class="team-social">
                                        <li><a href="https://www.facebook.com/" class="fab fa-facebook-f"></a></li>
                                        <li><a href="https://www.instagram.com/" class="fab fa-instagram"></a></li>
                                        <li><a href="https://twitter.com/?lang=en" class="fab fa-twitter"></a></li>
                                    </ul>
                                </div>
                                <div class="dz-content ">
                                    <h4 class="dz-name">OLIVER</h4>
                                    <span class="dz-position">CROSSFIT COACH</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide wow fadeInUp" data-wow-delay="0.8s">
                            <div class="dz-team style-1">
                                <div class="dz-media">
                                    <a href="team.html"><img src="assets/images/team/team-3.png" alt=""></a>
                                    <ul class="team-social">
                                        <li><a href="https://www.facebook.com/" class="fab fa-facebook-f"></a></li>
                                        <li><a href="https://www.instagram.com/" class="fab fa-instagram"></a></li>
                                        <li><a href="https://twitter.com/?lang=en" class="fab fa-twitter"></a></li>
                                    </ul>
                                </div>
                                <div class="dz-content ">
                                    <h4 class="dz-name">JAMES</h4>
                                    <span class="dz-position">DUMBBELL TRAINER</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="num-pagination justify-content-center">
                    <div class="team-slider-prev btn-prev"><i class="fa-solid fa-arrow-left"></i></div>
                    <div class="swiper-pagination team-slider-pagination style-2"></div>
                    <div class="team-slider-next btn-next"><i class="fa-solid fa-arrow-right"></i></div>
                </div>
            </div>
        </section>
        <!-- Team -->

        <!-- About Us -->
        <section class="content-inner-1 membership-box bg-parallax"
            style="background-image: url(assets/images/background/bg5.png);background-position: center;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="section-head style-2 m-0">
                            <h2 class="title">Our Membership</h2>
                        </div>
                        <ul class="nav nav-tabs style-1 dark m-b20">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tab-mission" data-bs-toggle="tab"
                                    data-bs-target="#tabMission">
                                    <span>Our Mission</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-vision" data-bs-toggle="tab" data-bs-target="#tabVision">
                                    <span>Our Vision</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content m-b30" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabMission" role="tabpanel">
                                <div class="content font-18">
                                    <p>Fight School has specialized in martial arts since 1986 and has one of.</p>
                                </div>
                                <ul class="pr-list list-italic m-b65 m-sm-b30 m-lg-b50">
                                    <li><i class="flaticon-check-mark"></i>Personal Training</li>
                                    <li><i class="flaticon-check-mark"></i>Body Building</li>
                                    <li><i class="flaticon-check-mark"></i>Boxing Classess</li>
                                    <li><i class="flaticon-check-mark"></i>Cardio And More</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="tabVision" role="tabpanel">
                                <div class="content font-18">
                                    <p>We are an independent gym that is committed to working with you to gain.</p>
                                </div>
                                <ul class="pr-list list-italic m-b65 m-sm-b30 m-lg-b50">
                                    <li><i class="flaticon-check-mark"></i>Cardio And More</li>
                                    <li><i class="flaticon-check-mark"></i>Boxing Classess</li>
                                    <li><i class="flaticon-check-mark"></i>Body Building</li>
                                    <li><i class="flaticon-check-mark"></i>Body Building</li>
                                </ul>
                            </div>
                        </div>
                        <a href="appointment.html" class="btn btn-primary btn-skew btn-lg"><span class="skew-inner"><span
                                    class="text">View All Plan</span></span></a>
                    </div>
                    <div class="col-lg-8">
                        <div class="row pricing-content m-md-t40">
                            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="pricingtable-wrapper style-1">
                                    <div class="pricingtable-inner">
                                        <div class="pricingtable-title premium">Basic</div>
                                        <div class="pricingtable-price bg-img-fix"
                                            style="background-image: url(assets/images/pricing/pic1.jpg);">
                                            <h2 class="pricingtable-bx text-primary">$49<small>/ Month</small></h2>
                                            <p class="m-0">A good choice when working remotely With Your Clients</p>
                                        </div>
                                        <ul class="pricingtable-features">
                                            <li>Review Your Question</li>
                                            <li>Work with Resources</li>
                                            <li>Social Media Marketing</li>
                                            <li>Analysis of Your "I Have"</li>
                                            <li>Support &amp; Mentoring</li>
                                        </ul>
                                        <div class="pricingtable-footer">
                                            <a href="contact-us.html"
                                                class="btn btn-primary rounded-0 d-block btn-hover-1"><span
                                                    data-text="Contact Us">Contact Us</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 m-sm-t30 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="pricingtable-wrapper style-1">
                                    <div class="pricingtable-inner">
                                        <div class="pricingtable-title premium">Ultra</div>
                                        <div class="pricingtable-price bg-img-fix"
                                            style="background-image: url(assets/images/pricing/pic2.jpg);">
                                            <h2 class="pricingtable-bx text-primary">$59<small>/ Month</small></h2>
                                            <p class="m-0">A good choice when working remotely With Your Clients</p>
                                        </div>
                                        <ul class="pricingtable-features">
                                            <li>Review Your Question</li>
                                            <li>Work with Resources</li>
                                            <li>Social Media Marketing</li>
                                            <li>Analysis of Your "I Have"</li>
                                            <li>Support &amp; Mentoring</li>
                                        </ul>
                                        <div class="pricingtable-footer">
                                            <a href="contact-us.html"
                                                class="btn btn-primary rounded-0 d-block btn-hover-1"><span
                                                    data-text="Contact Us">Contact Us</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us -->

        <!-- Testimonials-->
        <section class="content-inner testimonial-wrapper1">
            <div class="container">
                <div class="section-head style-2 text-center">
                    <h2 class="title m-b5">Testimonials</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua</p>
                </div>
            </div>
            <div class="swiper testimonial-swiper-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide wow fadeInUp" data-wow-delay="0.2s">
                        <div class="testimonial-1">
                            <div class="testimonial-info">
                                <i class="quotes-icon flaticon-quote"></i>
                                <div class="testimonial-text m-sm-b20 m-b30">
                                    <p>“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                        ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni.</p>
                                </div>
                            </div>
                            <div class="testimonial-details">
                                <div class="d-flex align-items-center">
                                    <div class="testimonial-pic">
                                        <img src="assets/images/testimonials/pic1.jpg" alt="">
                                    </div>
                                    <div class="info">
                                        <h4 class="testimonial-name">Jonathan Lee</h4>
                                        <span class="testimonial-position ">Dumbbell Trainer</span>
                                    </div>
                                </div>
                                <ul class="testimonial-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star text-muted"></i></li>
                                    <li><i class="fa-solid fa-star text-muted"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide wow fadeInUp" data-wow-delay="0.4s">
                        <div class="testimonial-1">
                            <div class="testimonial-info">
                                <i class="quotes-icon flaticon-quote"></i>
                                <div class="testimonial-text m-sm-b20 m-b30">
                                    <p>“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                        ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni.</p>
                                </div>
                            </div>
                            <div class="testimonial-details">
                                <div class="d-flex align-items-center">
                                    <div class="testimonial-pic">
                                        <img src="assets/images/testimonials/pic2.jpg" alt="">
                                    </div>
                                    <div class="info">
                                        <h4 class="testimonial-name">Richard Hartisona</h4>
                                        <span class="testimonial-position ">Crossfit Coach</span>
                                    </div>
                                </div>
                                <ul class="testimonial-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star text-muted"></i></li>
                                    <li><i class="fa-solid fa-star text-muted"></i></li>
                                    <li><i class="fa-solid fa-star text-muted"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide wow fadeInUp" data-wow-delay="0.8s">
                        <div class="testimonial-1">
                            <div class="testimonial-info">
                                <i class="quotes-icon flaticon-quote"></i>
                                <div class="testimonial-text m-sm-b20 m-b30">
                                    <p>“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                        ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur magni.</p>
                                </div>
                            </div>
                            <div class="testimonial-details">
                                <div class="d-flex align-items-center">
                                    <div class="testimonial-pic">
                                        <img src="assets/images/testimonials/pic3.jpg" alt="">
                                    </div>
                                    <div class="info">
                                        <h4 class="testimonial-name">Lindsey Botosh</h4>
                                        <span class="testimonial-position ">Fitness Trainer</span>
                                    </div>
                                </div>
                                <ul class="testimonial-rating">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star text-muted"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix justify-content-center d-flex m-sm-t30 m-t50">
                    <div class="num-pagination">
                        <div class="swiper-pagination dz-swiper-pagination1 style-2 justify-content-center"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials-->

        <!-- Call To Action -->
        <section class="call-action style-2 bg-img-fix bg-primary">
            <div class="container">
                <div class="inner-content">
                    <div class="row justify-content-between align-items-center">
                        <div class="text-center text-lg-start col-xl-6 m-lg-b20 wow fadeInUp" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <h2 class="title m-0"><span class="font-weight-400">Subscribe To Our </span>Newsletter
                            </h2>
                        </div>
                        <div class="text-center text-lg-end col-xl-6 wow fadeInUp" data-wow-delay="0.4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <form class="dzSubscribe"
                                action="https://powerzone.dexignzone.com/xhtml/assets/script/mailchamp.php"
                                method="post">
                                <div class="dzSubscribeMsg"></div>
                                <div class="form-group">
                                    <div class="input-group mb-0">
                                        <div class="input-skew">
                                            <input name="dzEmail" required="required" type="email"
                                                class="form-control" placeholder="Your Email Address">
                                        </div>
                                        <div class="input-group-addon">
                                            <button name="submit" value="Submit" type="submit"
                                                class="btn btn-secondary btn-lg btn-skew h-100"><span
                                                    class="skew-inner"><span class="text">Subscribe
                                                        Now</span></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            console.log('test55');
            let error = "{{ session('error') }}";
            let success = "{{ session('success') }}";

            if (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: error
                });
            } else if (success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Succès',
                    text: success
                });
            }
        </script>
    </div>
@endsection
