<nav class="flex items-center my-8 gap-6">
    <form class="ml-auto">
        <label class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                            stroke="#545454" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                    </viewBox=>
            </div>
            <input type="text"
                class="bg-white border text-gray-900 text-sm rounded-3xl focus:ring-0 focus:border-transparent outline-gray-100 block h-10 w-[320px] ps-10 p-2.5 shadow-sm"
                placeholder="Search" required />
        </div>
    </form>
    <div class="flex gap-4 items-center">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="" class="w-8 h-8">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7.25024 4.66355C8.11998 3.36729 9.62311 2 12 2C14.3769 2 15.8801 3.36729 16.7498 4.66355C17.6074 5.94174 17.9252 7.2474 17.9711 7.44762C17.9775 7.47579 17.9821 7.49925 17.9853 7.51539L19.52 15.4288C19.8791 17.2803 18.4609 19 16.5749 19H7.42516C5.53916 19 4.12096 17.2803 4.48004 15.4288L6.01476 7.51539C6.01789 7.49925 6.02253 7.47579 6.02897 7.44762C6.07479 7.2474 6.39262 5.94174 7.25024 4.66355Z"
                    fill="#624DE3"></path>
                <path
                    d="M8.51355 20C8.76552 20.4807 9.15137 20.9831 9.73641 21.3672C10.3462 21.7675 11.113 22 12.0464 22C12.9799 22 13.7467 21.7675 14.3565 21.3672C14.9415 20.9831 15.3274 20.4807 15.5793 20H8.51355Z"
                    fill="#624DE3"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M17.2929 2.29289C16.9024 2.68342 16.9024 3.31658 17.2929 3.70711C18.119 4.53324 18.5549 5.34278 19.0299 7.24254C19.1638 7.77833 19.7067 8.10409 20.2425 7.97014C20.7783 7.83619 21.1041 7.29326 20.9702 6.75746C20.4451 4.65722 19.881 3.46676 18.7071 2.29289C18.3166 1.90237 17.6834 1.90237 17.2929 2.29289Z"
                    fill="#624DE3"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M6.7071 2.29289C7.09762 2.68342 7.09762 3.31658 6.7071 3.70711C5.88097 4.53324 5.44507 5.34278 4.97013 7.24254C4.83619 7.77833 4.29325 8.10409 3.75746 7.97014C3.22166 7.83619 2.8959 7.29326 3.02985 6.75746C3.55491 4.65722 4.11902 3.46676 5.29289 2.29289C5.68341 1.90237 6.31657 1.90237 6.7071 2.29289Z"
                    fill="#624DE3"></path>
            </g>
        </svg>
        <span class="font-semibold">Admin</span>
        <img src="{{ asset('images/profile.png') }}" class="w-12 h-12 border-4 border-primary rounded-full">
    </div>
</nav>
