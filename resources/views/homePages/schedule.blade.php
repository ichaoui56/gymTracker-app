@extends('Layouts.homeLayout')

@section('title')
    Schedule
@endsection

@section('main')
    <div class="page-content bg-white">

        <!-- Banner  -->
        <div class="dz-bnr-inr style-2" style="background-image: url('assets/images/banner/banner-2.png')">
            <div class="banner-gradient"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="dz-bnr-inr-entry">
                            <h1>Schedule</h1>
                            <!-- Breadcrumb Row -->
                            <nav aria-label="breadcrumb" class="breadcrumb-row">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Schedule</li>
                                </ul>
                            </nav>
                            <!-- Breadcrumb Row End -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-media">
                            <img src="assets/images/banner/pic3.png" alt="/">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Schedule Table -->
        <div class="content-inner">
            <div class="container">
                <div class="schedule-table style-1 table-responsive ">
                    <table class="table-responsive-md ck-table wow fadeInUp" data-wow-delay="0.6s">
                        <thead>
                            <tr class="">
                                <th></th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="row_1">
                                <td class="event-time"> 06:00 - 07:00 </td>
                                <td class="event" rowspan="2">
                                    <a class="title" href="javascript:void(0);">Open Gym</a>
                                    <div class="event-tag">Gym</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="row_2">
                                <td class="event-time"> 07:00 - 08:00 </td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Cardio Burn</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Power Lifting</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Aerobic</div>
                                </td>
                            </tr>
                            <tr class="row_3">
                                <td class="event-time"> 08:00 - 09:00 </td>
                                <td></td>
                                <td></td>
                                <td class="event" rowspan="2">
                                    <a class="title" href="javascript:void(0);">Crossfit Class</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Strenght</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="row_4">
                                <td class="event-time"> 09:00 - 10:00 </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Cardio Burn</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                            </tr>
                            <tr class="row_5">
                                <td class="event-time"> 10:00 - 11:00 </td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Crossfit Class</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Crossfit Class</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="row_6">
                                <td class="event-time"> 11:00 - 12:00 </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="row_7">
                                <td class="event-time"> 12:00 - 13:00 </td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Cardio Burn</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Power Lifting</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Aerobic</div>
                                </td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Crossfit Class</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                                <td></td>
                            </tr>
                            <tr class="row_8">
                                <td class="event-time"> 13:00 - 14:00 </td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Power Lifting</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Aerobic</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="row_9">
                                <td class="event-time"> 14:00 - 15:00 </td>
                                <td></td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Crossfit Class</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="row_10">
                                <td class="event-time"> 15:00 - 16:00 </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Cardio Burn</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="row_11">
                                <td class="event-time"> 18:00 - 19:00 </td>
                                <td></td>
                                <td class="event">
                                    <a class="title" href="javascript:void(0);">Crossfit Class</a>
                                    <span class="subtitle">Madison Fren</span>
                                    <div class="event-tag">Hit Training</div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Schedule Table -->

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
