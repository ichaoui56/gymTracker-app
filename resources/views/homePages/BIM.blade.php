@extends('Layouts.homeLayout')

@section('title')
    Calories
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
                            <h1>BMI Calculator</h1>
                            <!-- Breadcrumb Row -->
                            <nav aria-label="breadcrumb" class="breadcrumb-row">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">BMI</li>
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

        <!-- Body Mass Index -->
        <section class="content-inner overflow-hidden">
            <div class="">
                <div class="row  m-b20 flex justify-center items-center">
                    <div class="col-lg-8">
                        <div class="calculator-form wow fadeInUp" data-wow-delay="0.4s">
                            <div class="section-head style-2 m-0">
                                <h2 class="title text-white m-0">What is Calories</h2>
                                <p class="text-white w-100">Lorem Ipsum available, but the majority have suffered alteration
                                    in some form, injected humour, or randomised words which don't look even slightly
                                    believable.</p>
                            </div>
                            <form action="{{ route('calculate.bmr') }}" method="POST">
                                @csrf
                                <input type="hidden" class="form-control" name="dzToDo" value="Contact">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="form-label text-primary">Height</label>
                                        <div class="input-group input-line">
                                            <input name="height" id="height" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label text-primary">Weight / Kg</label>
                                        <div class="input-group input-line">
                                            <input name="weight" id="weight" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label text-primary">Age</label>
                                        <div class="input-group input-line">
                                            <input name="age" id="age" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label text-primary">Gender</label>
                                        <div class="input-group input-line">
                                            <select name="gender" class="default-select style-1" id="gender">
                                                <option value="male" selected>Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 m-b20">
                                        <label class="form-label text-primary">Select An Activity Factor:</label>
                                        <div class="input-group input-line">
                                            <select name="activity_level" class="default-select style-1" id="gender">
                                                <option value="sedentary" selected>sedentary</option>
                                                <option value="lightly_active">lightly active</option>
                                                <option value="moderately_active">moderately active</option>
                                                <option value="very_active">very active</option>
                                                <option value="extra_active">extra active</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 m-b20">
                                        <label class="form-label text-primary">Weight Goal</label>
                                        <div class="input-group input-line">
                                            <select name="weight_goal" class="default-select style-1" id="gender">
                                                <option value="lose">Lose Weight</option>
                                                <option value="maintain" selected>Maintain Weight</option>
                                                <option value="gain">Gain Weight</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm6">
                                        @if ($user === null || $user->accepted !== 'approved')
                                            <a href="/pricing" class="upgradeBtn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 24">
                                                    <path d="m18 0 8 12 10-8-4 20H4L0 4l10 8 8-12z"></path>
                                                </svg>
                                                Unlock Pro
                                            </a>
                                        @else
                                            <button name="submit" type="submit" value="Submit"
                                                class="btn btn-primary btn-skew m-b30 m-sm-b15"><span
                                                    class="skew-inner"><span class="text">Calculate
                                                        Now</span></span></button>
                                        @endif
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="dzFormBmi"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Body Mass Index -->


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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.calculateBmr').click(function() {
                console.log('testtest');
                changeRole(roleId, userId);
            });

            function changeRole(id, userId) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: '/dashboard/update',
                    data: {
                        id: id,
                        userId: userId
                    },
                    success: function(data) {
                        console.log(data);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }

            $('#filterRole').change(function() {
                var roleFilter = $(this).val();
                if (roleFilter === 'all') {
                    $('.user-container').show();
                } else {
                    $('.user-container').hide();
                    $('.role-' + roleFilter).show();
                }
            });
        });
    </script>
@endsection
