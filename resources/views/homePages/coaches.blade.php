@extends('Layouts.homeLayout')

@section('title')
    Coaches
@endsection


@section('main')
    <div class="page-content bg-white">


        <!-- Banner  -->
        <div class="dz-bnr-inr style-2" style="background-image: url('assets/images/banner/banner-2.png')">
            <div class="banner-gradient"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="dz-bnr-inr-entry">
                            <h1>Our Team</h1>
                            <!-- Breadcrumb Row -->
                            <nav aria-label="breadcrumb" class="breadcrumb-row">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                                </ul>
                            </nav>
                            <!-- Breadcrumb Row End -->
                        </div>
                    </div>
                </div>
                <div class="banner-media">
                    <img src="assets/images/banner/pic1.png" alt="/">
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Our Team -->
        <section class="content-inner">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach ($coaches as $coach)
                        <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                            <div class="dz-team style-1 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="dz-media">
                                    <a href="{{ route('coach.detail', ['id' => $coach->id])}}"><img src="{{ $coach->picture }}" alt=""></a>
                                    <ul class="team-social">
                                        <li><a href="https://www.facebook.com/" class="fab fa-facebook-f"></a></li>
                                        <li><a href="https://www.instagram.com/" class="fab fa-instagram"></a></li>
                                        <li><a href="https://twitter.com/?lang=en" class="fab fa-twitter"></a></li>
                                    </ul>
                                </div>
                                <div class="dz-content ">
                                    <h4 class="dz-name">{{ $coach->name }}</h4>
                                    <span class="dz-position">
                                        @if ($coach->classes->isEmpty())
                                            Online Trainer
                                        @else
                                            @foreach ($coach->classes as $class)
                                                {{ $class->category->name }} Trainer
                                                @if (!$loop->last)
                                                    ,
                                                @endif
                                            @endforeach
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Our Team -->

        <!-- Call To Action -->
        <section class="call-action style-2 bg-img-fix bg-primary">
            <div class="container">
                <div class="inner-content">
                    <div class="row justify-content-between align-items-center">
                        <div class="text-center text-lg-start col-xl-6 m-lg-b20 wow fadeInUp" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <h2 class="title m-0"><span class="font-weight-400">Subscribe To Our </span>Newsletter</h2>
                        </div>
                        <div class="text-center text-lg-end col-xl-6 wow fadeInUp" data-wow-delay="0.4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <form class="dzSubscribe"
                                action="https://powerzone.dexignzone.com/xhtml/assets/script/mailchamp.php" method="post">
                                <div class="dzSubscribeMsg"></div>
                                <div class="form-group">
                                    <div class="input-group mb-0">
                                        <div class="input-skew">
                                            <input name="dzEmail" required="required" type="email" class="form-control"
                                                placeholder="Your Email Address">
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
    </div>
@endsection
