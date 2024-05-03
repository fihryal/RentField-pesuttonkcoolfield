<!-- Start navbar -->
<nav class="bg-white w-full z-20 top-0 start-0 border-b border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="logo.png" class="h-8" alt="Flowbite Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap ">PTCF</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

            @if (Auth::check())
            <a type="button" href="/sesi/logout"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center ">
                Log out
            </a>
            @else
            <a type="button" href="/sesi"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center ">Log
                in
            </a>
            @endif

            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                aria-controls="navbar-sticky" aria-expanded="false" id="navbar-toggle">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="navbar-custom items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
            id="navbar-sticky">
            <ul
                class="navbar-custom-nav flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white ">
                <li>
                    <a href="{{url('/')}}"
                        class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:">Home</a>
                </li>

                <li>
                    <a href="{{url('about')}}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:">About</a>
                </li>

                <li>
                    <a href="{{url('services')}}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:">Services</a>
                </li>

                <li>
                    <a href="{{url('article')}}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:">Article</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar end -->

<script>
// JavaScript to toggle navbar dropdown
document.addEventListener('DOMContentLoaded', function() {
    var navbarToggle = document.getElementById('navbar-toggle');
    var navbarMenu = document.getElementById('navbar-sticky');

    navbarToggle.addEventListener('click', function() {
        navbarMenu.classList.toggle('hidden');
    });
});
</script>