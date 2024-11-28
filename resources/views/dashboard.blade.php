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

<body class="font-poppins min-h-screen">
    <div class="flex h-screen gap-6"> <!-- Tambahkan gap-16 untuk jarak lebih lebar -->
        <!-- Sidebar -->
        <aside class="w-[17%] min-w-[220px] bg-white">
            <x-sidebar />
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 space-y-6"> <!-- Hilangkan padding tambahan agar lebih rapat -->
            <!-- Navbar -->
            <x-navbar-admin />

            <section class="grid grid-cols-1 lg:grid-cols-[3fr,1fr] gap-6">
                <!-- Main Section: Hero + Cards + Charts -->
                <div class="space-y-6">
                    <!-- Hero Section -->
                    <div
                        class="bg-primary text-white rounded-xl shadow-lg flex items-center justify-between bg-cover bg-center h-[250px] p-6 md:p-8 lg:p-10">
                        <div>
                            <h3 class="text-lg font-semibold mb-2 lg:mb-4">{{ $currentDate }}</h3>
                            <h2 class="text-xl lg:text-2xl font-semibold">Welcome back, Admin</h2>
                            <p class="text-sm lg:text-lg">Always stay updated in VetLink</p>
                        </div>
                        <img src="{{ asset('images/img-dashboard.png') }}" alt="Dashboard Illustration"
                            class="h-auto w-auto md:w-[250px] lg:w-[350px] object-contain">
                    </div>

                    <!-- Statistics Cards -->
                    <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Card 1 -->
                        <div
                            class="border-2 border-primary rounded-xl bg-white shadow-lg p-4 flex flex-col justify-between">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/invoice.svg') }}" alt="Invoice">
                                <h3 class="text-primary font-semibold">Total Invoice</h3>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-textprimary">1,287</h2>
                                <p class="text-sm text-gray-500">56 more than yesterday</p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div
                            class="border-2 border-primary rounded-xl bg-white shadow-lg p-4 flex flex-col justify-between">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/total-pasien.svg') }}" alt="Patient">
                                <h3 class="text-primary font-semibold">Total Patient</h3>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-textprimary">587</h2>
                                <p class="text-sm text-gray-500">20 more than yesterday</p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div
                            class="border-2 border-primary rounded-xl bg-white shadow-lg p-4 flex flex-col justify-between">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('images/janjitemu.svg') }}" alt="Appointment">
                                <h3 class="text-primary font-semibold">Appointment</h3>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-textprimary">20</h2>
                                <p class="text-sm text-gray-500">12 less than yesterday</p>
                            </div>
                        </div>
                    </section>

                    <!-- Chart Section -->
                    <section class="grid grid-cols-1 gap-4">
                        <div
                            class="border-2 border-primary rounded-xl bg-white shadow-lg p-6 h-[400px] flex flex-col justify-between">
                            <h3 class="text-primary font-semibold mb-4 text-lg">Total Pasien Mingguan</h3>
                        </div>
                    </section>

                </div>

                <!-- Timeline Section -->
                <div class="bg-white border-2 border-primary rounded-xl shadow-lg p-6 max-h-[810px] overflow-y-auto">
                    <h3 class="text-primary font-bold mb-4">Jadwal Hari Ini</h3>
                    <div class="space-y-4">
                        <div class="p-4 bg-indigo-50 rounded-lg shadow">
                            <h4 class="font-bold text-gray-700">10:00 - 10:30</h4>
                            <p class="text-sm text-gray-500">Catty - Persia (Gilang)</p>
                            <p class="text-sm text-gray-500">Dokter: drh Agus</p>
                            <span
                                class="inline-block px-2 py-1 text-xs font-medium bg-indigo-100 text-indigo-600 rounded">Konsultasi</span>
                        </div>
                        <div class="p-4 bg-indigo-50 rounded-lg shadow">
                            <h4 class="font-bold text-gray-700">11:00 - 11:30</h4>
                            <p class="text-sm text-gray-500">Milo - Bulldog (Agus)</p>
                            <p class="text-sm text-gray-500">Dokter: drh Lani</p>
                            <span
                                class="inline-block px-2 py-1 text-xs font-medium bg-indigo-100 text-indigo-600 rounded">Konsultasi</span>
                        </div>
                        <div class="p-4 bg-indigo-50 rounded-lg shadow">
                            <h4 class="font-bold text-gray-700">13:00 - 13:30</h4>
                            <p class="text-sm text-gray-500">Bobby - Golden Retriever (Tina)</p>
                            <p class="text-sm text-gray-500">Dokter: drh Sarah</p>
                            <span
                                class="inline-block px-2 py-1 text-xs font-medium bg-indigo-100 text-indigo-600 rounded">Checkup</span>
                        </div>
                        <div class="p-4 bg-indigo-50 rounded-lg shadow">
                            <h4 class="font-bold text-gray-700">15:00 - 15:30</h4>
                            <p class="text-sm text-gray-500">Lucky - Shih Tzu (Rama)</p>
                            <p class="text-sm text-gray-500">Dokter: drh Indra</p>
                            <span
                                class="inline-block px-2 py-1 text-xs font-medium bg-indigo-100 text-indigo-600 rounded">Vaksinasi</span>
                        </div>
                    </div>
                </div>
            </section>
        </main>

    </div>
</body>



</html>
