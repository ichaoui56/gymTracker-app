@extends('Layouts.homeLayout')

@section('title')
    Class details
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
                            <h1>Blog Grid Left Sidebar</h1>
                            <!-- Breadcrumb Row -->
                            <nav aria-label="breadcrumb" class="breadcrumb-row">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Grid Left Sidebar</li>
                                </ul>
                            </nav>
                            <!-- Breadcrumb Row End -->
                        </div>
                    </div>
                </div>
                <div class="banner-media">
                    <img src="{{ asset('assets/images/banner/pic4.png') }}" alt="/">
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!--Blog-->
        <section class="content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 order-lg-1 order-2 m-b30">
                        <aside class="side-bar sticky-top left">
                            <div class="widget">
                                <div class="widget-title wow fadeInUp" data-wow-delay="0.4s">
                                    <h4 class="title">Search</h4>
                                </div>
                                <div class="search-bx wow fadeInUp" data-wow-delay="0.6s">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <div class="input-side">
                                                <input name="text" class="form-control" placeholder="Search..."
                                                    type="text">
                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn">
                                                        <i class="flaticon-magnifying-glass"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="widget widget_categories style-1">
                                <div class="widget-title wow fadeInUp" data-wow-delay="0.8s">
                                    <h4 class="title">Category</h4>
                                </div>
                                <ul class="wow fadeInUp" data-wow-delay="1.0s">
                                    <li class="cat-item cat-item-26"><a href="javascript:void(0);">Accessories</a>(15)</li>
                                    <li class="cat-item cat-item-36"><a href="javascript:void(0);">Casual</a>(20)</li>
                                    <li class="cat-item cat-item-43"><a href="javascript:void(0);">Design</a>(10)</li>
                                    <li class="cat-item cat-item-27"><a href="javascript:void(0);">Everyday</a>(7)</li>
                                    <li class="cat-item cat-item-40"><a href="javascript:void(0);">Fitness</a>(3)</li>
                                    <li class="cat-item cat-item-40"><a href="javascript:void(0);">Hoodies</a>(8)</li>
                                    <li class="cat-item cat-item-40"><a href="javascript:void(0);">Shoes</a>(5)</li>
                                    <li class="cat-item cat-item-40"><a href="javascript:void(0);">Sport</a>(2)</li>
                                </ul>
                            </div>

                            <div class="widget recent-posts-entry style-2">
                                <div class="widget-title wow fadeInUp" data-wow-delay="1.2s">
                                    <h4 class="title">Recent Post</h4>

                                </div>
                                <div class="widget-post-bx">
                                    <div class="widget-post clearfix wow fadeInUp" data-wow-delay="1.4s">
                                        <div class="dz-media">
                                            <img src="{{ asset('assets/images/blog/recent-blog/pic4.jpg') }}" alt="/">
                                        </div>
                                        <div class="dz-info">
                                            <h6 class="title"><a href="blog-detail.html">Fitness Rope</a></h6>
                                            <div class="dz-meta">
                                                <ul>
                                                    <li><a href="javascript:void(0);">
                                                            <i class="flaticon-calendar-1"></i>
                                                            20 Jan 2023</a>
                                                    </li>
                                                    <li><a href="javascript:void(0);">
                                                            <i class="flaticon-user"></i>
                                                            By John</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix wow fadeInUp" data-wow-delay="1.6s">
                                        <div class="dz-media">
                                            <img src="{{ asset('assets/images/blog/recent-blog/pic5.jpg') }}" alt="/">
                                        </div>
                                        <div class="dz-info">
                                            <h6 class="title"><a href="blog-detail.html">Hand Strengthener</a></h6>
                                            <div class="dz-meta">
                                                <ul>
                                                    <li><a href="javascript:void(0);">
                                                            <i class="flaticon-calendar-1"></i>
                                                            14 June 2023</a>
                                                    </li>
                                                    <li><a href="javascript:void(0);">
                                                            <i class="flaticon-user"></i>
                                                            By Marry</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix wow fadeInUp" data-wow-delay="1.8s">
                                        <div class="dz-media">
                                            <img src="{{ asset('assets/images/blog/recent-blog/pic6.jpg') }}" alt="/">
                                        </div>
                                        <div class="dz-info">
                                            <h6 class="title"><a href="blog-detail.html">Dumbbells Set OF 2</a></h6>
                                            <div class="dz-meta">
                                                <ul>
                                                    <li><a href="javascript:void(0);">
                                                            <i class="flaticon-calendar-1"></i>
                                                            15 Dec 2023</a>
                                                    </li>
                                                    <li><a href="javascript:void(0);">
                                                            <i class="flaticon-user"></i>
                                                            By Charlie</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="widget widget_tag_cloud">
                                <div class="widget-title wow fadeInUp" data-wow-delay="2.0s">
                                    <h4 class="title">Popular Tags</h4>
                                </div>
                                <div class="tagcloud wow fadeInUp" data-wow-delay="2.2s">
                                    <a href="javascript:void(0);">Equipment</a>
                                    <a href="javascript:void(0);">Fitness</a>
                                    <a href="javascript:void(0);">Gym</a>
                                    <a href="javascript:void(0);">Workout</a>
                                    <a href="javascript:void(0);">Powerlifting</a>
                                    <a href="javascript:void(0);">Strength</a>
                                    <a href="javascript:void(0);">Running</a>
                                    <a href="javascript:void(0);">Yoga</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8 order-lg-2 order-1 m-b30">
                        <div class="row">
                            @foreach ($blogs as $blog)
                                <div class="col-lg-6 col-md-6 m-b30">
                                    <div class="dz-card style-2 overlay-shine wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="dz-media" style="height:100%;">
                                            <a href="javascript:void(0);"><img src="{{ asset( $blog->picture ) }}"
                                                    alt="/"></a>
                                        </div>
                                        <div class="dz-info">
                                            <div class="dz-meta">
                                                <div class="mb-3">
                                                    <span
                                                        class="bg-yellow-500 rounded-full text-white px-3 py-1 text-xs uppercase font-medium">{{ $blog->category->name }}</span>
                                                </div>
                                                <ul>
                                                    <li class="dz-date">
                                                        <a href="javascript:void(0);"><i class="flaticon-calendar-1"></i>
                                                            {{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}
                                                        </a>
                                                    </li>
                                                    <li class="dz-time">
                                                        <a href="javascript:void(0);"><i class="flaticon-user"></i> By
                                                            {{ $blog->coach->name }}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h4 class="dz-title">
                                                <a href="blog-grid-left-sidebar.html">
                                                    {{ substr($blog->title, 0, 30) }}
                                                </a>
                                            </h4>
                                            <p>{{ substr($blog->description, 0, 60) }}</p>
                                            <div class="read-btn">
                                                <a class="btn btn-skew btn-secondary" href="{{ route('blog.detail' ,['id'=> $blog->id ]) }}"><span
                                                        class="skew-inner"><span class="text">Read
                                                            More</span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center m-t10 wow fadeInUp" data-wow-delay="1.6s">
                            <a href="blog-grid-left-sidebar.html" class="btn btn-primary btn-lg btn-skew"><span
                                    class="skew-inner"><span class="text">Load More</span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Blog-->

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

    </div>
@endsection
