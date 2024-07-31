@extends('Layouts.homeLayout')

@section('title')
    Login
@endsection

@section('main')
    <div class="page-content bg-white">
 <!-- Banner  -->
        <div class="dz-bnr-inr style-2" style="background-image: url('assets/images/banner/banner-2.png')">
            <div class="banner-gradient"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="dz-bnr-inr-entry" >
                            <h1>Login Section</h1>
                            <!-- Breadcrumb Row -->
                            <nav aria-label="breadcrumb" class="breadcrumb-row">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Login</li>
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
                        <p class="text-white text-center m-b25">welcome please login to your account</p>
                        <div class="tab-content nav">
                            <form id="login" class="tab-pane active col-12" action="{{ route('check.login') }}" method="post">
                                @csrf
                                <div class="m-b30">
                                    <label class="label-title">Email Address</label>
                                    <input name="email" required="" class="form-control" placeholder="Email Address"
                                        type="email">
                                </div>
                                <div class="m-b10">
                                    <label class="label-title">Password</label>
                                    <div class="secure-input ">
                                        <input type="password" name="password" class="form-control dz-password"
                                            placeholder="Password">
                                        <div class="show-pass">
                                            <i class="eye-open fa-regular fa-eye"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-left d-flex align-items justify-content-between m-b30">
                                    <a href="/forgetPassword" class="m-l5">Forgot Password</a>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                        <label class="form-check-label" for="basic_checkbox_1">Remember Me</label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="Submit" class="btn btn-primary m-b15 w-100">Login</button>
                                    <a href="javascript:void(0);" class="btn-link">Don’t have account?<a href="/register"> Sign
                                            Up</a></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
