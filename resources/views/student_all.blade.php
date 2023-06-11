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
        All Student
    </li>
@endsection
<!-- End Breadcrumb -->

@section('main-content')
    <div class="bg-slate-300 rounded-xl shadow p-4 mb-10 sm:p-7 dark:bg-slate-800">

        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                        <!-- Header -->
                        <div
                            class="px-4 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                    Users
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    Add users, edit and more.
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                                        href="#">
                                        View all
                                    </a>

                                    <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                        href="#">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        Add user
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-slate-800">
                                <tr>

                                    <th scope="col" class="pl-6 py-3 text-left">
                                        <label class="flex">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                No
                                            </span>
                                        </label>
                                    </th>
                                    <th scope="col" class="pl-6 py-3 text-left">
                                        <label class="flex">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                User ID
                                            </span>
                                        </label>
                                    </th>

                                    <th scope="col" class="pl-6 lg:pl-6 xl:pl-4 pr-6 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Name
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-4 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                A. Details
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-4 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Guardian
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-4 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Address
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-4 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                NID
                                            </span>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-4 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                Action
                                            </span>
                                        </div>
                                    </th>

                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($students as $student)
                                    <tr>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="pl-6 py-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ $student->id }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="pl-6 py-3">
                                                <span class="block text-sm text-gray-500">
                                                    {{ $student->user_id }}
                                                </span>
                                                <span class="block text-sm text-gray-500">
                                                    {{ $student->student_gender }}
                                                </span>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="pl-6 lg:pl-3 xl:pl-4 pr-6 py-3">
                                                <div class="flex items-center gap-x-3">
                                                    <div class="grow">
                                                        <span
                                                            class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                            {{ $student->student_name }}
                                                        </span>
                                                        <span class="block text-sm text-gray-500">
                                                            {{ $student->student_email }}</span>
                                                        <span class="block text-sm text-gray-500">
                                                            {{ $student->student_mobile }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-4 py-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ $student->student_class }}
                                                </span>
                                                <span class="block text-sm text-gray-500">Roll:
                                                    {{ $student->student_roll }}</span>
                                                <span class="block text-sm text-gray-500">Reg:
                                                    {{ $student->student_reg }}</span>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-4 py-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ $student->father_name }}
                                                </span>
                                                <span class="block text-sm text-gray-500">
                                                    {{ $student->father_mobile }}</span>
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    {{ $student->mother_name }}
                                                </span>
                                                <span class="block text-sm text-gray-500">
                                                    {{ $student->mother_mobile }}</span>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-4 py-3">
                                                <span class="block text-sm text-gray-500">
                                                    {{ $student->address_street }}
                                                </span>
                                                <span class="block text-sm text-gray-500">
                                                    {{ $student->address_postOffice }}
                                                </span>
                                                <span class="block text-sm text-gray-500">
                                                    {{ $student->address_upazila }}
                                                </span>
                                                <span class="block text-sm text-gray-500">
                                                    {{ $student->address_zila }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-4 py-3">
                                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                                    S: {{ $student->student_nid }}
                                                </span>
                                                <span class="block text-sm text-gray-500">
                                                    F: {{ $student->father_nid }}
                                                </span>
                                                <span class="block text-sm text-gray-500">
                                                    M: {{ $student->mother_nid }}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-4 py-1.5">
                                                <a class="block items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium"
                                                    href="#">
                                                    Edit
                                                </a>
                                                <a class="block items-center gap-x-1.5 text-sm text-red-600 decoration-2 hover:underline font-medium"
                                                    href="#">
                                                    Trash
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div
                            class="px-4 py-4 border-t border-gray-200 dark:border-gray-700">
                            
                            <div>
                                <div class="inline-flex gap-x-2">
                                    {{ $students->links() }}
                                </div>
                            </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
@endsection
