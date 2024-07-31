<style>
    .sidebar-open {
        transform: translateX(0);
    }

    .sidebar-closed {
        transform: translateX(-100%);
    }

    #tableDropdown {
        transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        opacity: 0;
        transform: translateY(-10px);
        pointer-events: none;
        /* Prevents interaction with the dropdown while it's hidden */
    }

    #tableDropdown.visible {
        opacity: 1;
        display: block
    }

    .toggle-icon {
        transition: transform 0.3s ease;
    }

    .rotate-down {
        transform: rotate(180deg);
    }
</style>

<aside
    class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-20 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0"
    aria-expanded="false">
    <div class="h-19">
        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden"
            sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700"
            href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html" target="_blank">
            <img src="./assets-dashboard/img/logo-ct-dark.png"
                class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8"
                alt="main_logo" />
            <img src="./assets-dashboard/img/logo-ct.png"
                class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8"
                alt="main_logo" />
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Gym Tracker</span>
        </a>
    </div>

    <hr
        class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
            <li class="mt-0.5 w-full">
                <a class="py-2.7 @if (Request::url() === 'http://127.0.0.1:8000/staticDash') font-black bg-blue-200 @endif hover:bg-blue-200     dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4  text-slate-700 transition-colors"
                    href="/staticDash">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Static</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class=" dark:text-white @if (Request::url() === 'http://127.0.0.1:8000/') font-black bg-blue-500/13 @endif hover:bg-blue-200 dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                    href="/">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Front Office</span>
                </a>
            </li>
            <li>
                <div class="py-2.7 flex justify-between items-center dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4  text-slate-700 transition-colors"
                    onclick="dropdown()">
                    <div class="flex kustify-center items-center">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-align-left-2"></i>
                        </div>
                        <span class="ml-1 duration-300  opacity-100 pointer-events-none ease">Tables</span>
                    </div>
                    <i class="toggle-icon fas fa-chevron-down"></i>
                </div>
                <div class="bg-blue-50 rounded-lg" style="widows: 90%;margin-left: 10px;margin-right: 10px;"
                    id="submenu">
                    <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center hover:bg-blue-300 whitespace-nowrap rounded-lg px-4  text-slate-700 transition-colors"
                        href="/userDash">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-single-02"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">User</span>
                    </a>
                    <a class="py-2.7  dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center hover:bg-blue-300 whitespace-nowrap rounded-lg px-4  text-slate-700 transition-colors"
                        href="/categoryDash">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-tag"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Category</span>
                    </a>
                    <a class="py-2.7 hover:bg-blue-300 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4  text-slate-700 transition-colors"
                        href="/benefitDash">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-like-2"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Benefits</span>
                    </a>
                </div>
            </li>
            <li class="mt-0.5 w-full">
                <a class=" dark:text-white dark:opacity-80 py-2.7 @if (Request::url() === 'http://127.0.0.1:8000/classeDash') font-black bg-blue-500/13 @endif hover:bg-blue-200 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                    href="/classeDash">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-red-500 ni ni-settings-gear-65"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Classes</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class=" dark:text-white dark:opacity-80 py-2.7 @if (Request::url() === 'http://127.0.0.1:8000/AbonnementDash') font-black bg-blue-500/13 @endif hover:bg-blue-200 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                    href="/AbonnementDash">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-yellow-500 ni ni-credit-card"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Abonnement</span>
                </a>
            </li>

            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Account
                    Section
                </h6>
            </li>

            <li class="mt-0.5 w-full">
                <a class=" dark:text-white dark:opacity-80 py-2.7 @if (Request::url() === 'http://127.0.0.1:8000/profileDash') font-black bg-blue-500/13 @endif hover:bg-blue-200 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors"
                    href="/profileDash">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="mx-4">
        <!-- load phantom colors for card after: -->
        <p
            class="invisible hidden text-gray-800 text-red-500 text-red-600 text-blue-500 dark:bg-white bg-slate-500 bg-gray-500/30 bg-cyan-500/30 bg-emerald-500/30 bg-orange-500/30 bg-red-500/30 after:bg-gradient-to-tl after:from-zinc-800 after:to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 after:from-blue-700 after:to-cyan-500 after:from-orange-500 after:to-yellow-500 after:from-green-600 after:to-lime-400 after:from-red-600 after:to-orange-600 after:from-slate-600 after:to-slate-300 text-emerald-500 text-cyan-500 text-slate-400">
        </p>
    </div>
</aside>
<script>
    console.log('test');
    document.addEventListener("DOMContentLoaded", function() {
        const frontOfficeLink = document.querySelector('.front-office-link');
        const tableDropdown = document.getElementById('tableDropdown');
        const sidebar = document.querySelector('.sidebar');
        const toggleIcon = document.querySelector('.toggle-icon');


        frontOfficeLink.addEventListener('click', function() {
            // event.preventDefault();
            tableDropdown.classList.toggle('visible');
            sidebar.classList.toggle('sidebar-open');
            toggleIcon.classList.toggle('rotate-down');
        });

    });
</script>
<script type="text/javascript">
    function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
    }
    dropdown();

    function openSidebar() {
        document.querySelector(".sidebar").classList.toggle("hidden");
    }
</script>
