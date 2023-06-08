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
                    <ul>
                        <li><a class="group flex items-center lg:text-sm lg:leading-6 mb-4 font-semibold text-sky-500 dark:text-sky-400"
                                href="/docs/installation">
                                <div
                                    class="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-sky-200 dark:group-hover:bg-sky-500 dark:bg-sky-500 dark:highlight-white/10">
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.5 7c1.093 0 2.117.27 3 .743V17a6.345 6.345 0 0 0-3-.743c-1.093 0-2.617.27-3.5.743V7.743C5.883 7.27 7.407 7 8.5 7Z"
                                            class="fill-sky-200 group-hover:fill-sky-500 dark:fill-sky-300 dark:group-hover:fill-sky-300">
                                        </path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.5 7c1.093 0 2.617.27 3.5.743V17c-.883-.473-2.407-.743-3.5-.743s-2.117.27-3 .743V7.743a6.344 6.344 0 0 1 3-.743Z"
                                            class="fill-sky-400 group-hover:fill-sky-500 dark:fill-sky-200 dark:group-hover:fill-sky-200">
                                        </path>
                                    </svg>
                                </div>Documentation
                            </a></li>
                        <li><a class="group flex items-center lg:text-sm lg:leading-6 mb-4 font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"
                                href="https://tailwindui.com/components?ref=sidebar">
                                <div
                                    class="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-indigo-200 dark:group-hover:bg-indigo-500 dark:bg-slate-700 dark:highlight-white/5">
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none">
                                        <path d="m6 9 6-3 6 3v6l-6 3-6-3V9Z"
                                            class="fill-indigo-100 group-hover:fill-indigo-200 dark:fill-slate-300">
                                        </path>
                                        <path d="m6 9 6 3v7l-6-3V9Z"
                                            class="fill-indigo-300 group-hover:fill-indigo-400 dark:group-hover:fill-indigo-300 dark:fill-slate-400">
                                        </path>
                                        <path d="m18 9-6 3v7l6-3V9Z"
                                            class="fill-indigo-400 group-hover:fill-indigo-500 dark:group-hover:fill-indigo-400 dark:fill-slate-500">
                                        </path>
                                    </svg>
                                </div>Components
                            </a></li>
                        <li><a class="group flex items-center lg:text-sm lg:leading-6 mb-4 font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"
                                href="https://tailwindui.com/templates?ref=sidebar">
                                <div
                                    class="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-fuchsia-200 dark:group-hover:bg-fuchsia-600 dark:bg-slate-700 dark:highlight-white/5">
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8 6C6.89543 6 6 6.89543 6 8V16C6 17.1046 6.89543 18 8 18H10.5C11.0523 18 11.5 17.5523 11.5 17V12C11.5 10.6193 12.6193 9.5 14 9.5H18V8C18 6.89543 17.1046 6 16 6H8ZM7.25 8C7.25 7.58579 7.58579 7.25 8 7.25H8.01C8.42421 7.25 8.76 7.58579 8.76 8C8.76 8.41421 8.42421 8.75 8.01 8.75H8C7.58579 8.75 7.25 8.41421 7.25 8ZM10 7.25C9.58579 7.25 9.25 7.58579 9.25 8C9.25 8.41421 9.58579 8.75 10 8.75H10.01C10.4242 8.75 10.76 8.41421 10.76 8C10.76 7.58579 10.4242 7.25 10.01 7.25H10Z"
                                            fill="#E879F9"
                                            class="fill-fuchsia-400 group-hover:fill-fuchsia-500 dark:group-hover:fill-fuchsia-300 dark:fill-slate-300">
                                        </path>
                                        <path
                                            d="M13 12C13 11.4477 13.4477 11 14 11H17C17.5523 11 18 11.4477 18 12V17C18 17.5523 17.5523 18 17 18H14C13.4477 18 13 17.5523 13 17V12Z"
                                            fill="#F0ABFC"
                                            class="fill-fuchsia-300 group-hover:fill-fuchsia-400 dark:fill-slate-400">
                                        </path>
                                    </svg>
                                </div>Templates
                            </a></li>
                        <li><a class="group flex items-center lg:text-sm lg:leading-6 mb-4 font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"
                                href="https://www.youtube.com/tailwindlabs">
                                <div
                                    class="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-pink-200 dark:group-hover:bg-pink-500 dark:bg-slate-700 dark:highlight-white/5">
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M19 12a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"
                                            class="fill-pink-400 group-hover:fill-pink-500 dark:group-hover:fill-pink-300 dark:fill-slate-500">
                                        </path>
                                        <path
                                            d="M11.082 9.107a.685.685 0 0 0-.72-.01.757.757 0 0 0-.362.653v4.5c0 .27.138.52.362.653.224.133.5.13.72-.01l3.571-2.25A.758.758 0 0 0 15 12a.758.758 0 0 0-.347-.643l-3.571-2.25Z"
                                            class="fill-pink-50 group-hover:fill-pink-100 dark:group-hover:fill-white dark:fill-slate-300">
                                        </path>
                                    </svg>
                                </div>Screencasts
                            </a></li>
                        <li>
                            <a class="group flex items-center lg:text-sm lg:leading-6 mb-4 font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"
                                href="https://play.tailwindcss.com">
                                <div
                                    class="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-blue-200 dark:group-hover:bg-blue-500 dark:bg-slate-700 dark:highlight-white/5">
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none">
                                        <path d="M4 12a7 7 0 0 1 7-7h2a7 7 0 1 1 0 14h-2a7 7 0 0 1-7-7Z"
                                            class="fill-blue-400 group-hover:fill-blue-500 dark:group-hover:fill-blue-400 dark:fill-slate-500">
                                        </path>
                                        <path d="M10.25 9.75 7.75 12l2.5 2.25" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="stroke-blue-50 dark:stroke-slate-400 dark:group-hover:stroke-white dark:stroke-slate-300">
                                        </path>
                                        <path d="m13.75 9.75 2.5 2.25-2.5 2.25" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="stroke-blue-200 dark:group-hover:stroke-white dark:stroke-slate-300">
                                        </path>
                                    </svg>
                                </div>Playground
                            </a>
                        </li>
                        <li>
                            <a class="group flex items-center lg:text-sm lg:leading-6 mb-4 font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"
                                href="/resources">
                                <div
                                    class="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-purple-200 dark:group-hover:bg-purple-400 dark:bg-slate-700 dark:highlight-white/5">
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z"
                                            class="fill-purple-400 group-hover:fill-purple-500 dark:group-hover:fill-purple-300 dark:fill-slate-500">
                                        </path>
                                        <path
                                            d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z"
                                            class="fill-purple-200 group-hover:fill-purple-300 dark:group-hover:fill-white dark:fill-slate-300">
                                        </path>
                                        <path
                                            d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z"
                                            class="fill-purple-400 group-hover:fill-purple-500 dark:group-hover:fill-purple-300 dark:fill-slate-500">
                                        </path>
                                    </svg>
                                </div><span class="">Resources</span>
                            </a>
                        </li>
                        <li>
                            <a class="group flex items-center lg:text-sm lg:leading-6 mb-4 font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"
                                href="https://github.com/tailwindlabs/tailwindcss/discussions">
                                <div
                                    class="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-violet-200 dark:group-hover:bg-violet-500 dark:bg-slate-700 dark:highlight-white/5">
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11 5a6 6 0 0 0-4.687 9.746c.215.27.315.62.231.954l-.514 2.058a1 1 0 0 0 1.485 1.1l2.848-1.71c.174-.104.374-.15.576-.148H13a6 6 0 0 0 0-12h-2Z"
                                            class="fill-violet-400 group-hover:fill-violet-500 dark:group-hover:fill-violet-300 dark:fill-slate-500">
                                        </path>
                                        <circle cx="12" cy="11" r="1"
                                            class="fill-white dark:group-hover:fill-white dark:fill-slate-300">
                                        </circle>
                                        <circle cx="9" cy="11" r="1"
                                            class="fill-violet-200 dark:group-hover:fill-white dark:fill-slate-300">
                                        </circle>
                                        <circle cx="15" cy="11" r="1"
                                            class="fill-violet-200 dark:fill-slate-400 dark:group-hover:fill-white">
                                        </circle>
                                    </svg>

                                </div><span class="">Community</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="w-full md:w-4/5 bg-gray-300 scrollable-right p-4">
            <!-- Right side content -->
            <div class="w-full h-fit bg-white rounded-lg p-4 mb-4">
                <!-- Right side scrollable content -->
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae porro fuga in? Ducimus doloribus
                accusamus non odit nihil quia ab!
            </div>

            <div class="w-full h-fit bg-white rounded-lg p-4 mb-4">
                <!-- Right side scrollable content -->
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae porro fuga in? Ducimus doloribus
                accusamus non odit nihil quia ab!
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
        // document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
        //     document.getElementById('mobile-menu').classList.toggle('hidden');
        // });
    </script>



</body>

</html>
