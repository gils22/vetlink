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
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-bgprimary text-white fixed h-full hidden lg:block">
            <x-sidebar />
        </aside>

        <!-- Main Content -->
        <div class="flex-1 lg:ml-64 flex flex-col">
            <!-- Navbar -->
            <header class="bg-bgprimary">
                <x-navbar-admin />
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-hidden p-4 pb-6">
                <section class="grid grid-cols-1 lg:grid-cols-[3fr,1fr] gap-4 h-full">
                    <!-- Main Section: Hero + Cards -->
                    <div class="flex flex-col space-y-4 h-full overflow-hidden">
                        <!-- Hero Section -->
                        <div
                            class="bg-gradient-to-r from-primary to-indigo-500 text-white rounded-xl shadow-lg p-4 flex flex-col lg:flex-row items-center justify-between">
                            <!-- Text Section -->
                            <div class="text-center lg:text-left ml-4">
                                <h3 class="text-xl font-semibold mb-12">{{ $currentDate }}</h3>
                                <h2 class="text-xl font-semibold">Welcome back, Admin</h2>
                                <p class="text-md">Always stay updated in VetLink</p>
                            </div>
                            <!-- Image Section -->
                            <img src="{{ asset('images/img-dashboard.png') }}" alt="Dashboard Illustration"
                                class="h-32 lg:h-48 w-auto ">
                        </div>

                        <!-- Statistics Cards -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            <!-- Total Invoice -->
                            <div
                                class="bg-white border rounded-xl shadow-lg p-6 flex flex-col space-y-4 hover:shadow-xl transform hover:-translate-y-1 transition">
                                <h3 class="text-gray-600 font-semibold">Total Invoice</h3>
                                <h2 class="text-3xl font-bold text-gray-800">1,287</h2>
                                <p class="text-sm text-green-500 font-medium">▲ 12.1%</p>
                                <p class="text-sm text-gray-500">You issued <span class="font-bold">56</span> more
                                    invoices compared to yesterday.</p>
                            </div>

                            <!-- Total Patient -->
                            <div
                                class="bg-white border rounded-xl shadow-lg p-6 flex flex-col space-y-4 hover:shadow-xl transform hover:-translate-y-1 transition">
                                <h3 class="text-gray-600 font-semibold">Total Patient</h3>
                                <h2 class="text-3xl font-bold text-gray-800">587</h2>
                                <p class="text-sm text-green-500 font-medium">▲ 6.3%</p>
                                <p class="text-sm text-gray-500">You registered <span class="font-bold">20</span> more
                                    patients compared to yesterday.</p>
                            </div>

                            <!-- Appointment -->
                            <div
                                class="bg-white border rounded-xl shadow-lg p-6 flex flex-col space-y-4 hover:shadow-xl transform hover:-translate-y-1 transition">
                                <h3 class="text-gray-600 font-semibold">Appointment</h3>
                                <h2 class="text-3xl font-bold text-gray-800">20</h2>
                                <p class="text-sm text-red-500 font-medium">▼ 2.4%</p>
                                <p class="text-sm text-gray-500">You had <span class="font-bold">12</span> fewer
                                    appointments compared to yesterday.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Section -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 overflow-y-auto h-full">
                        <h3 class="text-lg font-semibold text-primary mb-4">Jadwal Hari Ini</h3>
                        <div class="space-y-4">
                            <div
                                class="p-4 bg-indigo-50 rounded-lg shadow hover:-translate-x-2 transition-transform ease-in duration-300">
                                <h4 class="font-bold text-gray-700">10:00 - 10:30</h4>
                                <p class="text-sm text-gray-500">Catty - Persia (Gilang)</p>
                                <p class="text-sm text-gray-500">Dokter: drh Agus</p>
                                <span
                                    class="inline-block bg-indigo-100 text-indigo-600 text-xs font-medium rounded px-2 py-1">Konsultasi</span>
                            </div>
                            <div
                                class="p-4 bg-indigo-50 rounded-lg shadow hover:-translate-x-2 transition-transform ease-in duration-300">
                                <h4 class="font-bold text-gray-700">11:00 - 11:30</h4>
                                <p class="text-sm text-gray-500">Milo - Bulldog (Agus)</p>
                                <p class="text-sm text-gray-500">Dokter: drh Lani</p>
                                <span
                                    class="inline-block bg-indigo-100 text-indigo-600 text-xs font-medium rounded px-2 py-1">Konsultasi</span>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('weeklyPatientsChart').getContext('2d');
    const weeklyPatientsChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                label: 'Patients',
                data: [12, 19, 3, 5, 2, 3, 7],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>


</html>
