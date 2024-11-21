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
                class="bg-primary text-white rounded-xl shadow-lg flex items-center justify-between mb-8 bg-cover bg-center max-w-[1000px] h-[350px] ml-0">
                <div class="p-6 md:p-12 flex-1">
                    <div class="h-full flex flex-col justify-center">
                        <h3 class="text-lg font-semibold mb-4 md:mb-12">{{ $currentDate }}</h3>
                        <h2 class="text-xl md:text-2xl font-semibold">Welcome back, Admin</h2>
                        <p class="text-md md:text-xl">Always stay updated in VetLink</p>
                    </div>
                </div>
                <img src="{{ asset('images/img-dashboard.png') }}" alt="Dashboard Illustration"
                    class="h-full w-auto md:w-[600px] object-contain">
            </section>



            <!-- Statistics Cards -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Card 1 -->
                <div class="border-2 border-primary rounded-xl bg-white shadow-lg p-6 flex flex-col justify-between">
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
                <div class="border-2 border-primary rounded-xl bg-white shadow-lg p-6 flex flex-col justify-between">
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
                <div class="border-2 border-primary rounded-xl bg-white shadow-lg p-6 flex flex-col justify-between">
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
            <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Chart 1 -->
                <div class="border-2 border-primary rounded-xl bg-white shadow-lg p-6">
                    <h3 class="text-primary font-semibold mb-4">Total Pasien Mingguan</h3>
                    <!-- Canvas untuk Chart -->
                    <canvas id="patientChart1" class="w-full h-[300px]"></canvas>
                </div>

                <!-- Chart 2 -->
                <div class="border-2 border-primary rounded-xl bg-white shadow-lg p-6">
                    <h3 class="text-primary font-semibold mb-4">Total Pasien Bulanan</h3>
                    <!-- Canvas untuk Chart -->
                    <canvas id="patientChart2" class="w-full h-[300px]"></canvas>
                </div>
            </section>

            <!-- Timeline -->
            <div
                class="flex flex-col border-2 border-primary rounded-xl bg-white shadow-lg p-6 flex-grow max-w-[350px]">
                <h3 class="text-primary font-semibold mb-4">Janji Temu</h3>
                <div class="space-y-4">
                    <!-- Timeline Item 1 -->
                    <div class="flex items-start gap-4">
                        <div class="w-4 h-4 bg-white border-2 border-primary rounded-full"></div>
                        <div>
                            <p class="font-semibold text-black">10:00–10:30</p>
                            <p class="text-sm text-gray-500">Catty - Persia (Gilang)</p>
                            <p class="text-sm text-gray-500">drh Agus</p>
                        </div>
                    </div>
                    <!-- Timeline Item 2 -->
                    <div class="flex items-start gap-4">
                        <div class="w-4 h-4 bg-white border-2 border-primary rounded-full"></div>
                        <div>
                            <p class="font-semibold text-black">11:00–11:30</p>
                            <p class="text-sm text-gray-500">Catty - Persia (Gilang)</p>
                            <p class="text-sm text-gray-500">drh Agus</p>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </main>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Chart 1: Weekly Patient Stats
    const ctx1 = document.getElementById('patientChart1').getContext('2d');
    new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
            datasets: [{
                label: 'Total Pasien',
                data: [15, 20, 30, 25, 40, 35, 10],
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Chart 2: Monthly Patient Stats
    const ctx2 = document.getElementById('patientChart2').getContext('2d');
    new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
            datasets: [{
                label: 'Total Pasien',
                data: [150, 200, 170, 220],
                backgroundColor: 'rgba(153, 102, 255, 0.6)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</html>
