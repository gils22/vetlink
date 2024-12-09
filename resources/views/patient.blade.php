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
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>VetLink</title>
</head>

<body class="font-poppins bg-bgprimary">
    <div class="flex h-screen overflow-hidden"> <!-- Tambahkan gap-16 untuk jarak lebih lebar -->
        <!-- Sidebar -->
        <aside class="w-64 bg-bgprimary text-white fixed h-full">
            <x-sidebar />
        </aside>

        <!-- Main Content -->
        <div class="flex-1 ml-64 flex flex-col">
            <!-- Navbar -->
            <header class="bg-bgprimary">
                <x-navbar-admin />
            </header>

            <main class="flex-1 overflow-y-auto px-6 space-y-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-semibold mb-2">Data Patient</h1>
                        <p class="text-sm font-semibold">
                            <span class="text-primary cursor-pointer">Clients</span> /
                            <span class="text-gray-500">Patient</span>
                        </p>
                    </div>
                    <a href="/clients/patient/tambahPatient"
                        class="border-2 border-primary bg-primary text-white rounded-lg px-4 py-2 shadow-lg hover:-translate-y-1 transform transition duration-300">
                        Add Pet
                    </a>
                </div>

                <!-- Tabel -->
                <div class="bg-white rounded-2xl shadow-hover-timbul p-6 overflow-x-auto max-h-[710px]">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold">Pet List</h2>
                        <div class="flex justify-end items-center mb-4 gap-4">
                            <div class="relative w-48">
                                <select
                                    class="w-full border rounded-lg shadow-md px-3 py-2 pr-10 bg-white appearance-none focus:outline-none focus:ring-2 focus:ring-primary">
                                    <option value="" disabled selected hidden>Species</option>
                                    <option>Cat</option>
                                    <option>Dog</option>
                                </select>
                                <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="relative w-48">
                                <select
                                    class="w-full border rounded-lg shadow-md px-3 py-2 pr-10 bg-white appearance-none focus:outline-none focus:ring-2 focus:ring-primary">
                                    <option value="" disabled selected hidden>Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                                <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="w-full text-left bg-white rounded-lg overflow-hidden">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-3 px-4 ">No-RM</th>
                                <th class="py-3 px-4 ">Name</th>
                                <th class="py-3 px-4 ">Owners</th>
                                <th class="py-3 px-4 ">Species</th>
                                <th class="py-3 px-4 ">Breed</th>
                                <th class="py-3 px-4 ">Gender</th>
                                <th class="py-3 px-4 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data Row -->
                            <tr class="cursor-pointer" onclick="window.location='/clients/patient/dataPatient'">
                                <td class="py-3 px-4 ">00001</td>
                                <td class="py-3 px-4 ">Catty</td>
                                <td class="py-3 px-4 ">Gilang</td>
                                <td class="py-3 px-4 ">Cat</td>
                                <td class="py-3 px-4 ">Anggora</td>
                                <td class="py-3 px-4 ">Male</td>
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
                            <tr class="bg-bgprimary">
                                <td class="py-3 px-4 ">00002</td>
                                <td class="py-3 px-4 ">Anabul</td>
                                <td class="py-3 px-4 ">Gilang</td>
                                <td class="py-3 px-4 ">Cat</td>
                                <td class="py-3 px-4 ">Persia</td>
                                <td class="py-3 px-4 ">Female</td>
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
                            <!-- Tambahkan baris data lainnya di sini -->
                        </tbody>
                    </table>

                    <!-- Pagination -->
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
