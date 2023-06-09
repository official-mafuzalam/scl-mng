@extends('layouts.body')

@section('main-content')
    <!-- Card Section -->
    {{-- <div class="max-w-4xl px-4 py-10 sm:px-4 lg:px-8 lg:py-10 mx-auto  dark:bg-gray-700"> --}}
    <!-- Card -->
    <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-800">
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 text-center">
                Profile
            </h2>
            <label class="inline-block text-sm font-medium dark:text-gray-400">
                Personal Information
            </label>

        </div>

        <form>
            <!-- Grid -->
            <div class="grid grid-cols-12 gap-4 sm:gap-6">

                <div class="col-span-3">
                    <label for="student-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Full name
                    </label>
                    <div class="hs-tooltip inline-block">
                        <button type="button" class="hs-tooltip-toggle ml-1">
                            <svg class="inline-block w-3 h-3 text-gray-400 dark:text-gray-600"
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg>
                        </button>
                        <span
                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible w-40 text-center z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded-md shadow-lg dark:bg-slate-700"
                            role="tooltip">
                            Displayed on public forums, such as Preline
                        </span>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input id="student-full-name" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg -mt-px -ml-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-l-lg sm:mt-0 sm:first:ml-0 sm:first:rounded-tr-none sm:last:rounded-bl-none sm:last:rounded-r-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Maria">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label for="student-nid" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        NID/ Birth Certificate no
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input id="student-nid" type="number"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxxx-xxxx-xxxx-xxxx">
                    </div>
                </div>
                <!-- End Col -->


                <div class="col-span-3">
                    <label for="student-email" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Email
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <input id="student-email" type="email"
                        class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                        placeholder="maria@site.com">
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="student-mobile" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Phone
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input id="student-mobile" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="+880xxxx-xxxxxx" value="+880">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label for="father-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Father's name
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input id="father-full-name" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Mr. Jak">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label for="father-nid" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        NID no
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input id="father-nid" type="number"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxxx-xxxx-xxxx-xxxx">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="father-mobile" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Phone
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input id="father-mobile" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="+880xxxx-xxxxxx" value="+880">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label for="mother-full-name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Mother's name
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input id="mother-full-name" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Ms. Rose">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label for="mother-nid" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        NID no
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input id="mother-nid" type="number"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxxx-xxxx-xxxx-xxxx">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="mother-mobile" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Phone
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input id="mother-mobile" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="+880xxxx-xxxxxx" value="+880">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label for="student-gender" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Gender
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <select id="student-gender"
                        class="py-2 px-3 pr-9 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                        <option selected>Please select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                        Address
                    </label>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="mt-2 space-y-3">
                        <input id="af-payment-billing-address" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Street Address">
                        <input type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Post office address">
                        <div class="sm:flex gap-3">
                            <input type="text"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Upazila">
                            <input type="text"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Zila">
                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <label class="mt-16 mb-8 inline-block text-sm font-medium dark:text-gray-400">
                Academic Information
            </label>
            <div class="grid grid-cols-12 gap-4 sm:gap-6">

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="student-class" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Phone
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input id="student-class" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="+880xxxx-xxxxxx" value="+880">
                    </div>
                </div>
                <!-- End Col -->

            </div>
            <!-- End Grid -->

            <div class="mt-5 flex justify-end gap-x-2">
                <button type="button"
                    class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-lg align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                    Cancel
                </button>
                <button type="button"
                    class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                    Save changes
                </button>
            </div>
        </form>
    </div>
    <!-- End Card -->
@endsection
