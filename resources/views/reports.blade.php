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
    <div class="flex h-screen"> <!-- Tambahkan gap-16 untuk jarak lebih lebar -->
        <!-- Sidebar -->
        <aside class="">
            <x-sidebar />
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 space-y-6">
            <!-- Navbar -->
            <x-navbar-admin />
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-semibold mb-2">Clinic Report</h1>
                    <p class="text-gray-500 text-sm">Summary of the clinic's performance</p>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-hover-timbul p-6 md:p-12 h-[710px] overflow-y-auto">
                <!-- Statistik Section -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <!-- Total Patients -->
                    <div class="bg-blue-100 rounded-lg shadow-md p-4 text-center">
                        <h2 class="text-lg font-semibold text-gray-700">Total Patients</h2>
                        <p class="text-3xl font-bold text-blue-600">120</p>
                    </div>
                    <!-- Total Revenue -->
                    <div class="bg-green-100 rounded-lg shadow-md p-4 text-center">
                        <h2 class="text-lg font-semibold text-gray-700">Total Revenue</h2>
                        <p class="text-3xl font-bold text-green-600">Rp 15,000,000</p>
                    </div>
                    <!-- Services Provided -->
                    <div class="bg-yellow-100 rounded-lg shadow-md p-4 text-center">
                        <h2 class="text-lg font-semibold text-gray-700">Services Provided</h2>
                        <p class="text-3xl font-bold text-yellow-600">56</p>
                    </div>
                </div>

                <!-- Grafik Section -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                    <!-- Patient Visits Chart -->
                    <div class="bg-gray-50 rounded-lg shadow-lg p-6">
                        <h2 class="text-lg font-semibold mb-4">Patient Visits</h2>
                        <canvas id="visitsChart"></canvas>
                    </div>

                    <!-- Revenue Chart -->
                    <div class="bg-gray-50 rounded-lg shadow-lg p-6">
                        <h2 class="text-lg font-semibold mb-4">Monthly Revenue</h2>
                        <canvas id="revenueChart"></canvas>
                    </div>
                </div>

                <!-- Tabel Section -->
                <div>
                    <h2 class="text-lg font-semibold mb-4">Recent Appointments</h2>
                    <table class="w-full border-collapse bg-white shadow-md rounded-lg overflow-hidden">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-2 px-4 border">Date</th>
                                <th class="py-2 px-4 border">Client</th>
                                <th class="py-2 px-4 border">Pet</th>
                                <th class="py-2 px-4 border">Service</th>
                                <th class="py-2 px-4 border">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4 border">20 May 2024</td>
                                <td class="py-2 px-4 border">John Doe</td>
                                <td class="py-2 px-4 border">Bella (Dog)</td>
                                <td class="py-2 px-4 border">Vet Consultation</td>
                                <td class="py-2 px-4 border">Rp 200,000</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4 border">21 May 2024</td>
                                <td class="py-2 px-4 border">Jane Smith</td>
                                <td class="py-2 px-4 border">Milo (Cat)</td>
                                <td class="py-2 px-4 border">Vaccination</td>
                                <td class="py-2 px-4 border">Rp 150,000</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4 border">22 May 2024</td>
                                <td class="py-2 px-4 border">Alice Johnson</td>
                                <td class="py-2 px-4 border">Luna (Rabbit)</td>
                                <td class="py-2 px-4 border">Grooming</td>
                                <td class="py-2 px-4 border">Rp 300,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
</body>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const visitsCtx = document.getElementById('visitsChart').getContext('2d');
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');

    // Grafik Kunjungan Pasien
    new Chart(visitsCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Visits',
                data: [30, 45, 60, 70, 80, 95],
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top'
                },
            }
        }
    });

    // Grafik Pendapatan
    new Chart(revenueCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Revenue',
                data: [500000, 750000, 1000000, 1500000, 2000000, 2500000],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top'
                },
            }
        }
    });
</script>

</html>
