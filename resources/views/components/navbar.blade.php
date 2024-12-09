<nav id="navbar"
    class="border-gray-200 bg-white rounded-2xl my-12 mx-28 shadow-hover-timbul transition-all duration-300 ease-in-out">
    <div class="max-w-screen-2xl flex flex-wrap items-center justify-between p-2 mx-12">
        <!-- Logo dan Links -->
        <div class="flex items-center space-x-8">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-3">
                <img src="{{ asset('images/logo-app.png') }}" class="h-10" alt="VetLink Logo" />
            </a>
            <!-- Links -->
            <ul class="hidden lg:flex font-medium space-x-8 mt-4">
                <li>
                    <a href="#About" class="text-primary text-lg font-medium hover:font-bold">About</a>
                </li>
                <li>
                    <a href="#Fitur" class="text-primary text-lg font-medium hover:font-bold">Feature</a>
                </li>
                <li>
                    <a href="/price" class="text-primary text-lg font-medium hover:font-bold">Price</a>
                </li>
            </ul>
        </div>

        <!-- Sign Up dan Login -->
        <div class="hidden lg:flex items-center space-x-4">
            <button onclick="window.location.href='/register'" class="text-primary font-medium hover:font-bold">Sign
                Up</button>
            <button onclick="window.location.href='/login'"
                class="text-primary font-medium border-2 border-primary hover:font-bold rounded-2xl px-6 py-2">
                Login
            </button>
        </div>

        <!-- Mobile Toggle -->
        <button id="navbar-toggle" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        <!-- Mobile Menu -->
        <div class="hidden w-full lg:hidden" id="navbar-menu">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="#About" class="block py-2 px-3 text-primary hover:font-bold rounded">About</a>
                </li>
                <li>
                    <a href="#Fitur" class="block py-2 px-3 text-primary hover:font-bold rounded">Feature</a>
                </li>
                <li>
                    <a href="/price" class="block py-2 px-3 text-primary hover:font-bold rounded">Price</a>
                </li>
                <li>
                    <a href="/register" class="block py-2 px-3 text-primary hover:font-bold rounded">Sign In</a>
                </li>
                <li>
                    <a href="/login" class="block py-2 px-3 text-primary hover:font-bold rounded">Login</a>
                </li>
            </ul>
        </div>
    </div>

    <script>
        // Handle fixed navbar on scroll
        const navbar = document.getElementById("navbar");
        const navbarToggle = document.getElementById("navbar-toggle");
        const navbarMenu = document.getElementById("navbar-menu");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 0) {
                navbar.classList.add("fixed", "top-0", "left-0", "w-full", "z-50");
                navbar.classList.remove("my-12", "mx-28", "rounded-2xl");
            } else {
                navbar.classList.remove("fixed", "top-0", "left-0", "w-full", "z-50");
                navbar.classList.add("my-12", "mx-28", "rounded-2xl");
            }
        });

        // Handle toggle button for mobile navbar
        navbarToggle.addEventListener("click", () => {
            const isExpanded = navbarToggle.getAttribute("aria-expanded") === "true";
            navbarToggle.setAttribute("aria-expanded", !isExpanded);
            navbarMenu.classList.toggle("hidden");
        });
    </script>
</nav>
