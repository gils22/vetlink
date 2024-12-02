<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('images/logo-vetlink.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <title>VetLink</title>
</head>

<body class="font-poppins bg-bgprimary">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="">
            <x-sidebar />
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 space-y-6">
            <!-- Navbar -->
            <x-navbar-admin />

            <!-- Header Section -->
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h1 class="text-3xl font-semibold mb-2">Data Pet Owners</h1>
                    <p class="text-gray-500 text-sm">Clients / Owners</p>
                </div>
                <a href="/clients/owners/tambahOwners"
                    class="border-2 border-primary bg-primary text-white rounded-lg px-6 py-3 shadow-lg hover:-translate-y-1 transform transition duration-300">
                    Add Owners
                </a>
            </div>

            <!-- Table Section -->
            <div class="bg-white rounded-2xl shadow-xl p-6 overflow-x-auto h-[710px]">
                <table class="w-full text-left bg-white rounded-lg overflow-hidden">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-3 px-4">Nama</th>
                            <th class="py-3 px-4">Phone</th>
                            <th class="py-3 px-4">Address</th>
                            <th class="py-3 px-4 text-center">Total Pet</th>
                            <th class="py-3 px-4 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Data Rows -->
                        <tr class="">
                            <td class="py-3 px-4 flex items-center gap-3">
                                <img src="{{ asset('images/profile.png') }}" alt="Avatar"
                                    class="w-10 h-10 rounded-full">
                                Gilang
                            </td>
                            <td class="py-3 px-4">0812-1619-0556</td>
                            <td class="py-3 px-4">Yogyakarta</td>
                            <td class="py-3 px-4 text-center">2</td>
                            <td class="py-3 px-4 flex gap-2 justify-center">
                                <button class="text-indigo-600 hover:text-indigo-800 transition p-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mx-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd"
                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button class="text-red-600 hover:text-red-800 transition p-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-700"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </td>
                        </tr>

                        <tr class=" bg-bgprimary">
                            <td class="py-3 px-4 flex items-center gap-3">
                                <img src="{{ asset('images/profile.png') }}" alt="Avatar"
                                    class="w-10 h-10 rounded-full">
                                Gilang
                            </td>
                            <td class="py-3 px-4">0812-1619-0556</td>
                            <td class="py-3 px-4">Yogyakarta</td>
                            <td class="py-3 px-4 text-center">2</td>
                            <td class="py-3 px-4 flex gap-2 justify-center">
                                <button class="text-indigo-600 hover:text-indigo-800 transition p-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mx-2"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd"
                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button class="text-red-600 hover:text-red-800 transition p-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-700"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <!-- Repeat for additional rows -->
                    </tbody>
                </table>


                <!-- Pagination Section -->
                <div class="flex justify-between items-center mt-4">
                    <span class="text-sm text-gray-500">Showing 1-10 of 78</span>
                    <div class="flex gap-1">
                        <button
                            class="px-3 py-1 text-sm text-gray-700 bg-gray-100 rounded hover:bg-gray-200">Prev</button>
                        <button
                            class="px-3 py-1 text-sm text-gray-700 bg-gray-100 rounded hover:bg-gray-200">Next</button>
                    </div>
                </div>

            </div>
        </main>
    </div>
</body>

</html>
