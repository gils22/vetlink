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
                    <h1 class="text-3xl font-semibold mb-2">Invoice</h1>
                </div>
                <a href="">
                    <button
                        class="border-2 border-primary bg-primary text-white rounded-lg px-6 py-3 shadow-lg hover:-translate-y-1 transform transition duration-300">
                        Add Invoice
                    </button>
                </a>
            </div>

            <!-- Tabel -->
            <div class="bg-white rounded-2xl shadow-hover-timbul p-6 overflow-x-auto">
                <div class="flex justify-end items-center mb-4">
                    <div class="relative w-48">
                        <select
                            class="w-full border rounded-lg shadow-md px-3 py-2 pr-10 bg-white appearance-none focus:outline-none focus:ring-2 focus:ring-primary">
                            <option>Today</option>
                            <option>Tommorrow</option>
                            <option>Next Week</option>
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
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 px-4 text-center">Invoice</th>
                            <th class="py-3 px-4 ">Date</th>
                            <th class="py-3 px-4 ">Item</th>
                            <th class="py-3 px-4 text-center">Quantity</th>
                            <th class="py-3 px-4 text-center">Total</th>
                            <th class="py-3 px-4 text-center">Payment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data Row -->
                        <tr>
                            <td class="py-3 px-4 text-center ">INV-001</td>
                            <td class="py-3 px-4 ">20 May 2024</td>
                            <td class="py-3 px-4 ">Wiskas</td>
                            <td class="py-3 px-4 text-center">1</td>
                            <td class="py-3 px-4 text-center">Rp 20.000</td>
                            <td class="py-3 px-4 flex gap-2 justify-center">
                                <span
                                    class="text-sm font-semibold text-green-500 bg-green-200 px-3 py-1 rounded-full">Completed</span>
                            </td>
                        </tr>
                        <tr class="bg-bgprimary">
                            <td class="py-3 px-4 text-center">INV-002</td>
                            <td class="py-3 px-4 ">20 May 2024</td>
                            <td class="py-3 px-4 ">Wiskas</td>
                            <td class="py-3 px-4 text-center">1</td>
                            <td class="py-3 px-4 text-center">Rp 20.000</td>
                            <td class="py-3 px-4 flex gap-2 justify-center">
                                <span
                                    class="text-sm font-semibold text-yellow-500 bg-yellow-200 px-3 py-1 rounded-full">Pending</span>
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
