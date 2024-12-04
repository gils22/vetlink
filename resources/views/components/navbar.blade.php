<nav id="navbar"
    class="border-gray-200 bg-gray-50 rounded-3xl my-12 mx-28 shadow-hover-timbul transition-all duration-300 ease-in-out">
    <div class="max-w-screen-2xl flex flex-wrap items-center justify-between p-2 mx-auto">
        <a href="/" class="flex items-center space-x-3">
            <img src="{{ asset('images/logo-app.png') }}" class=" h-12" alt="VetLink Logo" />
        </a>
        <button data-collapse-toggle="navbar-solid-bg" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-solid-bg" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full lg:block md:w-auto" id="navbar-solid-bg">
            <ul
                class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
                <li>
                    <a href="/" class="block py-2 px-3 md:p-0 text-primary hover:font-bold rounded"
                        aria-current="page">About</a>
                </li>
                <li>
                    <a href="/" class="block py-2 px-3 md:p-0 text-primary hover:font-bold rounded">Feature</a>
                </li>
                <li>
                    <a href="/price" class="block py-2 px-3 md:p-0 text-primary hover:font-bold rounded">Pricing</a>
                </li>
                <li>
                    <a href="/contact" class="block py-2 px-3 md:p-0 text-primary hover:font-bold rounded">Contact</a>
                </li>
            </ul>
        </div>
        <div class="hidden w-full lg:block md:w-auto" id="navbar-solid-bg">
            <div class="w-full flex justify-end">
                <button class="text-primary font-medium hover:font-bold">Sign Up</button>
                <button onclick="window.location.href='/login'"
                    class="text-primary font-medium border-2 border-primary hover:font-bold rounded-2xl px-6 py-2 ml-2">
                    Login
                </button>
            </div>
        </div>
    </div>
    <script>
        const navbar = document.getElementById("navbar");
        window.addEventListener("scroll", () => {
            if (window.scrollY > 0) {
                navbar.classList.add("fixed", "top-0", "left-0", "w-full", "z-50");
                navbar.classList.remove("my-12", "mx-28", "rounded-3xl");
            } else {
                navbar.classList.remove("fixed", "top-0", "left-0", "w-full", "z-50");
                navbar.classList.add("my-12", "mx-28", "rounded-3xl");
            }
        });
    </script>
</nav>
