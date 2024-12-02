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
                    <h1 class="text-3xl font-semibold mb-2">Iventory</h1>
                </div>
                <a href="">
                    <button
                        class="border-2 border-primary bg-primary text-white rounded-lg px-6 py-3 shadow-lg hover:-translate-y-1 transform transition duration-300">
                        Add Product
                    </button>
                </a>
            </div>

            <!-- Tabel -->
            <div class="bg-white rounded-2xl shadow-xl p-6 overflow-x-auto h-[720px]">
                <div class="flex justify-end items-center mb-4">
                    <div class="relative w-48">
                        <select
                            class="w-full border rounded-lg shadow-md px-3 py-2 pr-10 bg-white appearance-none focus:outline-none focus:ring-2 focus:ring-primary">
                            <option>Category</option>
                            <option>Food</option>
                            <option>Obat</option>
                        </select>
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <table class="w-full text-left bg-white rounded-lg overflow-hidden">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-3 px-4 text-center ">Image</th>
                            <th class="py-3 px-4 ">Product Name</th>
                            <th class="py-3 px-4 ">Category</th>
                            <th class="py-3 px-4 ">Price</th>
                            <th class="py-3 px-4 ">Stock</th>
                            <th class="py-3 px-4 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Data Rows -->
                        <tr>
                            <td class="py-3 px-4 text-center">
                                <div class="flex justify-center">
                                    <img src="{{ asset('images/profile.png') }}" alt="Product Image"
                                        class="h-16 w-16 object-cover rounded-lg">
                                </div>
                            </td>
                            <td class="py-3 px-4 ">Royal Canin</td>
                            <td class="py-3 px-4 ">Food</td>
                            <td class="py-3 px-4 ">Rp. 399.000</td>
                            <td class="py-3 px-4 ">50</td>
                            <td class="py-3 px-4 ">
                                <div class="flex justify-center items-center gap-2">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-bgprimary">
                            <td class="py-3 px-4 text-center">
                                <div class="flex justify-center">
                                    <img src="{{ asset('images/profile.png') }}" alt="Product Image"
                                        class="h-16 w-16 object-cover rounded-lg">
                                </div>
                            </td>
                            <td class="py-3 px-4 ">Royal Canin</td>
                            <td class="py-3 px-4 ">Food</td>
                            <td class="py-3 px-4 ">Rp. 399.000</td>
                            <td class="py-3 px-4 ">50</td>
                            <td class="py-3 px-4 ">
                                <div class="flex justify-center items-center gap-2">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Repeat for additional rows -->
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
