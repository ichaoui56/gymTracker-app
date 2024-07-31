<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from powerzone.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Apr 2024 13:53:08 GMT -->

<head>

    <!-- Title -->
    <title>GymTracker | Blog Detail</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="keywords"
        content="bodybuilding, class, clean, coach, fitness, fitness gym, gym, gym trainer, health, martial arts, personal trainer, sport, sports theme, training, workout, Fitness template, Workout design, Health and wellness, Exercise layout, Fitness app, Gym website, UI components, UX components, Workout routines, Health template, UIUX, creative, HTML, CSS, Sass Integration, HTML Template, Bootstrap, Bootstrap Template, Gym UI Kit, websiite, Website template, Fitness Website Design, Exercise App Design, Gym Interface, Exercise Dashboard, Gym Homepage Template, HTML Gym Template, Responsive Gym Design, responsive, HTML Fitness Components, Workout Program Template, Fitness Studio HTML, Responsive Workout Design, Landing Page Kit, HTML5, HTML/CSS">
    <meta name="description"
        content="Embark on a transformative fitness journey with the PowerZone HTML Template. Elevate your workouts and gym routines with this dynamic and versatile template designed to unleash the power of sleek aesthetics and intuitive features. Discover a world of possibilities for fitness and wellness, as PowerZone becomes your gateway to a healthier, stronger version of yourself. With its modern design and comprehensive features, this template is set to redefine and enhance your fitness experience like never before">
    <meta property="og:title" content="PowerZone - Fitness, Workout & Gym HTML Template | DexignZone">
    <meta property="og:description"
        content="Embark on a transformative fitness journey with the PowerZone HTML Template. Elevate your workouts and gym routines with this dynamic and versatile template designed to unleash the power of sleek aesthetics and intuitive features. Discover a world of possibilities for fitness and wellness, as PowerZone becomes your gateway to a healthier, stronger version of yourself. With its modern design and comprehensive features, this template is set to redefine and enhance your fitness experience like never before">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">
    <meta name="twitter:title" content="PowerZone - Fitness, Workout & Gym HTML Template | DexignZone">
    <meta name="twitter:description"
        content="Embark on a transformative fitness journey with the PowerZone HTML Template. Elevate your workouts and gym routines with this dynamic and versatile template designed to unleash the power of sleek aesthetics and intuitive features. Discover a world of possibilities for fitness and wellness, as PowerZone becomes your gateway to a healthier, stronger version of yourself. With its modern design and comprehensive features, this template is set to redefine and enhance your fitness experience like never before">
    <meta name="twitter:image" content="social-image.png">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Tailwind cdn -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="{{ asset('assets/vendor/animate/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('./assets-dashboard/css/buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/splitting/dist/splitting.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/rangeslider/rangeslider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/switcher/switcher.css') }}" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link class="skin" rel="stylesheet" href="{{ asset('assets/css/skin/skin-1.css') }}">

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

    <!-- SweetAleart -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

</head>

