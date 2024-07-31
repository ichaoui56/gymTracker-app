@extends('Layouts.homeLayout')

@section('title')
    Pricing
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
                            <h1>Our Pricing</h1>
                            <!-- Breadcrumb Row -->
                            <nav aria-label="breadcrumb" class="breadcrumb-row">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Our Pricing</li>
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
                <div class="section-head style-2 text-center wow fadeInUp" data-wow-delay="0.4s">
                    <h2 class="title">Choose Your Perfect Plan</h2>
                </div>
                <div class="row justify-content-center">
                    @foreach ($abonnements as $abonnement)
                        <div class="col-lg-4 col-md-6 m-b30">
                            <div class="pricingtable-wrapper style-3 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="pricingtable-inner">
                                    <div class="pricingtable-price">
                                        <div class="pricingtable-title">{{ $abonnement->plan->name }}</div>
                                        <div class="pricingtable-title premium">Popular Plan</div>
                                        <h2 class="pricingtable-bx">${{ $abonnement->price }}<small>/ Per User Per
                                                Month</small></h2>
                                        <p class="m-b20">{{ $abonnement->name }}</p>
                                        <div class="pricingtable-button">
                                            <form action="{{ route('add.userAbonnement', ['id' => $abonnement->id]) }}"
                                                method="POST">
                                                @csrf
                                                @if ($user === null || $user->accepted !== 'approved')
                                                    <button type="submit"
                                                        class="btn btn-dark w-full rounded-0 d-block m-b10"><span>Get
                                                            Start</span></button>
                                                @else
                                                    <button type="button" disabled
                                                        class="font-semibold text-sm inline-flex items-center mb-2 h-11 justify-center px-3 py-2 border border-transparent leading-5 shadow transition duration-300 ease-in-out w-full bg-gray-400 text-white cursor-not-allowed focus:outline-none focus-visible:ring-2">
                                                        Alerady resereved
                                                    </button>
                                                @endif
                                            </form>
                                            <a href="contact-us.html"
                                                class="btn btn-outline-dark rounded-0 d-block"><span>Chat To
                                                    Sales</span></a>
                                        </div>
                                    </div>
                                    <div class="pricingtable-features">
                                        <h6 class="pricingtable-sub-title">Features</h6>
                                        <p class="text">Everything in Our Free Plan Plus......</p>
                                        <ul>
                                            @foreach ($abonnement->features as $freature)
                                                <li>{{ $freature->name }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="effect"></div>
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
