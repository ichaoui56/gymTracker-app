@section('title')
    Abonnement
@endsection

<main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">

    <!-- Navbar -->

    <x-Navbars.dashboard-navbar msg="Your static string here" />

    <!-- End Navbar -->

    <div class="w-full px-6 py-6 mx-auto">
        <!-- content -->


        <!-- Modal toggle -->
        @if (!$plans->isEmpty())
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                Toggle modal
            </button>
        @endif

        <!-- Main modal -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Create New Product
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5" action="{{ route('store.abonnement') }}" method="post">
                        @csrf
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Type product name" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                <input type="number" name="price" id="price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="$2999" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="category"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Feature</label>
                                <select id="feature" name="feature[]" multiple
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <!-- Use Ctrl or Command key to select multiple options -->
                                    @foreach ($features as $feature)
                                        <option value="{{ $feature->id }}">{{ $feature->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-span-2">
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Plan</label>
                                <select id="plan" name="plan"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option disabled selected="">Select plan</option>
                                    @foreach ($plans as $plan)
                                        <option value="{{ $plan->id }}">{{ $plan->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit"
                            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Add new product
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap -mx-3">
            @foreach ($abonnements as $abonnement)
                <div class="w-full px-3 mb-8 lg:mb-0 mt-5 lg:w-1/3">
                    <div class="max-w-[380px] mx-auto pt-10 px-10 pb-8 bg-gray-100 rounded-3xl">
                        <div class="text-center mb-6">
                            <h5 class="text-2xl font-semibold text-gray-800 mb-3">{{ $abonnement->plan->name }}</h5>
                            <span class="block text-5xl font-bold text-gray-800 mb-3">${{ $abonnement->price }}</span>
                            <span class="block text-gray-600 font-medium mb-6">per user, per month</span>
                            <a href="#"
                                class="relative group inline-block w-full py-4 px-6 text-center text-gray-800 hover:text-gray-50 bg-yellow-300 font-semibold rounded-full overflow-hidden transition duration-200">
                                <div
                                    class="absolute top-0 right-full w-full h-full bg-gray-900 transform group-hover:translate-x-full group-hover:scale-102 transition duration-500">
                                </div>
                                <span class="relative">{{ $abonnement->name }}</span>
                            </a>
                        </div>
                        <ul>
                            @foreach ($abonnement->features as $feature)
                                <li class="flex mb-4 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        class="w-6 h-6 fill-current text-gray-800">
                                        <path
                                            d="M7.293 13.293l-3-3a1 1 0 011.414-1.414L8 12.586l8.293-8.293a1 1 0 111.414 1.414l-9 9a1 1 0 01-1.414 0z">
                                        </path>
                                    </svg>
                                    <span class="ml-2 text-gray-800">{{ $feature->name }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 mt-6 md:w-7/12 md:flex-none">
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="p-6 px-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
                        <h6 class="mb-0 dark:text-white">Abonnement Requests</h6>
                    </div>
                    <div class="flex-auto p-4 pt-6">
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            @if ($userAbonnements->isEmpty())
                                No Request found
                            @else
                                @foreach ($userAbonnements as $userAbonnement)
                                    <li
                                        class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50 dark:bg-slate-850">
                                        <div class="flex flex-col">
                                            <h6 class="mb-4 text-sm leading-normal dark:text-white">
                                                {{ $userAbonnement->name }}</h6>
                                            <span class="mb-2 text-xs leading-tight dark:text-white/80">Phone Number:
                                                <span
                                                    class="font-semibold text-slate-700 dark:text-white sm:ml-2">{{ $userAbonnement->phone_number }}
                                                    Burrito</span></span>
                                            <span class="mb-2 text-xs leading-tight dark:text-white/80">Email Address:
                                                <span
                                                    class="font-semibold text-slate-700 dark:text-white sm:ml-2">{{ $userAbonnement->email }}</span></span>
                                            <span class="text-xs leading-tight dark:text-white/80">Plan Name: <span
                                                    class="font-semibold text-slate-700 dark:text-white sm:ml-2">{{ $abonnement->plan->name }}</span></span>
                                        </div>
                                        <div class="ml-auto text-right flex justify-between">
                                            <form
                                                action="{{ route('approve.abonnement', ['id' => $userAbonnement->id]) }}">
                                                <button type="submit"
                                                    class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-transparent align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 bg-gradient-to-tl from-red-600 to-orange-600 hover:-translate-y-px active:opacity-85 bg-x-25 bg-clip-text"><i
                                                        class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-orange-600 bg-x-25 bg-clip-text"></i>Approve
                                                    </bu>
                                            </form>
                                            <form
                                                action="{{ route('decline.abonnement', ['id' => $userAbonnement->id]) }}">
                                                <button type="submit"
                                                    class="relative z-10 inline-block px-4 py-2.5 mb-0 font-bold text-center text-transparent align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-normal text-sm ease-in bg-150 bg-gradient-to-tl from-red-600 to-orange-600 hover:-translate-y-px active:opacity-85 bg-x-25 bg-clip-text"><i
                                                        class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-orange-600 bg-x-25 bg-clip-text"></i>Decline
                                                    </bu>
                                            </form>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-full px-3 mt-6 md:w-5/12 md:flex-none">
                <div
                    class="relative flex flex-col h-full min-w-0 mb-6 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="p-6 px-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
                        <div class="flex flex-wrap -mx-3">
                            <div class="max-w-full px-3 md:w-1/2 md:flex-none">
                                <h6 class="mb-0 dark:text-white">All Memebres Subscriptions</h6>
                            </div>
                            <div
                                class="flex items-center justify-end max-w-full px-3 dark:text-white/80 md:w-1/2 md:flex-none">
                                <i class="mr-2 far fa-calendar-alt"></i>
                                <small>23 - 30 March 2020</small>
                            </div>
                        </div>
                    </div>
                    <div class="flex-auto p-4 pt-6">
                        
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            @foreach($userWithAbonnement as $userSub)
                            <li
                                class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-t-inherit text-inherit rounded-xl">
                                <div class="flex items-center">
                                    <div>
                                        <img src="{{ $userSub->picture}}"
                                            class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl"
                                            alt="user1" />
                                    </div>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal dark:text-white text-slate-700">{{ $userSub->name}}
                                        </h6>
                                        <span class="text-xs leading-tight dark:text-white/80"> {{ date('d F Y, \a\t h:i A', strtotime($userSub->abonnement_date)) }}</span>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p
                                        class="relative z-10 inline-block m-0 text-sm font-semibold leading-normal text-transparent bg-gradient-to-tl from-red-600 to-orange-600 bg-clip-text">
                                        {{ $userSub->abonnement->plan->name }}Plan</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <footer class="pt-4">
            <div class="w-full px-6 mx-auto">
                <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                    <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                        <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                            ©
                            <script>
                                document.write(new Date().getFullYear() + ",");
                            </script>
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com"
                                class="font-semibold dark:text-white text-slate-700" target="_blank">Creative Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                        <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com"
                                    class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500"
                                    target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation"
                                    class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://creative-tim.com/blog"
                                    class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-slate-500"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license"
                                    class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-in-out text-slate-500"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</main>
