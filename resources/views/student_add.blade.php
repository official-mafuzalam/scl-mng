@extends('layouts.body')

<!-- Breadcrumb -->
@section('breadcrumb')
    <li class="flex items-center text-sm text-gray-800 dark:text-gray-400">
        Students
        <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400 dark:text-gray-600" width="16"
            height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" />
        </svg>
    </li>
    <li class="text-sm font-semibold text-gray-800 truncate dark:text-gray-400" aria-current="page">
        Add Student
    </li>
@endsection
<!-- End Breadcrumb -->

@section('main-content')
    <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 text-center">
                Student Add Form
            </h2>
            <label class="inline-block text-sm font-medium dark:text-gray-400">
                Personal Information
            </label>

        </div>

        <form method="POST" action="{{ route('student_addReq') }}">
            @csrf
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
                        <input name="student_name" required id="student-full-name" type="text"
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
                        <input name="student_nid" required id="student-nid" type="number"
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
                    <input name="student_email" required id="student-email" type="email"
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
                        <input name="student_mobile" required id="student-mobile" type="tel"
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
                        <input name="father_name" required id="father-full-name" type="text"
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
                        <input name="father_nid" required id="father-nid" type="number"
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
                        <input name="father_mobile" required id="father-mobile" type="tel"
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
                        <input name="mother_name" required id="mother-full-name" type="text"
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
                        <input name="mother_nid" required id="mother-nid" type="number"
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
                        <input name="mother_mobile" required id="mother-mobile" type="tel"
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
                    <select id="student-gender" name="stdent_gender"
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
                        <input name="adderss_street" required id="af-payment-billing-address" type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Street Address">
                        <input name="adderss_postOffice" required type="text"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="Post office address">
                        <div class="sm:flex gap-3">
                            <input name="adderss_upazila" required type="text"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Upazila">
                            <input name="adderss_zila" required type="text"
                                class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                placeholder="Zila">
                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <label class="mt-6 mb-6 sm:mt-16 sm:mb-8 inline-block text-sm font-medium dark:text-gray-400">
                Academic Information
            </label>
            <div class="grid grid-cols-12 gap-4 sm:gap-6">

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="student-class" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Class
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <select id="student-class" name="student_class"
                        class="py-2 px-3 pr-9 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                        <option>Please select class</option>
                        <option value="1">1 - One</option>
                        <option value="2">2 - Two</option>
                        <option value="3">3 - Three</option>
                        <option value="4">4 - Four</option>
                        <option value="5">5 - Five</option>
                        <option value="6">6 - Six</option>
                        <option value="7">7 - Seven</option>
                        <option value="8">8 - Eight</option>
                        <option value="9">9 - Nine</option>
                        <option value="10">10 - Ten</option>
                    </select>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="student-roll" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Roll no
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="student_roll" required id="student-roll" type="number"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxx">
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-3">
                    <div class="inline-block">
                        <label for="student-reg" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
                            Reg no
                        </label>
                        <span class="text-sm text-gray-400 dark:text-gray-600">
                            (Optional)
                        </span>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-span-9">
                    <div class="sm:flex">
                        <input name="student_reg" id="student-reg" type="number"
                            class="py-2 px-3 pr-11 block w-full border-gray-200 shadow-lg text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                            placeholder="xxxxxxxxxxxx">
                    </div>
                </div>
                <!-- End Col -->








            </div>
            <!-- End Grid -->










            <div class="mt-5 flex justify-center gap-x-2">
                <input name="" type="submit" value="Save"
                    class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
            </div>
        </form>
    </div>
    <!-- End Card -->
@endsection
