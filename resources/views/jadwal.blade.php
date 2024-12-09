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
                        <h1 class="text-3xl font-semibold mb-2">Schedule</h1>
                        <p class="text-sm font-semibold">
                            <span class="text-primary cursor-pointer">Schedule</span> /
                            <span class="text-gray-500">Bookings</span>
                        </p>
                    </div>
                    <a href="kalender">
                        <button
                            class="border-2 border-primary bg-primary text-white rounded-lg px-4 py-2 shadow-lg hover:-translate-y-1 transform transition duration-300">
                            Add Jadwal
                        </button>
                    </a>
                </div>

                <!-- Table Section -->
                <div class="bg-white rounded-2xl shadow-hover-timbul p-4 md:p-8 overflow-x-auto">
                    <div class="flex justify-between items-center mb-4">
                        <!-- Tabs -->
                        <div class="flex gap-4 text-md font-semibold text-gray-600">
                            <a href="#" class="hover:text-primary border-b-2 border-primary pb-1">Bookings</a>
                            <a href="#" class="hover:text-primary">Advent</a>
                            <a href="#" class="hover:text-primary">Start</a>
                            <a href="#" class="hover:text-primary">Pharmacy</a>
                            <a href="#" class="hover:text-primary">Payment</a>
                            <a href="#" class="hover:text-primary">Done</a>
                        </div>

                        <!-- Search and Dropdown Filters -->
                        <div class="flex justify-end items-center mb-4 gap-4">
                            <div class="relative w-48">
                                <select
                                    class="w-full border rounded-lg shadow-md px-3 py-2 pr-10 bg-white appearance-none focus:outline-none focus:ring-2 focus:ring-primary">
                                    <option>Today</option>
                                    <option>Tommorrow</option>
                                    <option>Next Week</option>
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
                                    <option value="" disabled selected hidden>Staff</option>
                                    <option>drh.Agus</option>
                                    <option>drh.Gilang</option>
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
                    <table class="table-auto w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="py-3 px-4 border">#</th>
                                <th class="py-3 px-4 border">Booking</th>
                                <th class="py-3 px-4 border">Client</th>
                                <th class="py-3 px-4 border">Staff</th>
                                <th class="py-3 px-4 border">Service</th>
                                <th class="py-3 px-4 border text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data Row -->
                            <tr>
                                <td class="py-3 px-4 border">1</td>
                                <td class="py-3 px-4 border">10:00</td>
                                <td class="py-3 px-4 border">Gilang<br>Catty - Persia</td>
                                <td class="py-3 px-4 border">drh.Agus</td>
                                <td class="py-3 px-4 border">Vet Consultation</td>
                                <td class="py-3 px-4 border text-center">
                                    <button
                                        class="bg-primary text-white px-4 py-2 rounded-lg shadow hover:-translate-y-1 transform transition duration-300">
                                        Advent
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-bgprimary">
                                <td class="py-3 px-4 border">2</td>
                                <td class="py-3 px-4 border">12:00</td>
                                <td class="py-3 px-4 border">Gilang<br>Catty - Persia</td>
                                <td class="py-3 px-4 border">drh.Agus</td>
                                <td class="py-3 px-4 border">Pet Grooming</td>
                                <td class="py-3 px-4 border text-center">
                                    <button
                                        class="bg-primary text-white px-4 py-2 rounded-lg shadow hover:-translate-y-1 transform transition duration-300">
                                        Advent
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </main>
        </div>
</body>




</html>
