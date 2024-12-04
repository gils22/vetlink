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
    <style>
        /* Pastikan hanya <main> yang bisa di-scroll */
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
        }

        aside {
            flex: 0 0 250px;
            /* Sidebar dengan lebar tetap */
            height: 100vh;
            /* Tinggi penuh layar */
        }

        main {
            flex: 1;
            /* Ambil sisa ruang */
            overflow-y: auto;
            /* Scroll hanya pada <main> */
            height: 100vh;
            /* Tinggi penuh layar */
        }
    </style>
</head>

<body class="font-poppins bg-bgprimary">
    <!-- Sidebar -->
    <aside class="">
        <x-sidebar />
    </aside>

    <!-- Main Content -->
    <main class="p-6 space-y-6">
        <!-- Navbar -->
        <x-navbar-admin />

        <!-- Header -->
        <header class="mb-6">
            <h1 class="text-3xl font-semibold mb-2">Data Pet Owners</h1>
            <p class="text-gray-500 text-sm">Clients / Owners / Gilang</p>
        </header>

        <!-- Information Section -->
        <div class="bg-white p-6 rounded-2xl shadow-lg flex items-center">
            <!-- Bagian Informasi -->
            <div class="flex-1 p-2 max-w-6xl"> <!-- Menambahkan max-w-lg -->
                <h2 class="text-2xl font-semibold mb-4">Information</h2>
                <div class="space-y-4">
                    <div class="flex">
                        <p class="font-semibold w-36">ID</p>
                        <p>: 001</p>
                    </div>
                    <div class="flex">
                        <p class="font-semibold w-36">Name</p>
                        <p>: Gilang</p>
                    </div>
                    <div class="flex">
                        <p class="font-semibold w-36">No. Telp</p>
                        <p>: 081216190556</p>
                    </div>
                    <div class="flex">
                        <p class="font-semibold w-36">Email</p>
                        <p>: gilangaryatama@gmail.com</p>
                    </div>
                    <div class="flex">
                        <p class="font-semibold w-36">Address</p>
                        <p>: Yogyakarta</p>
                    </div>
                    <div class="flex">
                        <p class="font-semibold w-36">Total Pet</p>
                        <p>: 2</p>
                    </div>
                </div>
            </div>

            <!-- Bagian Gambar -->
            <div class="flex-shrink-0">
                <div class="w-56 h-56 border-4 border-primary rounded-full overflow-hidden">
                    <img src="{{ asset('images/profile.png') }}" alt="Profile Picture"
                        class="w-full h-full object-cover">
                </div>
            </div>
        </div>


        <!-- Pet List Section -->
        <div class="bg-white p-6 rounded-2xl shadow-hover-timbul overflow-y-auto">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-semibold">Pet List</h2>
                <button
                    class="border-2 border-primary bg-primary text-white rounded-lg px-4 py-2 shadow-lg hover:-translate-y-1 transform transition duration-300">
                    Add Pet
                </button>
            </div>
            <table class="w-full text-left bg-white rounded-lg overflow-hidden">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-4">No-RM</th>
                        <th class="py-3 px-4">Name</th>
                        <th class="py-3 px-4">Species</th>
                        <th class="py-3 px-4">Breed</th>
                        <th class="py-3 px-4">Gender</th>
                        <th class="py-3 px-4">Age</th>
                        <th class="py-3 px-4 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Isi data -->
                    <!-- Data Row -->
                    <tr class="cursor-pointer" onclick="window.location='/clients/patient/dataPatient'">
                        <td class="py-3 px-4 ">00001</td>
                        <td class="py-3 px-4 ">Catty</td>
                        <td class="py-3 px-4 ">Cat</td>
                        <td class="py-3 px-4 ">Anggora</td>
                        <td class="py-3 px-4 ">Male</td>
                        <td class="py-3 px-4 ">2 Years</td>
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-700" viewBox="0 0 20 20"
                                    fill="currentColor">
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
                        <td class="py-3 px-4 ">Cat</td>
                        <td class="py-3 px-4 ">Persia</td>
                        <td class="py-3 px-4 ">Female</td>
                        <td class="py-3 px-4 ">2 Years</td>
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-700" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
