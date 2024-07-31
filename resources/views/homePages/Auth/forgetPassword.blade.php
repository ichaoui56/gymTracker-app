@extends('Layouts.homeLayout')

@section('title')
    Forget Password
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
                            <form id="login" class="tab-pane active col-12">
                                <form class="tab-pane fade  col-12 text-center">
                                    <h4 class="m-b5 text-white">Forget Password ?</h4>
                                    <small class="font-weight-600 m-b20 d-block text-white">We will send you an email to
                                        reset
                                        your password. </small>
                                    <div class="mb-3">
                                        <label class="label-title">E-MAIL *</label>
                                        <input name="dzName" required="" class="form-control"
                                            placeholder="Your Email Id" type="email">
                                    </div>
                                    <div class="text-center">
                                        <a class="btn btn-light m-r10 rounded-0" href="/login">Back</a>
                                        <button class="btn btn-primary rounded-0">Reset</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
