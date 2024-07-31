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
                <div class="  m-b20 flex justify-center items-center">
                    <div class="col-lg-4 m-md-t40">
                        <div class="calculate-table wow fadeInUp" data-wow-delay="0.6s">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Calories</th>
                                        <th>Weight Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Calories</td>
                                        <td>{{ $total_calories }}</td>
                                    </tr>
                                    <tr>
                                        <td>Protein</td>
                                        <td>{{ $protein_g }}</td>
                                    </tr>
                                    <tr>
                                        <td>Carbs</td>
                                        <td>{{ $carb_g }}</td>
                                    </tr>
                                    <tr>
                                        <td>Fats</td>
                                        <td>{{ $fat_g }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="weight-info">

                            </div>
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
