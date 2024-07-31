@props(['coaches', 'categories', 'classe', 'benefits', 'modalId', 'message'])
<style>
    [x-cloak] {
        display: none;
    }

    .svg-icon {
        width: 1em;
        height: 1em;
    }

    .svg-icon path,
    .svg-icon polygon,
    .svg-icon rect {
        fill: #333;
    }

    .svg-icon circle {
        stroke: #4691f6;
        stroke-width: 1;
    }
</style>


<!-- Main modal -->
<div id="authentication-modal-{{ $classe->id }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0  justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    style="z-index: 100">
    <!-- component -->

    <div class="relative py-3 mt-52 w-full flex justify-center items-center sm:mx-auto">
        <div class="relative px-4 py-10 bg-gray-200 dark:bg-slate-900 mx-8 md:mx-0 shadow rounded-xl sm:p-10"
            style="width: 550px">
            <div class="max-w-1/2 mx-auto">
                <button type="button"
                    class="text-gray-400 absolute right-0 top-0 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="authentication-modal-{{ $classe->id }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="text-center">
                    <h2 class="font-semibold text-2xl text-gray-700">Update a Class</h2>
                    <div class="w-full h- bg-gray-300 absolute top-5 left-0 transform -translate-y-1/2"></div>
                </div>
                <form action="{{ route('update.classe', ['id' => $classe->id]) }}" method="post"
                    enctype="multipart/form-data" class="divide-y divide-gray-200">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-wrap items-center justify-between space-x-4">
                        <div class="flex flex-col">
                            <label class="leading-loose">Title</label>
                            <input type="text" name="name" value="{{ $classe->name }}"
                                class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-60 sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                placeholder="Enter the class's title">
                            @error('name')
                                <div class="alert fade mb-4 alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
                                    role="alert">
                                    <button type="button" class="close font__size-18" data-dismiss="alert">
                                        <span aria-hidden="true"><i class="fa fa-times danger"></i></span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <i class="start-icon far fa-times-circle faa-pulse animated"></i>
                                    <strong class="text-red-500">{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                    </div>
                    <div class="flex flex-wrap items-center justify-between space-x-4">
                        <div class="flex flex-col">
                            <label class="leading-loose">Coach</label>
                            <select name="coach"
                                class="px-5 h-10 text-base transition bg-white border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 placeholder:text-dark-6 focus:border-primary dark:focus:border-primary focus-visible:shadow-none w-60">
                                <option value="" disabled>Select Coach</option>
                                @foreach ($coaches as $coach)
                                    <option value="{{ $coach->id }}">{{ $coach->name }}</option>
                                @endforeach
                            </select>
                            @error('coach')
                                <div class="alert fade mb-4 alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
                                    role="alert">
                                    <button type="button" class="close font__size-18" data-dismiss="alert">
                                        <span aria-hidden="true"><i class="fa fa-times danger"></i></span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <i class="start-icon far fa-times-circle faa-pulse animated"></i>
                                    <strong class="text-red-500">{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Benefits</label>
                            <select name="benefits[]" multiple x-cloak id="select"
                                class="px-5 h-10 text-base transition bg-white border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 placeholder:text-dark-6 focus:border-primary dark:focus:border-primary focus-visible:shadow-none w-full">
                                <option value="" disabled>Select your Benefits</option>
                                @foreach ($benefits as $benefit)
                                    <option value="{{ $benefit->id }}">{{ $benefit->name }}</option>
                                @endforeach
                            </select>
                            <div x-data="dropdown()" x-init="loadOptions()"
                                class="w-full md:w-1/2 flex flex-col items-center h-fit mx-auto">
                                <input name="benefits[]" multiple type="hidden" x-bind:value="selectedValues()">
                                <div class="inline-block relative w-64">
                                    <div class="flex flex-col items-center relative">
                                        <div x-on:click="open" class="w-full">
                                            <div class="my-2 p-1 flex border border-gray-200 bg-white rounded">
                                                <div class="flex flex-auto flex-wrap">
                                                    <template x-for="(option,index) in selected"
                                                        :key="options[option].value">
                                                        <div
                                                            class="flex justify-center items-center m-1 font-medium py-1 px-1 bg-white rounded bg-gray-100 border">
                                                            <div class="text-xs font-normal leading-none max-w-full flex-initial x-model="
                                                                options[option] x-text="options[option].text">
                                                            </div>
                                                            <div class="flex flex-auto flex-row-reverse">
                                                                <div x-on:click.stop="remove(index,option)">
                                                                    <svg class="fill-current h-4 w-4 " role="button"
                                                                        viewBox="0 0 20 20">
                                                                        <path
                                                                            d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </template>
                                                    <div x-show="selected.length == 0" class="flex-1">
                                                        <input placeholder="Select a option"
                                                            class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800"
                                                            x-bind:value="selectedValues()">
                                                    </div>
                                                </div>
                                                <div
                                                    class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200 svelte-1l8159u">
                                                    <button type="button" x-show="isOpen() === true"
                                                        x-on:click="open"
                                                        class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                                        <svg version="1.1" class="fill-current h-4 w-4"
                                                            viewBox="0 0 20 20">
                                                            <path
                                                                d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83 c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25L17.418,6.109z" />
                                                        </svg>
                                                    </button>
                                                    <button type="button" x-show="isOpen() === false" @click="close"
                                                        class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                                        <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                                            <path
                                                                d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83 c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full px-4">
                                            <div x-show.transition.origin.top="isOpen()"
                                                class="absolute shadow top-100 bg-white z-40 w-full left-0 rounded max-h-select"
                                                x-on:click.away="close">
                                                <div class="flex flex-col w-full overflow-y-auto h-64">
                                                    <template x-for="(option,index) in options" :key="option"
                                                        class="overflow-auto">
                                                        <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-gray-100"
                                                            @click="select(index,$event)">
                                                            <div
                                                                class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                                                                <div class="w-full items-center flex justify-between">
                                                                    <div class="mx-2 leading-6" x-model="option"
                                                                        x-text="option.text"></div>
                                                                    <div x-show="option.selected">
                                                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                                                            <path fill="none"
                                                                                d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087 C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087 L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z">
                                                                            </path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @error('benefits')
                                <div class="alert fade mb-4 alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
                                    role="alert">
                                    <button type="button" class="close font__size-18" data-dismiss="alert">
                                        <span aria-hidden="true"><i class="fa fa-times danger"></i></span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <i class="start-icon far fa-times-circle faa-pulse animated"></i>
                                    <strong class="text-red-500">{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <label class="leading-loose">Class Description</label>
                        <input type="text" name="description" value="{{ $classe->description }}"
                            class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                            placeholder="{{ $classe->description }}">
                        @error('description')
                            <div class="alert fade mb-4 alert-simple alert-danger alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show"
                                role="alert">
                                <button type="button" class="close font__size-18" data-dismiss="alert">
                                    <span aria-hidden="true"><i class="fa fa-times danger"></i></span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <i class="start-icon far fa-times-circle faa-pulse animated"></i>
                                <strong class="text-red-500">{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
            </div>
            <div class="pt-4 flex items-center space-x-4">
                <button type="button"
                    class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none"
                    data-modal-toggle="authentication-modal-{{ $classe->id }}">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                    Cancel
                </button>
                <button
                    class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">
                    Create
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<script>
    function dropdown() {
        return {
            options: [],
            selected: [],
            show: false,
            open() {
                this.show = true
            },
            close() {
                this.show = false
            },
            isOpen() {
                return this.show === true
            },
            select(index, event) {

                if (!this.options[index].selected) {

                    this.options[index].selected = true;
                    this.options[index].element = event.target;
                    this.selected.push(index);

                } else {
                    this.selected.splice(this.selected.lastIndexOf(index), 1);
                    this.options[index].selected = false
                }
            },
            remove(index, option) {
                this.options[option].selected = false;
                this.selected.splice(index, 1);


            },
            loadOptions() {
                const options = document.getElementById('select').options;
                for (let i = 0; i < options.length; i++) {
                    this.options.push({
                        value: options[i].value,
                        text: options[i].innerText,
                        selected: options[i].getAttribute('selected') != null ? options[i].getAttribute(
                            'selected') : false
                    });
                }


            },
            selectedValues() {
                return this.selected.map((option) => {
                    return this.options[option].value;
                })
            }
        }
    }
</script>
