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
        <main class="flex-1 p-6 pl-[30px]"> <!-- pl-16 untuk padding kiri lebih besar -->
            <!-- Navbar -->
            <x-navbar-admin />

            <!-- Hero Section -->
            <section
                class="bg-primary text-white rounded-xl shadow-lg flex items-center justify-between mb-8 bg-cover bg-center"
                style="background-image: url('{{ asset('images/bg-admin.png') }}');">
                <div class="p-12">
                    <h3 class="text-lg mb-12">{{ $currentDate }}</h3>
                    <h2 class="text-2xl font-bold">Welcome back, admin</h2>
                    <p class="text-sm">Always stay updated in VetLink</p>
                </div>
                <img src="{{ asset('images/img-dashboard.png') }}" alt="Dashboard Illustration" class="w-[600px]">
            </section>

            <!-- Statistics Cards -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Card 1 -->
                <div
                    class="border-2 border-primary rounded-xl bg-white shadow-lg p-6 flex flex-col justify-between bg-cover"
                    style="background-image: url('{{ asset('images/bg-putih.png') }}');">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('images/invoice.svg') }}" alt="Invoice">
                            <h3 class="text-primary font-semibold">Total Invoice</h3>
                        </div>
                        <button>
                            <img src="{{ asset('images/titiktiga.svg') }}" alt="Options">
                        </button>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-textprimary">1280</h2>
                        <p class="text-sm text-gray-500">56 more than yesterday</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="border-2 border-primary rounded-xl bg-white shadow-lg p-6 flex flex-col justify-between bg-cover"
                    style="background-image: url('{{ asset('images/bg-putih.png') }}');">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('images/total-pasien.svg') }}" alt="Pasien">
                            <h3 class="text-primary font-semibold">Total Pasien</h3>
                        </div>
                        <button>
                            <img src="{{ asset('images/titiktiga.svg') }}" alt="Options">
                        </button>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-textprimary">587</h2>
                        <p class="text-sm text-gray-500">56 more than yesterday</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="border-2 border-primary rounded-xl bg-white shadow-lg p-6 flex flex-col justify-between bg-cover"
                    style="background-image: url('{{ asset('images/bg-putih.png') }}');">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('images/janjitemu.svg') }}" alt="Janji Temu">
                            <h3 class="text-primary font-semibold">Janji Temu</h3>
                        </div>
                        <button>
                            <img src="{{ asset('images/titiktiga.svg') }}" alt="Options">
                        </button>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-textprimary">20</h2>
                        <p class="text-sm text-gray-500">56 more than yesterday</p>
                    </div>
                </div>
            </section>

            <!-- Charts and Timeline -->
            <section class="flex flex-wrap gap-6">
                <!-- Chart -->
                <div class="flex-1 border-2 border-primary rounded-xl bg-white shadow-lg p-6">
                    <img src="{{ asset('images/vanue.png') }}" alt="Chart">
                </div>

                <!-- Timeline -->
                <div class="w-full md:w-[30%] border-2 border-primary rounded-xl bg-white shadow-lg p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-primary font-semibold">Janji Temu</h3>
                        <button>
                            <img src="{{ asset('images/titiktiga.svg') }}" alt="Options">
                        </button>
                    </div>
                    <div class="space-y-4">
                        <!-- Timeline Item -->
                        <div class="flex items-start gap-4">
                            <div class="w-4 h-4 bg-white border-2 border-primary rounded-full"></div>
                            <div>
                                <p class="font-semibold text-black">10:00–10:30</p>
                                <p class="text-sm text-gray-500">Catty - Persia (Gilang)</p>
                                <p class="text-sm text-gray-500">drh Agus</p>
                                <p class="text-sm text-gray-500">Konsultasi</p>
                            </div>
                        </div>
                        <!-- Timeline Item -->
                        <div class="flex items-start gap-4">
                            <div class="w-4 h-4 bg-white border-2 border-primary rounded-full"></div>
                            <div>
                                <p class="font-semibold text-black">11:00–11:30</p>
                                <p class="text-sm text-gray-500">Catty - Persia (Gilang)</p>
                                <p class="text-sm text-gray-500">drh Agus</p>
                                <p class="text-sm text-gray-500">Konsultasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>
