@props(['benefits'])

@section('title')
    Benefits
@endsection

<main class="ease-soft-in-out relative h-full max-h-screen rounded-xl transition-all xl:ml-68 duration-200">

    <!-- Navbar -->

    <x-Navbars.dashboard-navbar msg="Your static string here" />

    <!-- End Navbar -->


    <div class="space-y-2 text-center mt-16 mb-10">
        <h2 class="text-3xl font-bold">All Benefits</h2>
        <p class="font-serif text-sm dark:text-gray-400">Here you can add and see all benefits.</p>
    </div>
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex  flex-col justify-between lg:flex-row">

            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0">
                        <div
                            class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                            <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                                <h5>Add Benefits Form</h5>
                            </div>
                            <div class="flex-auto p-6">
                                <form role="form text-left" method="post" action="{{ route('store.benefit') }}">
                                    @csrf
                                    <div class="mb-4">
                                        <input type="text"
                                            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                            name="name" placeholder="Name" aria-label="Name"
                                            aria-describedby="email-addon" />
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" name="submit"
                                            class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                            ADD A BENEFIT
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3" style="width: 605px;">
                    <div
                        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <table
                                    class="items-center justify-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Benefit Id
                                            </th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Name
                                            </th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Operations
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="border-t">
                                        @foreach ($benefits as $benefit)
                                            <tr>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <div class="flex px-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                                {{ $benefit->id }} </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <p
                                                        class="mb-0 text-sm font-semibold leading-normal dark:text-white text-black dark:opacity-60">
                                                        {{ $benefit->name }}</p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b flex dark:border-white/40 whitespace-nowrap shadow-transparent">

                                                    <button data-modal-target="popup-modal-{{ $benefit->id }}"
                                                        data-modal-toggle="popup-modal-{{ $benefit->id }}"
                                                        class="bg-transparent cursor-pointer flex flex-row font-medium text-red-500 px-2 py-1 mt-2 rounded-md transition duration-150"
                                                        type="submit">
                                                        <svg class="w-5 h-5 mx-1" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                            </path>
                                                        </svg>
                                                        Delete
                                                    </button>


                                                    <div id="popup-modal-{{ $benefit->id }}" tabindex="-1"
                                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                                            <div
                                                                class="relative bg-transparent rounded-lg shadow dark:bg-gray-700">
                                                                <button type="button"
                                                                    class="absolute top-3 z-20 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                    data-modal-hide="popup-modal-{{ $benefit->id }}">
                                                                    <svg class="w-3 h-3 " aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 14 14">
                                                                        <path stroke="currentColor"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                    </svg>
                                                                    <span class="sr-only">Close modal</span>
                                                                </button>
                                                                <div
                                                                    class="group select-none w-[250px] flex flex-col p-4 relative items-center justify-center bg-gray-800 border border-gray-800 shadow-lg rounded-2xl">
                                                                    <div class="">
                                                                        <div
                                                                            class="text-center p-3 flex-auto justify-center">
                                                                            <svg fill="currentColor" viewBox="0 0 20 20"
                                                                                class="group-hover:animate-bounce w-12 h-12 flex items-center text-gray-600 fill-red-500 mx-auto"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path clip-rule="evenodd"
                                                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                                    fill-rule="evenodd"></path>
                                                                            </svg>
                                                                            <h2
                                                                                class="text-xl font-bold py-4 text-gray-200">
                                                                                Are you sure?</h2>
                                                                            <p
                                                                                class="font-bold text-sm text-gray-500 px-2">
                                                                                Do you really want to continue ? This
                                                                                process cannot be undone
                                                                            </p>
                                                                        </div>
                                                                        <div
                                                                            class="p-2 mt-2 flex justify-center text-center space-x-1 md:block">
                                                                            <button
                                                                                data-modal-hide="popup-modal-{{ $benefit->id }}"
                                                                                class="mb-2 md:mb-0 bg-gray-700 px-5 py-2 text-sm shadow-sm font-medium tracking-wider border-2 border-gray-600 hover:border-gray-700 text-gray-300 rounded-full hover:shadow-lg hover:bg-gray-800 transition ease-in duration-300">
                                                                                Cancel
                                                                            </button>
                                                                            <form method="post"
                                                                                action="{{ route('delete.benefit', ['id' => $benefit->id]) }}">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <form method="post"
                                                                                    action="{{ route('delete.benefit', ['id' => $benefit->id]) }}">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit"
                                                                                        class="bg-red-500 hover:bg-transparent px-5 ml-4 py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-red-500 hover:border-red-500 text-white hover:text-red-500 rounded-full transition ease-in duration-300">
                                                                                        Confirm
                                                                                    </button>
                                                                                </form>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    </form>
                                                    <button data-modal-target="crud-modal-{{ $benefit->id }}"
                                                        data-modal-toggle="crud-modal-{{ $benefit->id }}"
                                                        class="bg-transparent cursor-pointer flex flex-row font-medium text-blue-500 px-2 py-1 mt-2 rounded-md transition duration-150"
                                                        type="submit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            width="20" height="20" viewBox="0,0,256,256">
                                                            <g fill="#133fb9" fill-rule="nonzero" stroke="none"
                                                                stroke-width="1" stroke-linecap="butt"
                                                                stroke-linejoin="miter" stroke-miterlimit="10"
                                                                stroke-dasharray="" stroke-dashoffset="0"
                                                                font-family="none" font-weight="none"
                                                                font-size="none" text-anchor="none"
                                                                style="mix-blend-mode: normal">
                                                                <g transform="scale(10.66667,10.66667)">
                                                                    <path
                                                                        d="M19.17188,2c-0.72375,0 -1.4475,0.27562 -2,0.82813l-1.17187,1.17188l4,4l1.17188,-1.17187c1.104,-1.104 1.104,-2.895 0,-4c-0.5525,-0.5525 -1.27625,-0.82812 -2,-0.82812zM14.5,5.5l-11.5,11.5v4h4l11.5,-11.5z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        Edit
                                                    </button>

                                                    <!-- Main modal -->
                                                    <div id="crud-modal-{{ $benefit->id }}" tabindex="-1"
                                                        aria-hidden="true"
                                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                                            <!-- Modal content -->
                                                            <div
                                                                class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                <!-- Modal header -->
                                                                <div
                                                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                    <h3
                                                                        class="text-lg font-semibold text-gray-900 dark:text-white">
                                                                        Create New Benefit
                                                                    </h3>
                                                                    <button type="button"
                                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                        data-modal-toggle="crud-modal-{{ $benefit->id }}">
                                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" viewBox="0 0 14 14">
                                                                            <path stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                        </svg>
                                                                        <span class="sr-only">Close modal</span>
                                                                    </button>
                                                                </div>
                                                                <!-- Modal body -->
                                                                <form class="p-4 md:p-5" method="post"
                                                                    action="{{ route('update.benefit', ['id' => $benefit->id]) }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                                                        <div class="col-span-2">
                                                                            <label for="name"
                                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                                                            <input type="text" name="name"
                                                                                id="name"
                                                                                value="{{ $benefit->name }}"
                                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                                placeholder="Type product name"
                                                                                required="">
                                                                        </div>

                                                                    </div>
                                                                    <button type="submit"
                                                                        class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                                                        <svg width="20px" height="20px"
                                                                            viewBox="0 0 24 24" id="edit_pen_icon"
                                                                            data-name="edit pen icon"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            fill="#fffffff">
                                                                            <g id="SVGRepo_bgCarrier"
                                                                                stroke-width="0"></g>
                                                                            <g id="SVGRepo_tracerCarrier"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></g>
                                                                            <g id="SVGRepo_iconCarrier">
                                                                                <defs>
                                                                                    <clipPath id="clip-path">
                                                                                        <rect id="Mask"
                                                                                            width="24"
                                                                                            height="24"
                                                                                            fill="none"></rect>
                                                                                    </clipPath>
                                                                                </defs>
                                                                                <rect id="Mask-2" data-name="Mask"
                                                                                    width="24" height="24"
                                                                                    fill="none"></rect>
                                                                                <g id="_24x24_edit"
                                                                                    data-name="24x24/edit"
                                                                                    clip-path="url(#clip-path)">
                                                                                    <path id="Rectangle_4"
                                                                                        data-name="Rectangle 4"
                                                                                        d="M0,2A2,2,0,0,1,2,0H4A2,2,0,0,1,6,2V18L3,23,0,18Z"
                                                                                        transform="translate(18.01 2.247) rotate(45)"
                                                                                        fill="none"
                                                                                        stroke="#ffffff"
                                                                                        stroke-miterlimit="10"
                                                                                        stroke-width="1.5"></path>
                                                                                    <path id="Line" d="M0,1H5"
                                                                                        transform="translate(15.536 5.429) rotate(45)"
                                                                                        fill="none"
                                                                                        stroke="#ffffff"
                                                                                        stroke-linecap="square"
                                                                                        stroke-miterlimit="10"
                                                                                        stroke-width="1.5"></path>
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                        Update Benefit
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
