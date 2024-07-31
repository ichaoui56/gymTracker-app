@extends('Layouts.homeLayout')

@section('title')
    Coach Details
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
                            <h1>Coach Detail</h1>
                            <!-- Breadcrumb Row -->
                            <nav aria-label="breadcrumb" class="breadcrumb-row">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">COACH DETAIL</li>
                                </ul>
                            </nav>
                            <!-- Breadcrumb Row End -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="banner-media">
                            <img src="{{ asset('assets/images/banner/pic1.png') }}" alt="/">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Our Event Detail -->
        <section class="content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="event-single">
                            <div class="dz-media wow fadeInUp" data-wow-delay="0.4s">
                                <img src="{{ asset($coach->picture) }}" alt="/">
                            </div>
                            <div class="dz-info">
                                <h1 class="dz-title wow fadeInUp" data-wow-delay="0.6s">Personal Trainer to a Healthier
                                    Lifestyle</h1>
                                <p class="event-text wow fadeInUp" data-wow-delay="0.8s">There are many variations of
                                    passages of Lorem Ipsum available, but the majority have some a form suffered alteration
                                    in , by injected humour, or randomised words which don't look even the slightly
                                    believable. If you are going to use a passage Lorem Ipsum, you need to be sure there at
                                    isn't anything hidden in the middle of text.</p>
                            </div>
                            <ul class="pr-list style-2 dark m-b30 wow fadeInUp" data-wow-delay="1.0s">
                                <li><i class="flaticon-check-mark"></i>Overall Health and Wellness</li>
                                <li><i class="flaticon-check-mark"></i>Progress Evaluation</li>
                                <li><i class="flaticon-check-mark"></i>Rewards and Incentives</li>
                                <li><i class="flaticon-check-mark"></i>Tracking Technology</li>
                                <li><i class="flaticon-check-mark"></i>Motivation and Competition</li>
                                <li><i class="flaticon-check-mark"></i>Community Engagement</li>
                                <li><i class="flaticon-check-mark"></i>Tracking Progress</li>
                                <li><i class="flaticon-check-mark"></i>Variety of Activities</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <aside class="side-bar sticky-top">
                            <h3 class="sidebar-title wow fadeInUp" data-wow-delay="0.4s">Coach Details</h3>
                            <div class="cart-sidebar">
                                <div class="cart-detail m-b30 wow fadeInUp" data-wow-delay="0.6s">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Name</h6>
                                                </td>
                                                <td class="price">
                                                    {{ $coach->name }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Email</h6>
                                                </td>
                                                <td class="price">
                                                    {{ $coach->email }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Phone Number</h6>
                                                </td>
                                                <td class="price">
                                                    {{ $coach->phone_number }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">City</h6>
                                                </td>
                                                <td class="price">
                                                    {{ $coach->city->name }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="mb-0">Service</h6>
                                                </td>
                                                <td class="price">
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
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="dz-img-box style-2 wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="dz-media">
                                        <img src="{{ asset('assets/images/event/grid2/pic3.jpg') }}" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h3 class="title">Gym Training And Classes</h3>
                                        <a href="/classes" class="btn btn-primary btn-skew"><span class="skew-inner"><span
                                                    class="text">Learn More</span></span></a>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <div class="content-inner pt-0">
            <div class="container">
                <div class="row">
                    <h4 class="title font-weight-700 m-b30">Other Coaches</h4>
                    <div class="row justify-content-center">
                        @foreach ($coaches as $coach)
                            <div class="col-lg-4 col-md-6 m-b30">
                                <div class="dz-img-box style-1">
                                    <div class="dz-media">
                                        <img src="{{ asset($coach->picture) }}" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <div class="dz-meta">
                                            <ul>
                                                <li>
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
                                                </li>
                                            </ul>
                                        </div>
                                        <h5 class="title"><a href="event-detail.html">{{ asset($coach->name) }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Event Detail -->

        <!-- Call To Action -->
        <section class="call-action style-2 bg-img-fix bg-primary">
            <div class="container">
                <div class="inner-content">
                    <div class="row justify-content-between align-items-center">
                        <div class="text-center text-lg-start col-xl-6 m-lg-b20 wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="title m-0"><span class="font-weight-400">Subscribe To Our </span>Newsletter</h2>
                        </div>
                        <div class="text-center text-lg-end col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                            <form class="dzSubscribe"
                                action="https://powerzone.dexignzone.com/xhtml/assets/script/mailchamp.php" method="post">
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

    </div>
@endsection
