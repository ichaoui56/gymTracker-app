@extends('Layouts.homeLayout')

@section('title')
    My Blogs
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
                            <h1>Blog Grid 3</h1>
                            <!-- Breadcrumb Row -->
                            <nav aria-label="breadcrumb" class="breadcrumb-row">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog Grid 3</li>
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


        <div class="flex justify-center mt-5 wow fadeInUp" data-wow-delay="0.6s">

            <!-- component -->

            <div>
                @if ($hasClasses)
                    <button class="addBlogBtn" type="button" onclick="openModal()">
                        <span class="addBlogBtn__text">Add Item</span>
                        <span class="addBlogBtn__icon"><svg class="svg" fill="none" height="24"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <line x1="12" x2="12" y1="5" y2="19"></line>
                                <line x1="5" x2="19" y1="12" y2="12"></line>
                            </svg></span>
                    </button>
                @endif

            </div>

            <div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
                style="background: rgba(0,0,0,.7);">
                <div
                    class="border border-teal-500 shadow-lg modal-container bg-white w-6/12 mx-auto rounded shadow-lg z-50 overflow-y-auto">
                    <div class="modal-content py-4 text-left px-6">
                        <!--Title-->
                        <div class="flex justify-between items-center pb-3">
                            <p class="text-2xl font-bold">Create New Blog</p>
                            <div class="modal-close cursor-pointer z-50 hover:bg-gray-200 p-1 rounded-lg opacity-70">
                                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 18 18">
                                    <path
                                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <!--Body-->
                        <form action="{{ route('store.blogs') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input name="picture"
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                id="grid-first-name" type="file" placeholder="Jane">
                            <div class="-mx-3 md:flex mb-6">
                                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                        for="grid-first-name">
                                        Blog Title
                                    </label>
                                    <input name="title"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                                        id="grid-first-name" type="text" placeholder="Jane">
                                </div>
                                <div class="md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                        for="grid-state">
                                        Category
                                    </label>
                                    <div class="relative">
                                        <select name="category"
                                            class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                                            id="grid-state">

                                            <option value="" disabled>Select Category</option>

                                            <option value="{{ $class->category->id }}">{{ $class->category->name }}</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="-mx-3 md:flex mb-2">


                                <div class="md:w-full px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                        for="grid-state">
                                        Quote
                                    </label>
                                    <div class="relative">
                                        <select name="quote"
                                            class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                                            id="grid-state">
                                            <option value="" disabled>Select Quote</option>
                                            @foreach ($quotes as $quote)
                                                <option value="{{ $quote->id }}">{{ $quote->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="-mx-3 md:flex mb-6">
                                <div class="md:w-full px-3">
                                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                                        for="grid-password">
                                        Description
                                    </label>
                                    <textarea name="description"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                                        id="grid-password" type="text" placeholder="Enter a description ..."></textarea>

                                </div>
                            </div>
                            <!--Footer-->
                            <div class="flex justify-end pt-2">
                                <button type="button"
                                    class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancel</button>
                                <button type="submit"
                                    class="focus:outline-none px-4 bg-blue-500 p-3 ml-3 rounded-lg text-white hover:bg-blue-400">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!--Blog Grid 3-->
        <section class="content-inner">
            <div class="container">
                <div class="row">
                    @if ($blogs->count() == 0)
                        <div class="w-full flex flex-col justify-center items-center">
                            <div class="w-1/2 ml-10">
                                <img src="{{ asset('assets/images/no-data-found.png') }}" alt="">
                            </div>
                            <div>
                                <p class="text-2xl text-bold text-center">You Don't Have Any Blog</p>
                            </div>
                        </div>
                    @else
                        @foreach ($blogs as $blog)
                            <div class="col-lg-4 col-md-6">
                                <div class="dz-card style-2 m-b30 overlay-shine wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="dz-media" style="height: 220px;">
                                        <a href="javascript:void(0);"><img src="{{ asset($blog->picture) }}"
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
                                        <div class="flex justify-between">
                                            <div class="read-btn">
                                                <a class="btn btn-skew btn-secondary" href="blog-detail.html"><span
                                                        class="skew-inner"><span class="text">Read
                                                            More</span></span></a>
                                            </div>
                                            <div class="flex">
                                                <form action="{{ route('delete.blog', ['id' => $blog->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="delete-button" type="submit">
                                                        <svg viewBox="0 0 448 512" class="delete-svgIcon">
                                                            <path
                                                                d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </form>
                                                <button class="edit-button ml-1">
                                                    <svg class="edit-svgIcon" viewBox="0 0 512 512">
                                                        <path
                                                            d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                </div>
                <div class="text-center m-t10 wow fadeInUp" data-wow-delay="2.4s">
                    <a href="blog-grid-3.html" class="btn btn-primary btn-lg btn-skew"><span class="skew-inner"><span
                                class="text">Load More</span></span></a>
                </div>
                @endif
            </div>
        </section>

        <!--Blog Grid 3-->

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
