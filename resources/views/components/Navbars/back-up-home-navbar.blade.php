@props(['user'])

<header class="site-header mo-left header style-1">
    <!-- Main Header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg border-bottom">
        <div class="main-bar clearfix">
            <div class="container clearfix">
                <div class="clearfix">
                    <!-- Website Logo -->
                    <div class="logo-header mostion logo-dark">
                        <a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                    </div>

                    <!-- Nav Toggle Button -->
                    <button class="navbar-toggler navbar-toggler-skew collapsed navicon justify-content-end"
                        type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <!-- Extra Nav -->
                    <div class="extra-nav">
                    @auth
                        <div x-data="{ open: false }"
                            class="dark:bg-gray-800 w-52 h-16 pl-1 pr-1  rounded-sm  shadow flex justify-center items-center"
                            style="backdrop-filter: blur(10px)">
                            <div @click="open = !open" class="relative border-b-4 border-transparent py-3"
                                :class="{ 'border-white transform transition duration-300 ': open }"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100">
                                <div class="flex justify-center items-center space-x-3 cursor-pointer">
                                    <div
                                        class="w-12 h-12 rounded-full overflow-hidden border-2 dark:border-white border-gray-900">
                                        <img src="{{ asset($user->picture) }}" alt="" class="w-full h-full object-cover">
                                    </div>
                                    <div class="font-semibold text-black" id="" style="font-size: 14px">
                                        <div class="cursor-pointer">{{ $user->name }}</div>
                                    </div>
                                </div>
                                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    class="absolute w-60 px-5 py-3 bg-white rounded-lg shadow border dark:border-transparent mt-4 -ml-10"
                                    style="opacity: 0.8">
                                    <ul class="space-y-3 dark:text-white">
                                        <li class="font-medium">
                                            <a href="#"
                                                class="flex text-black items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-white">
                                                <div class="mr-3">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                Account
                                            </a>
                                        </li>
                                        <li class="font-medium">
                                            <a href="{{ route('show.myBlogs', ['id' => $user->id])}}"
                                                class="flex text-black items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-white">
                                                <div class="mr-3">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                My Blogs
                                            </a>
                                        </li>
                                        @if(auth()->user()->role_id === 1)
                                            <li class="font-medium">
                                                <a href="/static"
                                                    class="flex text-black items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-white">
                                                    <div class="mr-3">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                                            </path>
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        </svg>
                                                    </div>
                                                    Back Office
                                                </a>
                                            </li>
                                        @endif
                                        <hr class="dark:border-gray-700">
                                        <li class="font-medium">
                                            <form action="{{ route('logout') }}" method="post">
                                                @csrf
                                                <button type="submit"
                                                    class="flex text-red-700 hover:text-red-600 items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                                                    <div class="mr-3 text-red-600">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    Logout
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="header-search-btn"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                            <a href="/login" class="btn btn-primary btn-skew appointment-btn"><span
                                    class="skew-inner"><span class="text">Se connecter</span></span></a>
                        </div>
                    @endauth
                </div>
                    <!-- Extra Nav -->

                    <!-- Search Form -->
                    <div class="dz-quik-search">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control"
                                placeholder="Enter Your Keyword ...">
                            <span id="quik-search-remove"><i class="fa-solid fa-xmark"></i></span>
                        </form>
                    </div>

                    <!-- Header Nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <div class="logo-header logo-dark">
                            <a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                        </div>
                        <ul class="nav navbar-nav navbar navbar-left">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/classes">Classes</a>
                            </li>
                            <li>
                                <a href="/coaches">Coaches</a>
                            </li>
                            <li>
                                <a href="/bim">BIM</a>
                            </li>
                            <li>
                                <a href="/pricing">Pricing</a>
                            </li>
                            <li>
                                <a href="/contact-us">Contact Us</a>
                            </li>
                        </ul>
                        <div class="dz-social-icon">
                            <ul>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://twitter.com/?lang=en">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.linkedin.com/">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://www.instagram.com/?hl=en">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Main Header End -->

</header>
