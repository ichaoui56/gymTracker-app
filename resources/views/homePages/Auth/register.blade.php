@extends('Layouts.homeLayout')

@section('title')
    Register
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
                            <h1>Register Section</h1>
                            <!-- Breadcrumb Row -->
                            <nav aria-label="breadcrumb" class="breadcrumb-row">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Register</li>
                                </ul>
                            </nav>
                            <!-- Breadcrumb Row End -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="banner-media">
                            <img src="assets/images/banner/pic1.png" alt="/">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->
        <section class="p-0 overflow-hidden">
            <div class="row">
                <div class="col-xxl-6 col-xl-12 col-lg-6 col-md-12 end-side-content">
                    <div class="login-area sticky-top wow bounceIn" data-wow-duration="2s" data-wow-delay="0.2s">
                        <h2 class="title">Welcome Back</h2>
                        <p class="text-white text-center m-b25">welcome please Register with new account</p>
                        <div class="tab-content nav">
                            <form id="register" class="tab-pane active col-12" action="{{ route('store.register') }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <input class="login-input" name="picture" type="file" accept="image/*" id="imageInput"
                                    style="display: none">
                                <!-- Circular image container -->
                                <label for="imageInput"
                                    class="relative mt-2 mr-48 mb-3 top-2 left-20 cursor-pointer ml-10 flex justify-center">
                                    <div class="rounded-full overflow-hidden">
                                        <img id="previewImage" style="width: 90px; height: 90px"
                                            src="/assets/images/photo.png" alt="User Picture">
                                    </div>
                                </label>
                                <h4 class="font-semibold mb-10 text-center text-white">Select a Profile Image</h4>
                                <div class="m-b20">
                                    <label class="label-title">Full Name</label>
                                    <input name="name" required class="form-control" placeholder="Full Name"
                                        type="text">
                                </div>
                                <div class="m-b20">
                                    <label class="label-title">Email Address</label>
                                    <input name="email" required class="form-control" placeholder="Email Address"
                                        type="email">
                                </div>
                                <div class="m-b20">
                                    <label class="label-title">Phone Number</label>
                                    <input name="phone_number" required class="form-control" placeholder="Phone Number"
                                        type="tel">
                                </div>
                                <div class="m-b20">
                                    <label class="label-title">City</label>
                                    <select name="city_id" class="form-control" required style="color: black;">
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="m-b30">
                                    <label class="label-title">Password</label>
                                    <div class="secure-input">
                                        <input type="password" name="password" class="form-control dz-password"
                                            placeholder="Password">
                                        <div class="show-pass">
                                            <i class="eye-open fa-regular fa-eye"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary m-b15 w-100">Sign Up</button>
                                    <a href="javascript:void(0);" class="btn-link">Already have an account?<a
                                            href="/login"> Sign In</a></a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <script src="{{ asset('assets/js/imageRegister.js') }}"></script><!-- ImageRegister JS -->
@endsection
