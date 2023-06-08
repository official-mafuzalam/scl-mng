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
                    <button type="button"
                        class="py-3 px-4 mb-2 inline-flex justify-center items-center gap-2 rounded-md border-2 border-purple-200 font-semibold text-purple-500 hover:text-white hover:bg-purple-500 hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Button
                    </button>
                    <button type="button"
                        class="py-3 px-4 mb-2 inline-flex justify-center items-center gap-2 rounded-md border-2 border-purple-200 font-semibold text-purple-500 hover:text-white hover:bg-purple-500 hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Button
                    </button>
                    <button type="button"
                        class="py-3 px-4 mb-2 inline-flex justify-center items-center gap-2 rounded-md border-2 border-purple-200 font-semibold text-purple-500 hover:text-white hover:bg-purple-500 hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Button
                    </button>
                    <button type="button"
                        class="py-3 px-4 mb-2 inline-flex justify-center items-center gap-2 rounded-md border-2 border-purple-200 font-semibold text-purple-500 hover:text-white hover:bg-purple-500 hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Button
                    </button>
                    <button type="button"
                        class="py-3 px-4 mb-2 inline-flex justify-center items-center gap-2 rounded-md border-2 border-purple-200 font-semibold text-purple-500 hover:text-white hover:bg-purple-500 hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Button
                    </button>
                    <button type="button"
                        class="py-3 px-4 mb-2 inline-flex justify-center items-center gap-2 rounded-md border-2 border-purple-200 font-semibold text-purple-500 hover:text-white hover:bg-purple-500 hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Button
                    </button>
                    <button type="button"
                        class="py-3 px-4 mb-2 inline-flex justify-center items-center gap-2 rounded-md border-2 border-purple-200 font-semibold text-purple-500 hover:text-white hover:bg-purple-500 hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Button
                    </button>
                    <button type="button"
                        class="py-3 px-4 mb-2 inline-flex justify-center items-center gap-2 rounded-md border-2 border-purple-200 font-semibold text-purple-500 hover:text-white hover:bg-purple-500 hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Button
                    </button>
                    <button type="button"
                        class="py-3 px-4 mb-2 inline-flex justify-center items-center gap-2 rounded-md border-2 border-purple-200 font-semibold text-purple-500 hover:text-white hover:bg-purple-500 hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Button
                    </button>
                    <button type="button"
                        class="py-3 px-4 mb-2 inline-flex justify-center items-center gap-2 rounded-md border-2 border-purple-200 font-semibold text-purple-500 hover:text-white hover:bg-purple-500 hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Button
                    </button>
                    <button type="button"
                        class="py-3 px-4 mb-2 inline-flex justify-center items-center gap-2 rounded-md border-2 border-purple-200 font-semibold text-purple-500 hover:text-white hover:bg-purple-500 hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Button
                    </button>
                    <button type="button"
                        class="py-3 px-4 mb-2 inline-flex justify-center items-center gap-2 rounded-md border-2 border-purple-200 font-semibold text-purple-500 hover:text-white hover:bg-purple-500 hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Button
                    </button>
                    <button type="button"
                        class="py-3 px-4 mb-2 inline-flex justify-center items-center gap-2 rounded-md border-2 border-purple-200 font-semibold text-purple-500 hover:text-white hover:bg-purple-500 hover:border-purple-500 focus:outline-none focus:ring-2 focus:ring-purple-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        Button
                    </button>
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
