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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/index.global.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/main.min.css" rel="stylesheet">
    <title>VetLink - Kalender</title>
</head>

<style>
    body {
        height: 100vh;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    #main-content {
        flex: 1;
        display: grid;
        grid-template-columns: 3fr 1fr;
        gap: 1rem;
        padding: 1rem;
        height: calc(100vh - 4rem);
        /* Sesuaikan dengan tinggi header */
    }

    #calendar-container {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    #calendar {
        flex: 1;
    }

    #scheduleList {
        overflow-y: auto;
        max-height: calc(100vh - 8rem);
        /* Sesuaikan tinggi berdasarkan elemen lain */
    }
</style>

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
                <div class="grid grid-cols-4 gap-6">
                    <!-- Kalender -->
                    <div class="col-span-3 bg-white p-6 rounded-lg shadow-lg">
                        <div class="flex justify-between items-center mb-4">
                            <!-- Tombol View (Hari, Minggu, Bulan) -->
                            <div class="flex items-center space-x-2 bg-gray-100 p-1 rounded-full">
                                <button id="dayView"
                                    class="py-2 px-4 rounded-full text-sm font-medium text-gray-700 hover:bg-gray-200 focus:outline-none">
                                    Hari
                                </button>
                                <button id="weekView"
                                    class="py-2 px-4 rounded-full text-sm font-medium text-gray-700 hover:bg-gray-200 focus:outline-none">
                                    Minggu
                                </button>
                                <button id="monthView"
                                    class="py-2 px-4 rounded-full text-sm font-medium text-white bg-primary focus:outline-none">
                                    Bulan
                                </button>
                            </div>

                            <!-- Informasi Bulan dan Tombol Navigasi -->
                            <div class="flex items-center space-x-4">
                                <h2 id="currentMonth" class="text-lg font-semibold text-gray-700">Bulan Ini</h2>
                                <div class="flex items-center space-x-2">
                                    <button id="prevMonth" class="text-gray-600 hover:text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M12.293 14.707a1 1 0 010-1.414L8.586 10l3.707-3.293a1 1 0 00-1.414-1.414l-4 4a1 1 0 000 1.414l4 4a1 1 0 001.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <button id="nextMonth" class="text-gray-600 hover:text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M7.707 5.293a1 1 0 010 1.414L11.414 10l-3.707 3.293a1 1 0 001.414 1.414l4-4a1 1 0 000-1.414l-4-4a1 1 0 00-1.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Kalender -->
                        <div id="calendar" class="w-full h-full"></div>
                    </div>
                    <!-- Jadwal Hari Ini -->
                    <div class="bg-white p-6 rounded-lg shadow-lg overflow-y-auto ">
                        <a href="kalender">
                            <button
                                class="w-full mb-4 border-2 border-primary bg-primary text-white rounded-lg px-4 py-2 hover:-translate-y-1 transform transition duration-300">
                                Add Jadwal
                            </button>
                        </a>
                        <div id="scheduleList" class="space-y-4">
                            <div class="p-4 bg-indigo-50 rounded-lg shadow ">
                                <h4 class="font-bold text-gray-700">10:00 - 10:30</h4>
                                <p class="text-sm text-gray-500">Catty - Persia (Gilang)</p>
                                <p class="text-sm text-gray-500">Dokter: drh Agus</p>
                                <span
                                    class="inline-block px-2 py-1 text-xs font-medium bg-indigo-100 text-indigo-600 rounded">Konsultasi</span>
                            </div>
                            <div class="p-4 bg-indigo-50 rounded-lg shadow ">
                                <h4 class="font-bold text-gray-700">11:00 - 11:30</h4>
                                <p class="text-sm text-gray-500">Milo - Bulldog (Agus)</p>
                                <p class="text-sm text-gray-500">Dokter: drh Lani</p>
                                <span
                                    class="inline-block px-2 py-1 text-xs font-medium bg-indigo-100 text-indigo-600 rounded">Konsultasi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('#dayView, #weekView, #monthView');
        const calendarEl = document.getElementById('calendar');
        const currentMonth = document.getElementById('currentMonth');
        const prevMonth = document.getElementById('prevMonth');
        const nextMonth = document.getElementById('nextMonth');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                // Hapus kelas aktif dari semua tombol
                buttons.forEach(btn => btn.classList.remove('bg-primary', 'text-white'));
                // Tambahkan kelas aktif ke tombol yang diklik
                this.classList.add('bg-primary', 'text-white');
                this.classList.remove('text-gray-700', 'hover:bg-gray-200');
            });
        });

        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: false,
            contentHeight: 'auto', // Sesuaikan tinggi dengan kontainer
            aspectRatio: 1.5, // Menyesuaikan lebar dan tinggi
            events: [{
                    title: 'Meeting with Client',
                    start: new Date().toISOString().split('T')[0],
                },
                {
                    title: 'Consultation',
                    start: '2024-11-25',
                },
            ],
        });

        calendar.render();

        // Update bulan saat kalender berubah
        function updateMonth() {
            const calendarDate = calendar.getDate();
            const monthNames = [
                'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
            ];
            currentMonth.textContent =
                `${monthNames[calendarDate.getMonth()]} ${calendarDate.getFullYear()}`;
        }

        updateMonth();

        // Navigasi Bulan
        prevMonth.addEventListener('click', () => {
            calendar.prev();
            updateMonth();
        });

        nextMonth.addEventListener('click', () => {
            calendar.next();
            updateMonth();
        });

        // View Switching
        document.getElementById('dayView').addEventListener('click', () => {
            calendar.changeView('timeGridDay');
        });

        document.getElementById('weekView').addEventListener('click', () => {
            calendar.changeView('timeGridWeek');
        });

        document.getElementById('monthView').addEventListener('click', () => {
            calendar.changeView('dayGridMonth');
        });
    });
</script>

</html>
