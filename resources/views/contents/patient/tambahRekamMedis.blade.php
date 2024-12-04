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

<body class="font-poppins min-h-screen bg-bgprimary">
    <div class="flex h-screen"> <!-- Tambahkan gap-16 untuk jarak lebih lebar -->
        <!-- Sidebar -->
        <aside class="">
            <x-sidebar />
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 space-y-6">
            <!-- Navbar -->
            <x-navbar-admin />

            <!-- Header -->
            <header class="mb-6">
                <h1 class="text-3xl font-semibold mb-2">Medical Record</h1>
                <p class="text-gray-500 text-sm">Clients / Patient / Catty</p>
            </header>

            <section class="grid grid-cols-1 lg:grid-cols-[2fr,1fr] gap-6">
                <!-- Left Section: Medical Record Patient -->
                <div class="bg-white p-6 rounded-2xl shadow-hover-timbul">
                    <h2 class="text-xl font-semibold mb-4">Medical Record Patient</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Info Left -->
                        <div>
                            <div class="flex mb-4">
                                <p class="font-semibold w-36">NO-RM</p>
                                <p>: 00001</p>
                            </div>
                            <div class="flex mb-4">
                                <p class="font-semibold w-36">Patient Name</p>
                                <p>: Catty</p>
                            </div>
                            <div class="flex mb-4">
                                <p class="font-semibold w-36">Gender</p>
                                <p>: Male</p>
                            </div>
                            <div class="flex mb-4">
                                <p class="font-semibold w-36">Age</p>
                                <p>: 2 Years</p>
                            </div>
                        </div>
                        <!-- Info Right -->
                        <div>
                            <div class="flex mb-2 relative">
                                <p class="font-semibold w-36">Date:</p>
                                <input type="date"
                                    class="w-full border rounded-lg shadow-md px-3 py-2 bg-white appearance-none focus:outline-none focus:ring-2 focus:ring-gray-300">
                            </div>
                            <div class="flex mb-2 relative">
                                <p class="font-semibold w-36">Poli:</p>
                                <select
                                    class="w-full border rounded-lg shadow-md px-3 py-2 pr-10 bg-white appearance-none focus:outline-none focus:ring-2 focus:ring-gray-300">
                                    <option value="" disabled selected hidden>Select Poli</option>
                                    <option>Poli Umum</option>
                                    <option>Poli Bedah</option>
                                </select>
                                <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="flex mb-2 relative">
                                <p class="font-semibold w-36">Doctor's Name:</p>
                                <select
                                    class="w-full border rounded-lg shadow-md px-3 py-2 pr-10 bg-white appearance-none focus:outline-none focus:ring-2 focus:ring-gray-300">
                                    <option value="" disabled selected hidden>Select Doctor</option>
                                    <option>drh. Agus</option>
                                    <option>drh. Budi</option>
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
                </div>

                <!-- Right Section: Profile Picture -->
                <div class="bg-white p-6 rounded-2xl shadow-hover-timbul flex justify-center items-center">
                    <div class="w-36 h-36 border-4 border-primary rounded-full overflow-hidden">
                        <img src="{{ asset('images/kucing.png') }}" alt="Profile Picture"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </section>

            <!-- Form Section -->
            <div class="bg-white p-6 rounded-2xl shadow-hover-timbul">
                <h2 class="text-xl font-semibold mb-4">Details</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex mb-4 items-center">
                        <p class="font-semibold w-36">Diagnosis:</p>
                        <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2" />
                    </div>
                    <div class="flex mb-4 items-center">
                        <p class="font-semibold w-36">Keluhan:</p>
                        <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2" />
                    </div>
                    <div class="flex mb-4 items-center">
                        <p class="font-semibold w-36">Pemeriksaan:</p>
                        <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2" />
                    </div>
                    <div class="flex mb-4 items-center">
                        <p class="font-semibold w-36">Terapi:</p>
                        <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2" />
                    </div>
                    <div class="flex mb-4 items-center">
                        <p class="font-semibold w-36">Hasil Lab:</p>
                        <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2" />
                    </div>
                    <div class="flex mb-4 items-center">
                        <p class="font-semibold w-36">Resep:</p>
                        <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2" />
                    </div>
                    <div class="flex mb-4 items-center">
                        <p class="font-semibold w-36">Kesimpulan:</p>
                        <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2" />
                    </div>
                    <div class="flex mb-4 items-center">
                        <p class="font-semibold w-36">Kondisi Keluar:</p>
                        <input type="text" class="w-full border border-gray-300 rounded-lg px-3 py-2" />
                    </div>
                </div>
                <div class="mt-4 text-right">
                    <button onclick="window.location='/clients/patient/dataPatient'"
                        class="bg-primary text-white px-6 py-2 rounded-lg shadow-lg hover:-translate-y-1 transform transition duration-300">
                        Save
                    </button>
                </div>
            </div>
        </main>


    </div>
</body>

</html>