<body id="bg" class="data-typography-1">
    <div id="loading-area" class="loading-page-1">
        <div class="loading-inner">
            <span class="text-primary">G</span>
            <span class="text-primary">Y</span>
            <span class="text-primary">M</span>
            <span class="text-white">T</span>
            <span class="text-white">R</span>
            <span class="text-white">A</span>
            <span class="text-white">C</span>
            <span class="text-white">K</span>
            <span class="text-white">E</span>
            <span class="text-white">R</span>
        </div>
    </div>

    <div class="page-wraper">
        <!-- Header -->

        <x-Navbars.back-up-home-navbar :user="$user" />

        <!-- End Header -->

        <div class="page-content bg-white">
            <section class="content-inner overflow-hidden">
                <div class="min-container">
                    <div class="blog-single dz-blog sidebar">
                        <div class="post-header">
                            <h1 class="dz-title wow fadeInUp" data-wow-delay="0.2s">{{ $blog->title }}</h1>
                            <div class="dz-meta">
                                <ul class="text-center wow fadeInUp" data-wow-delay="0.3s">
                                    <li class="post-date">
                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y') }}</li>
                                    <li class="dz-user">
                                        <i class="fa-solid fa-user"></i>
                                        By <a href="javascript:void(0);"> {{ $blog->coach->name }}</a>
                                    </li>
                                    <li class="dz-comment">
                                        <i class="fa-solid fa-message"></i>
                                        <a href="javascript:void(0);"><span id="count"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dz-media alignfullwide wow fadeInUp" data-wow-delay="0.4s">
                            <img src="{{ asset($blog->picture) }}" alt="">
                        </div>
                        <div class="dz-info">
                            <div class="dz-post-text">
                                <p class="wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                    dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book.</p>

                                <blockquote class="wp-block-quote wow fadeInUp" data-wow-delay="0.6s">
                                    <p> {{ $blog->quote->name }}</p>
                                    <i class="flaticon-right-quote quotes"></i>
                                </blockquote>

                                <p class="wow fadeInUp" data-wow-delay="0.9s">Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                    dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. It has survived not only five centuries,
                                    but also the leap into electronic typesetting, remaining essentially unchanged. It
                                    was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                    Ipsum passages, and more recently with desktop publishing software like Aldus
                                    PageMaker including versions of Lorem Ipsum.</p>

                                <div class="author-box m-b30 wow fadeInUp" data-wow-delay="1.2s">
                                    <div class="author-profile-info">
                                        <div class="author-profile-pic">
                                            <img src="{{ asset($blog->coach->picture) }}" alt="/">
                                        </div>
                                        <div class="author-profile-content">
                                            <h5>I am {{ $blog->coach->name }}</h5>
                                            <p>Gym Trainer At GymTracker</p>
                                            <img src="{{ asset('assets/images/blog/detail/signing.png') }}"
                                                alt="/">
                                            <ul class="social-icon m-b0">
                                                <li>
                                                    <a href="https://www.facebook.com/dexignzone" target="_blank">
                                                        <i class="fa-brands fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/dexignzone/" target="_blank">
                                                        <i class="fa-brands fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/dexignzones" target="_blank">
                                                        <i class="fa-brands fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.behance.net/dexignzone" target="_blank">
                                                        <i class="fa-brands fa-behance"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p class="wow fadeInUp" data-wow-delay="1.3s">Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                    dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. It has survived not only five centuries,
                                    but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p class="wow fadeInUp" data-wow-delay="1.4s">Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                    dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. It has survived not only five centuries,
                                    but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                            <div class="dz-share-post wow fadeInUp" data-wow-delay="1.5s">
                                <div class="post-tags">
                                    <h6 class="m-b0 m-r10 d-inline">Tags:</h6>
                                    <a href="javascript:void(0);"><span>Equipment </span></a>
                                    <a href="javascript:void(0);"><span>Fitness</span></a>
                                    <a href="javascript:void(0);"><span>Gym</span></a>
                                </div>
                                <div class="dz-social-icon dark">
                                    <ul>
                                        <li><a target="_blank" class="fab fa-facebook-f"
                                                href="https://www.facebook.com/"></a></li>
                                        <li><a target="_blank" class="fab fa-instagram"
                                                href="https://www.instagram.com/"></a></li>
                                        <li><a target="_blank" class="fab fa-twitter"
                                                href="https://twitter.com/"></a></li>
                                        <li><a target="_blank" class="fab fa-youtube"
                                                href="https://www.youtube.com/"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clear" id="comment-list">
                        <div class="post-comments comments-area style-1 clearfix wow fadeInUp" data-wow-delay="1.6s">
                            <h4 id="count" class="comments-title mb-2">Comments (03)</h4>
                            <p class="dz-title-text">There are many variations of passages of Lorem Ipsum available.
                            </p>
                            <div id="comment">
                                <ol class="comment-list comments-container">
                                    {{-- comment section --}}
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="default-form comment-respond style-1 wow fadeInUp" data-wow-delay="1.7s"
                        id="respond">
                        <h4 class="comment-reply-title mb-2" id="reply-title">Good Comments</h4>
                        <p class="dz-title-text">There are many variations of passages of Lorem Ipsum available.</p>
                        <div class="clearfix">
                            <form class="mb-6 w-full" action="{{ route('add.comment') }}" method="POST"
                                id="addBlog">
                                @csrf
                                <input type="hidden" name="blogId" value="{{ $blog->id }}">
                                <div class="flex flex-col justify-start">
                                    <div
                                        class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">

                                        <label for="comment" class="sr-only">Your comment</label>
                                        <textarea id="comment" rows="6" name="content"
                                            class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                            placeholder="Write a comment..." required></textarea>
                                    </div>
                                    <p class="col-md-12 col-sm-12 col-xs-12 form-submit">
                                        <button id="addBlog" type="submit"
                                            class="submit btn btn-secondary btnhover3 filled">
                                            Submit Now
                                        </button>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Call To Action -->
            <section class="call-action style-2 bg-img-fix bg-primary">
                <div class="container">
                    <div class="inner-content">
                        <div class="row justify-content-between align-items-center">
                            <div class="text-center text-lg-start col-xl-6 m-lg-b20 wow fadeInUp"
                                data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <h2 class="title m-0"><span class="font-weight-400">Subscribe To Our </span>Newsletter
                                </h2>
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

        <x-Footers.home-footer />
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#addBlog').on('submit', function(event) {
                event.preventDefault();
                jQuery.ajax({
                    url: "{{ url('ajaxupload') }}",
                    data: jQuery('#addBlog').serialize(),
                    type: 'post',
                    success: function(result) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'bottom-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal
                                    .stopTimer);
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer);
                            }
                        });

                        Toast.fire({
                            icon: 'success',
                            title: 'Comment posted successfully'
                        });
                        // Reset the form after posting
                        jQuery('#addBlog')[0].reset();
                        fetchComments();
                    }
                })
            });
        });

        fetchComments();
        const count = document.getElementById('count');

        function fetchComments() {
            var blogId = jQuery('input[name="blogId"]').val();
            console.log(`/comments/${blogId}`);
            jQuery.ajax({
                url: `/comments/${blogId}`,
                type: 'get',
                success: function(comments) {
                    console.log(comments);
                    count.textContent = `${comments.length} Comments`;

                    var commentsHtml = '';
                    comments.forEach(function(comment) {
                        // Format the comment creation date
                        var date = new Date(comment.created_at);
                        var formattedDate = date.toLocaleDateString("en-US", {
                            year: 'numeric',
                            month: 'short',
                            day: 'numeric'
                        });
                        var formattedTime = date.toLocaleTimeString("en-US", {
                            hour: 'numeric',
                            minute: 'numeric'
                        });
                        var profilePictureUrl = comment.user.picture;
                        console.log(profilePictureUrl);

                        commentsHtml += `
                                <article class="p-6 text-base bg-white mt-4 rounded-lg dark:bg-gray-900">
                                    <footer class="flex justify-between items-center mb-2">
                                        <div class="flex items-center">
                                            <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
                                                <img
                                                    class="mr-2 w-6 h-6 rounded-full"
                                                    src="/${comment.user.picture}"
                                                    alt="${comment.user.name}">${comment.user.name}</p>
                                             <p class="text-sm text-gray-600 dark:text-gray-400">
                                                                   <time pubdate datetime="${comment.created_at}" title="${formattedDate}">${formattedDate} | ${formattedTime}</time>

                            </p>
                                        </div>
                                        <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                                type="button">
                                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                 fill="currentColor" viewBox="0 0 16 3">
                                                <path
                                                    d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                            </svg>
                                            <span class="sr-only">Comment settings</span>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <div id="dropdownComment1"
                                             class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="dropdownMenuIconHorizontalButton">
                                                <li>
                                                    <a href="#"
                                                       class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                       class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                       class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </footer>
                                                       <p class="text-gray-500 dark:text-gray-400">${comment.content}</p>

                                    
                                </article>
                `;
                    });
                    jQuery('.comments-container').html(commentsHtml);
                }
            });
        }
    </script>

    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('assets/vendor/wow/wow.js') }}"></script><!-- WOW.JS -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('assets/vendor/splitting/dist/splitting.min.js') }}"></script><!-- Splitting -->
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script><!-- BOOTSTRAP SELEECT -->
    <script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
    <script src="{{ asset('assets/vendor/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('assets/vendor/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script><!-- SWIPER -->
    <script src="{{ asset('assets/vendor/rangeslider/rangeslider.js') }}"></script><!-- RANGESLIDER -->
    <script src="{{ asset('assets/vendor/switcher/switcher.js') }}"></script><!-- SWITCHER -->
    <script src="{{ asset('assets/js/dz.carousel.js') }}"></script><!-- OWL-CAROUSEL -->
    <script src="{{ asset('assets/js/dz.ajax.js') }}"></script><!-- AJAX -->
    <script src="{{ asset('assets/js/custom.js') }}"></script><!-- CUSTOM JS -->
    <script src="{{ asset('assets/js/imageRegister.js') }}"></script><!-- ImageRegister JS -->

</body>

</html>
