<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <style>
        .scrollable-left {
            overflow-x: scroll;
        }

        .scrollable-right {
            overflow-x: scroll;
        }

        @media (max-width: 767px) {
            .offcanvas {
                position: fixed;
                top: 0;
                left: -100%;
                width: 80%;
                max-width: 320px;
                height: 100vh;
                transition: left 0.3s ease-in-out;
                z-index: 9999;
            }

            .offcanvas.open {
                left: 0;
            }

            .scrollable-right {
                width: 100%;
            }
        }
    </style>

</head>

<body>


    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-end h-10">
                <!-- Logo -->
                <!-- Mobile Menu Toggle -->
                <div class="flex items-center sm:hidden">
                    <button id="mobile-menu-toggle"
                        class="h-10 w-10 text-gray-300 hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>

                <!-- Menu Items -->
                <div class="hidden sm:block">
                    <ul class="flex space-x-4">
                        <li><a href="#"
                                class="text-gray-300 hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        </li>
                        <li><a href="#"
                                class="text-gray-300 hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">About</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="sm:hidden" id="mobile-menu">

            <ul class="bg-gray-800 px-2 py-3 space-y-1">
                <li><a href="#"
                        class="text-gray-300 hover:bg-gray-700 block px-3 py-2 rounded-md text-base font-medium">Home</a>
                </li>
                <li><a href="#"
                        class="text-gray-300 hover:bg-gray-700 block px-3 py-2 rounded-md text-base font-medium">About</a>
                </li>
                <li><a href="#"
                        class="text-gray-300 hover:bg-gray-700 block px-3 py-2 rounded-md text-base font-medium">Services</a>
                </li>
                <li><a href="#"
                        class="text-gray-300 hover:bg-gray-700 block px-3 py-2 rounded-md text-base font-medium">Contact</a>
                </li>
            </ul>

        </div>
    </nav>








    <div class="flex h-screen">
        <!-- Offcanvas -->
        <div id="offcanvas" class="offcanvas bg-gray-200 scrollable-left w-1/5 md:w-1/5">
            <!-- Offcanvas toggle button -->
            <button class="fixed top-4 left-4 md:hidden" onclick="toggleOffcanvas()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
            <!-- Left side content -->
            <div class="w-full h-full p-4">
                <!-- Left side scrollable content -->
                <div class="flex flex-col">
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                    <button>Dashboard</button>
                </div>
            </div>
        </div>

        <div class="w-full md:w-4/5 bg-gray-300 scrollable-right p-4">
            <!-- Right side content -->
            <div class="w-full h-fit bg-white rounded-lg p-4">
                <!-- Right side scrollable content -->

                <div class="hs-dropdown relative inline-flex">
                    <button id="hs-dropdown-basic" type="button"
                        class="hs-dropdown-toggle py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                        Actions
                        <svg class="hs-dropdown-open:rotate-180 w-2.5 h-2.5 text-gray-600" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 w-56 hidden z-10 mt-2 min-w-[15rem] bg-white shadow-md rounded-lg p-2 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700"
                        aria-labelledby="hs-dropdown-basic">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="#">
                            Newsletter
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="#">
                            Purchases
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="#">
                            Downloads
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                            href="#">
                            Team Account
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>







    <script>
        function toggleOffcanvas() {
            const offcanvas = document.getElementById('offcanvas');
            offcanvas.classList.toggle('open');
        }
    </script>


    <script>
        document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>



</body>

</html>
