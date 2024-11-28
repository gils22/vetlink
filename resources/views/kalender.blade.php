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
    <script src="https://cdn.tailwindcss.com"></script>
    <title>VetLink</title>
</head>

<style>
    /* Mengecilkan tinggi kotak setiap hari */
    .fc-daygrid-day {
        height: 100px !important;
        /* Sesuaikan tinggi */
        vertical-align: top;
    }

    /* Mengurangi padding dalam kotak hari */
    .fc-daygrid-day-frame {
        padding: 2px !important;
    }

    /* Sesuaikan ukuran font dalam kotak kalender */
    .fc-daygrid-day-number {
        font-size: 1rem;
    }

    .fc-event {
        font-size: 0.75rem;
        padding: 2px;
        /* Ukuran teks event */
    }
</style>


<body class="font-poppins h-screen flex flex-col p-6">
    <!-- Navbar -->
    <x-navbar-admin />

    <section>
        <div class="flex items-center justify-between mb-4 gap-6">
            <h1 class="text-2xl font-semibold ml-2">Kalender</h1>
            <button
                class="border-2 border-primary bg-primary text-white rounded-lg px-6 py-3 shadow-lg hover:-translate-y-1 transform transition duration-300">
                Tambah Jadwal
            </button>

    </section>

    <!-- Main Content -->
    <div class="flex flex-1 gap-6">
        <!-- Kalender -->
        <div class="flex-1 bg-white border-2 rounded-2xl shadow-lg p-6">
            <!-- Tombol Day, Week, Month -->
            <div class="flex justify-between items-center mb-4">
                <div class="flex items-center space-x-2 bg-gray-100 p-1 rounded-full">
                    <button id="dayView"
                        class="py-2 px-4 rounded-full text-sm font-medium text-gray-700 hover:bg-gray-200 focus:outline-none">
                        Day
                    </button>
                    <button id="weekView"
                        class="py-2 px-4 rounded-full text-sm font-medium text-gray-700 hover:bg-gray-200 focus:outline-none">
                        Week
                    </button>
                    <button id="monthView"
                        class="py-2 px-4 rounded-full text-sm font-medium text-white bg-primary focus:outline-none">
                        Month
                    </button>
                </div>
            </div>
            <div>
                <div id="calendar" class="w-ful h-full"></div>
            </div>
        </div>

        <!-- Jadwal Hari Ini -->
        <div class="w-[20%] bg-white border-2 rounded-2xl shadow-lg p-6 max-h-full overflow-y-auto">
            <h3 class="text-primary font-bold mb-4">Jadwal Hari Ini</h3>
            <div id="scheduleList" class="space-y-4">
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
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: false,
                height: 'auto', // Otomatis menyesuaikan tinggi kontainer
                contentHeight: 600, // Tinggi konten kalender
                aspectRatio: 2, // Proporsi lebar dan tinggi
                events: [{
                        title: 'Meeting with Client',
                        start: new Date().toISOString().split('T')[0], // Event pada hari ini
                    },
                    {
                        title: 'Consultation',
                        start: '2024-11-25',
                    },
                ],
                dayCellDidMount: function(info) {
                    // Pastikan menggunakan waktu lokal untuk menentukan hari ini
                    const today = new Date();
                    const localToday = new Date(
                        today.getFullYear(),
                        today.getMonth(),
                        today.getDate()
                    ).toISOString().split('T')[0];

                    // Bandingkan dengan tanggal di cell kalender
                    if (info.date.toISOString().split('T')[0] === localToday) {
                        info.el.style.backgroundColor = 'rgba(102, 126, 234, 0.2)'; // Warna primary
                        info.el.style.color = '#4F46E5'; // Font warna primary
                        info.el.style.borderRadius = '6px'; // Radius untuk mempercantik
                    }
                },
            });

            calendar.render();

            // Tombol View
            document.getElementById('dayView').addEventListener('click', function() {
                setActiveButton(this); // Set gaya tombol aktif
                calendar.changeView('timeGridDay');
            });

            document.getElementById('weekView').addEventListener('click', function() {
                setActiveButton(this); // Set gaya tombol aktif
                calendar.changeView('timeGridWeek');
            });

            document.getElementById('monthView').addEventListener('click', function() {
                setActiveButton(this); // Set gaya tombol aktif
                calendar.changeView('dayGridMonth');
            });

            // Fungsi untuk mengatur gaya tombol aktif
            function setActiveButton(activeButton) {
                const buttons = document.querySelectorAll('#dayView, #weekView, #monthView');
                buttons.forEach((button) => {
                    button.classList.remove('bg-primary', 'text-white'); // Hapus warna aktif
                    button.classList.add('text-gray-700', 'hover:bg-gray-200'); // Kembalikan ke default
                });

                activeButton.classList.remove('text-gray-700', 'hover:bg-gray-200');
                activeButton.classList.add('bg-primary', 'text-white'); // Tambahkan warna aktif
            }
        });
    </script>
</body>

</html>