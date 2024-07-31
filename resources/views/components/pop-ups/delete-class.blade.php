@props(['classe'])

<div id="popup-modal-{{ $classe->id }}" tabindex="-1"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-transparent rounded-lg shadow dark:bg-gray-700">
            <div
                class="group select-none w-[250px] flex flex-col p-4 relative items-center justify-center bg-gray-800 border border-gray-800 shadow-lg rounded-2xl">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="popup-modal-{{ $classe->id }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="">
                    <form action="{{ route('delete.classe', ['id' => $classe->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="text-center p-3 flex-auto justify-center">
                            <svg fill="currentColor" viewBox="0 0 20 20"
                                class="animate-bounce w-12 h-12 flex items-center text-red-600 fill-red-500 mx-auto"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                    fill-rule="evenodd"></path>
                            </svg>
                            <h2 class="text-xl font-bold py-4 text-gray-200">Are you sure?</h2>
                            <p class="font-bold text-sm text-gray-500 px-2">
                                Do you really want to continue ? This process cannot be undone
                            </p>
                        </div>
                        <div class="p-2 mt-2 text-center space-x-1 md:block">
                            <button data-modal-hide="popup-modal-{{ $classe->id }}" type="button"
                                class="mb-2 md:mb-0 bg-gray-700 px-5 py-2 text-sm shadow-sm font-medium tracking-wider border-2 border-gray-600 hover:border-gray-700 text-gray-300 rounded-full hover:shadow-lg hover:bg-gray-800 transition ease-in duration-300">
                                Cancel
                            </button>
                            <button type="submit"
                                class="bg-red-600 hover:bg-transparent px-5 ml-4 py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-red-500 hover:border-red-500 text-white hover:text-red-500 rounded-full transition ease-in duration-300">
                                Confirm
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
