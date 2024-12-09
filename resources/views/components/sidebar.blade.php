<aside class="bg-primary rounded-3xl h-[94%] w-56 mx-8 my-6 shadow-hover-timbul overflow-hidden text-lg">
    <div class="flex ml-5">
        <img src="{{ asset('images/logo-app-putih.png') }}" alt="" class="h-12 my-4">
    </div>
    <div class="flex flex-col justify-between h-[85%]">
        <div class="flex flex-col gap-2">
            <a href="/dashboard"
                class="{{ request()->is('dashboard') ? 'font-semibold' : 'text-white opacity-90' }} flex p-2 ml-4 mx-auto cursor-pointer flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:opacity-100 hover:text-white hover:font-semibold">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <rect width="24" height="24" fill="none"></rect>
                        <path
                            d="M15.024 22C16.2771 22 17.3524 21.9342 18.2508 21.7345C19.1607 21.5323 19.9494 21.1798 20.5646 20.5646C21.1798 19.9494 21.5323 19.1607 21.7345 18.2508C21.9342 17.3524 22 16.2771 22 15.024V12C22 10.8954 21.1046 10 20 10H12C10.8954 10 10 10.8954 10 12V20C10 21.1046 10.8954 22 12 22H15.024Z"
                            fill="#ffffff"></path>
                        <path
                            d="M2 15.024C2 16.2771 2.06584 17.3524 2.26552 18.2508C2.46772 19.1607 2.82021 19.9494 3.43543 20.5646C4.05065 21.1798 4.83933 21.5323 5.74915 21.7345C5.83628 21.7538 5.92385 21.772 6.01178 21.789C7.09629 21.9985 8 21.0806 8 19.976L8 12C8 10.8954 7.10457 10 6 10H4C2.89543 10 2 10.8954 2 12V15.024Z"
                            fill="#ffffff"></path>
                        <path
                            d="M8.97597 2C7.72284 2 6.64759 2.06584 5.74912 2.26552C4.8393 2.46772 4.05062 2.82021 3.4354 3.43543C2.82018 4.05065 2.46769 4.83933 2.26549 5.74915C2.24889 5.82386 2.23327 5.89881 2.2186 5.97398C2.00422 7.07267 2.9389 8 4.0583 8H19.976C21.0806 8 21.9985 7.09629 21.789 6.01178C21.772 5.92385 21.7538 5.83628 21.7345 5.74915C21.5322 4.83933 21.1798 4.05065 20.5645 3.43543C19.9493 2.82021 19.1606 2.46772 18.2508 2.26552C17.3523 2.06584 16.2771 2 15.024 2H8.97597Z"
                            fill="#ffffff"></path>
                    </g>
                </svg>
                <h3 class="ml-3">Dashboard</h3>
            </a>
            <div class="{{ request()->is('clients*') ? 'font-semibold' : 'text-white opacity-90' }} flex p-2 ml-4 mx-auto cursor-pointer flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:opacity-100 hover:text-white hover:font-semibold"
                onclick="toggleDropdown('submenu', 'arrow')">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M17.9981 7.16C17.9381 7.15 17.8681 7.15 17.8081 7.16C16.4281 7.11 15.3281 5.98 15.3281 4.58C15.3281 3.15 16.4781 2 17.9081 2C19.3381 2 20.4881 3.16 20.4881 4.58C20.4781 5.98 19.3781 7.11 17.9981 7.16Z"
                            stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M16.9675 14.4402C18.3375 14.6702 19.8475 14.4302 20.9075 13.7202C22.3175 12.7802 22.3175 11.2402 20.9075 10.3002C19.8375 9.59016 18.3075 9.35016 16.9375 9.59016"
                            stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M5.96656 7.16C6.02656 7.15 6.09656 7.15 6.15656 7.16C7.53656 7.11 8.63656 5.98 8.63656 4.58C8.63656 3.15 7.48656 2 6.05656 2C4.62656 2 3.47656 3.16 3.47656 4.58C3.48656 5.98 4.58656 7.11 5.96656 7.16Z"
                            stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M6.9975 14.4402C5.6275 14.6702 4.1175 14.4302 3.0575 13.7202C1.6475 12.7802 1.6475 11.2402 3.0575 10.3002C4.1275 9.59016 5.6575 9.35016 7.0275 9.59016"
                            stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M12.0001 14.6302C11.9401 14.6202 11.8701 14.6202 11.8101 14.6302C10.4301 14.5802 9.33008 13.4502 9.33008 12.0502C9.33008 10.6202 10.4801 9.47021 11.9101 9.47021C13.3401 9.47021 14.4901 10.6302 14.4901 12.0502C14.4801 13.4502 13.3801 14.5902 12.0001 14.6302Z"
                            stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M9.0907 17.7804C7.6807 18.7204 7.6807 20.2603 9.0907 21.2003C10.6907 22.2703 13.3107 22.2703 14.9107 21.2003C16.3207 20.2603 16.3207 18.7204 14.9107 17.7804C13.3207 16.7204 10.6907 16.7204 9.0907 17.7804Z"
                            stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                <h3 class="ml-3 text-white">Clients</h3>
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 ml-14"
                    id="arrow">
                    <path
                        d="M17.9188 8.17969H11.6888H6.07877C5.11877 8.17969 4.63877 9.33969 5.31877 10.0197L10.4988 15.1997C11.3288 16.0297 12.6788 16.0297 13.5088 15.1997L15.4788 13.2297L18.6888 10.0197C19.3588 9.33969 18.8788 8.17969 17.9188 8.17969Z"
                        fill="#ffffff"></path>
                </svg>
            </div>
            <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 hidden" id="submenu">
                <a href="/clients/owners">
                    <h1
                        class="{{ request()->is('clients/owners*') ? 'font-semibold' : 'text-white opacity-90' }} cursor-pointer p-2 ml-8 h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:opacity-100 hover:text-white hover:font-semibold">
                        &#8226 Owners
                    </h1>
                </a>

                <a href="/clients/patient">
                    <h1
                        class="{{ request()->is('clients/patient*') ? 'font-semibold' : 'text-white opacity-90' }} cursor-pointer p-2 ml-8 h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:opacity-100 hover:text-white hover:font-semibold">
                        &#8226 Patient
                    </h1>
                </a>
            </div>

            <a href="/datadokter"
                class="{{ request()->is('datadokter') ? 'font-semibold' : 'text-white opacity-90' }} flex p-2 ml-4 mx-auto cursor-pointer flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:opacity-100 hover:text-white hover:font-semibold">
                <svg fill="#ffffff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M14,2H10A3,3,0,0,0,7,5V6H5A3,3,0,0,0,2,9V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V9a3,3,0,0,0-3-3H17V5A3,3,0,0,0,14,2ZM9,5a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1V6H9ZM20,9V19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9A1,1,0,0,1,5,8H19A1,1,0,0,1,20,9Zm-7,4h2v2H13v2H11V15H9V13h2V11h2Z">
                        </path>
                    </g>
                </svg>
                <h3 class="ml-3 text-white">Doctor</h3>
            </a>
            <a href="/jadwal"
                class="{{ request()->is('jadwal') ? 'font-semibold' : 'text-white opacity-90' }} flex p-2 ml-4 mx-auto cursor-pointer flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:opacity-100 hover:text-white hover:font-semibold">
                <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"
                    fill="#FFFFFF">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <style type="text/css">
                            .st0 {
                                fill: #FFFFFF;
                            }
                        </style>
                        <g>
                            <rect x="119.256" y="222.607" class="st0" width="50.881" height="50.885"></rect>
                            <rect x="341.863" y="222.607" class="st0" width="50.881" height="50.885"></rect>
                            <rect x="267.662" y="222.607" class="st0" width="50.881" height="50.885"></rect>
                            <rect x="119.256" y="302.11" class="st0" width="50.881" height="50.885"></rect>
                            <rect x="267.662" y="302.11" class="st0" width="50.881" height="50.885"></rect>
                            <rect x="193.46" y="302.11" class="st0" width="50.881" height="50.885"></rect>
                            <rect x="341.863" y="381.612" class="st0" width="50.881" height="50.885"></rect>
                            <rect x="267.662" y="381.612" class="st0" width="50.881" height="50.885"></rect>
                            <rect x="193.46" y="381.612" class="st0" width="50.881" height="50.885"></rect>
                            <path class="st0"
                                d="M439.277,55.046h-41.376v39.67c0,14.802-12.195,26.84-27.183,26.84h-54.025 c-14.988,0-27.182-12.038-27.182-26.84v-39.67h-67.094v39.297c0,15.008-12.329,27.213-27.484,27.213h-53.424 c-15.155,0-27.484-12.205-27.484-27.213V55.046H72.649c-26.906,0-48.796,21.692-48.796,48.354v360.246 c0,26.661,21.89,48.354,48.796,48.354h366.628c26.947,0,48.87-21.692,48.87-48.354V103.4 C488.147,76.739,466.224,55.046,439.277,55.046z M453.167,462.707c0,8.56-5.751,14.309-14.311,14.309H73.144 c-8.56,0-14.311-5.749-14.311-14.309V178.089h394.334V462.707z">
                            </path>
                            <path class="st0"
                                d="M141.525,102.507h53.392c4.521,0,8.199-3.653,8.199-8.144v-73.87c0-11.3-9.27-20.493-20.666-20.493h-28.459 c-11.395,0-20.668,9.192-20.668,20.493v73.87C133.324,98.854,137.002,102.507,141.525,102.507z">
                            </path>
                            <path class="st0"
                                d="M316.693,102.507h54.025c4.348,0,7.884-3.513,7.884-7.826V20.178C378.602,9.053,369.474,0,358.251,0H329.16 c-11.221,0-20.349,9.053-20.349,20.178v74.503C308.81,98.994,312.347,102.507,316.693,102.507z">
                            </path>
                        </g>
                    </g>
                </svg>
                <h3 class="ml-3 text-white">Schedule</h3>
            </a>
            <a href="/iventory"
                class="{{ request()->is('iventory') ? 'font-semibold' : 'text-white opacity-90' }} flex p-2 ml-4 mx-auto cursor-pointer flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:opacity-100 hover:text-white hover:font-semibold">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M21 7v11.6c0 1.33-1.07 2.4-2.4 2.4H5.4C4.07 21 3 19.93 3 18.6V7" fill="#FFFFFF"
                            fill-opacity=".16"></path>
                        <path d="M21 7v11.6c0 1.33-1.07 2.4-2.4 2.4H5.4C4.07 21 3 19.93 3 18.6V7" stroke="#FFFFFF"
                            stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"></path>
                        <path
                            d="M21.4 3H2.6A1.6 1.6 0 0 0 1 4.6v.8A1.6 1.6 0 0 0 2.6 7h18.8A1.6 1.6 0 0 0 23 5.4v-.8A1.6 1.6 0 0 0 21.4 3Z"
                            fill="#ffffff" stroke="#FFFFFF" stroke-width="1.5" stroke-miterlimit="10"></path>
                        <path d="M8 11h8" stroke="#FFFFFF" stroke-width="1.5" stroke-miterlimit="10"
                            stroke-linecap="round"></path>
                    </g>
                </svg>
                <h3 class="ml-3 text-white">Inventory</h3>
            </a>
            <a href="/invoice"
                class="{{ request()->is('invoice') ? 'font-semibold' : 'text-white opacity-90' }} flex p-2 ml-4 mx-auto cursor-pointer flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:opacity-100 hover:text-white hover:font-semibold">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g clip-path="url(#clip0_429_11099)">
                            <path
                                d="M5 3H19V21L17.9682 20.1156C17.2193 19.4737 16.1141 19.4737 15.3651 20.1156L14.3333 21L13.3016 20.1156C12.5526 19.4737 11.4474 19.4737 10.6984 20.1156L9.66667 21L8.63492 20.1156C7.88594 19.4737 6.78073 19.4737 6.03175 20.1156L5 21V3Z"
                                stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M15 7L9 7" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M15 11L9 11" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M15 15L11 15" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_429_11099">
                                <rect width="24" height="24" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </g>
                </svg>
                <h3 class="ml-3 text-white">Invoice</h3>
            </a>
            <a href="/reports"
                class="{{ request()->is('reports') ? 'font-semibold' : 'text-white opacity-90' }} flex p-2 ml-4 mx-auto cursor-pointer flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:opacity-100 hover:text-white hover:font-semibold">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g id="File / Notebook">
                            <path id="Vector"
                                d="M8 4H7.2002C6.08009 4 5.51962 4 5.0918 4.21799C4.71547 4.40973 4.40973 4.71547 4.21799 5.0918C4 5.51962 4 6.08009 4 7.2002V16.8002C4 17.9203 4 18.4801 4.21799 18.9079C4.40973 19.2842 4.71547 19.5905 5.0918 19.7822C5.5192 20 6.07899 20 7.19691 20H8M8 4H16.8002C17.9203 4 18.4796 4 18.9074 4.21799C19.2837 4.40973 19.5905 4.71547 19.7822 5.0918C20 5.5192 20 6.07899 20 7.19691V16.8036C20 17.9215 20 18.4805 19.7822 18.9079C19.5905 19.2842 19.2837 19.5905 18.9074 19.7822C18.48 20 17.921 20 16.8031 20H8M8 4V20M12 11H16M12 8H16"
                                stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </g>
                    </g>
                </svg>
                <h3 class="ml-3 text-white">Reports</h3>
            </a>
        </div>
        <div>
            <a href="/"
                class="flex p-2 ml-4 mx-auto cursor-pointer flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:opacity-100 hover:text-white hover:font-semibold">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M17.2929 14.2929C16.9024 14.6834 16.9024 15.3166 17.2929 15.7071C17.6834 16.0976 18.3166 16.0976 18.7071 15.7071L21.6201 12.7941C21.6351 12.7791 21.6497 12.7637 21.6637 12.748C21.87 12.5648 22 12.2976 22 12C22 11.7024 21.87 11.4352 21.6637 11.252C21.6497 11.2363 21.6351 11.2209 21.6201 11.2059L18.7071 8.29289C18.3166 7.90237 17.6834 7.90237 17.2929 8.29289C16.9024 8.68342 16.9024 9.31658 17.2929 9.70711L18.5858 11H13C12.4477 11 12 11.4477 12 12C12 12.5523 12.4477 13 13 13H18.5858L17.2929 14.2929Z"
                            fill="#ffffff"></path>
                        <path
                            d="M5 2C3.34315 2 2 3.34315 2 5V19C2 20.6569 3.34315 22 5 22H14.5C15.8807 22 17 20.8807 17 19.5V16.7326C16.8519 16.647 16.7125 16.5409 16.5858 16.4142C15.9314 15.7598 15.8253 14.7649 16.2674 14H13C11.8954 14 11 13.1046 11 12C11 10.8954 11.8954 10 13 10H16.2674C15.8253 9.23514 15.9314 8.24015 16.5858 7.58579C16.7125 7.4591 16.8519 7.35296 17 7.26738V4.5C17 3.11929 15.8807 2 14.5 2H5Z"
                            fill="#ffffff"></path>
                    </g>
                </svg>
                <h3 class="ml-3 text-white">Logout</h3>
            </a>
        </div>
        <script>
            function toggleDropdown(submenuId, arrowId) {
                const submenu = document.getElementById(submenuId);
                const arrow = document.getElementById(arrowId);

                // Toggle visibility and rotation
                submenu.classList.toggle("hidden");
                arrow.classList.toggle("rotate-180");

                // Save the state to localStorage
                const isVisible = !submenu.classList.contains("hidden");
                localStorage.setItem(`dropdown-${submenuId}`, isVisible);
            }

            function restoreDropdown(submenuId, arrowId) {
                const submenu = document.getElementById(submenuId);
                const arrow = document.getElementById(arrowId);

                // Retrieve the state from localStorage
                const isVisible = localStorage.getItem(`dropdown-${submenuId}`) === "true";
                if (isVisible) {
                    submenu.classList.remove("hidden");
                    arrow.classList.add("rotate-180");
                }
            }

            // Restore dropdown state on page load
            document.addEventListener("DOMContentLoaded", () => {
                restoreDropdown("submenu", "arrow");
            });
        </script>
</aside>
