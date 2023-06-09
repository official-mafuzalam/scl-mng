@extends('layouts.body')

@section('main-content')
    <!-- Page Heading -->
    <header>

        <h1 class="block text-2xl font-bold text-gray-800 sm:text-6xl dark:text-white text-center">Best High School
        </h1>
        <p class="mt-2 text-lg sm:text-3xl text-gray-800 dark:text-gray-400 text-center">Hemayetpur, Savar, Dhaka</p>

    </header>
    <!-- End Page Heading -->

    <div class="w-full h-fit p-4 mt-4 bg-slate-300 dark:bg-gray-800 rounded-lg text-lg text-slate-900 dark:text-gray-400">

        <div class="grid grid-cols-4 gap-4">

            <div class="rounded-md bg-slate-500 dark:bg-slate-900 p-2">
                <p class="sm:font-bold sm:text-lg text-sm text-teal-500 dark:text-gray-200 text-center">Total Student</p>
                <p class="sm:font-bold text-slate-950 dark:text-gray-400 text-center">200</p>
            </div>
            <div class="rounded-md bg-slate-500 dark:bg-slate-900 p-2">
                <p class="sm:font-bold sm:text-lg text-sm text-teal-500 dark:text-gray-200 text-center">Total Teacher</p>
                <p class="sm:font-bold text-slate-950 dark:text-gray-400 text-center">200</p>
            </div>
            <div class="rounded-md bg-slate-500 dark:bg-slate-900 p-2">
                <p class="sm:font-bold sm:text-lg text-sm text-teal-500 dark:text-gray-200 text-center">Today's Total
                    Attendance</p>
                <p class="sm:font-bold text-slate-950 dark:text-gray-400 text-center">150</p>
            </div>
            <div class="rounded-md bg-slate-500 dark:bg-slate-900 p-2">
                <p class="sm:font-bold sm:text-lg text-sm text-teal-500 dark:text-gray-200 text-center">Running Notice</p>
                <p class="sm:font-bold text-slate-950 dark:text-gray-400 text-center">5</p>
            </div>
            <div class="rounded-md bg-slate-500 dark:bg-slate-900 p-2">
                <p class="sm:font-bold sm:text-lg text-sm text-teal-500 dark:text-gray-200 text-center">This Month Deposit</p>
                <p class="sm:font-bold text-slate-950 dark:text-gray-400 text-center">20000</p>
            </div>

        </div>



    </div>

    <!-- End Content -->
    <!-- ========== END MAIN CONTENT ========== -->
@endsection
