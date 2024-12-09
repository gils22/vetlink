<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/logo-vetlink.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <title>VetLink</title>
</head>

<body class="font-poppins overflow-y-auto">
    <!-- Navbar -->
    <x-navbar />

    <!-- Header Section -->
    <div class="flex flex-col items-center justify-center px-4 lg:px-0">
        <!-- Main Container -->
        <div
            class="mx-auto mt-8 lg:mt-12 max-w-3xl bg-white rounded-2xl border border-solid border-primary py-8 px-6 text-center shadow-md">
            <!-- Title -->
            <h2 class="text-lg lg:text-xl font-semibold text-primary">
                Ingin langsung Terhubung
            </h2>
            <h2 class="text-lg lg:text-xl font-semibold text-primary">dengan Tim Kami? Hubungi!</h2>

            <!-- WhatsApp Number -->
            <p class="text-xl lg:text-2xl font-bold text-primary my-4">0812-1619-0556</p>
            <p class="text-xl lg:text-2xl font-bold text-primary my-4">
                <span class="text-primary">(WhatsApp)</span>
            </p>

            <!-- Chat Button -->
            <a href="https://wa.me/6282240003524" target="_blank"
                class="inline-block bg-primary text-white font-medium py-2 px-6 rounded-full shadow-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-primary">
                Chat Sekarang
            </a>
        </div>

        <!-- Info Section -->
        <section class="flex flex-col items-center mt-8 h-auto lg:h-96 justify-center text-center px-4 lg:px-0">
            <img src="{{ asset('images/logo-app.png') }}" alt="VetLink Logo" class="h-24 lg:h-36 my-6">
            <p class="text-gray-600 max-w-2xl">
                Kami membantu dokter hewan dan pemilik klinik hewan untuk mengelola operasional klinik mulai
                dari kedatangan klien, pemesanan, pembayaran, rawat jalan pasien, database alat dan obat-obatan,
                serta laporan keuangan yang dapat diupdate secara real time.
            </p>
        </section>
    </div>

    <!-- Footer -->
    <footer class="bg-primary py-4 mt-8">
        <div class="container mx-auto text-center">
            <p class="text-white font-semibold">2024 VetLink</p>
        </div>
    </footer>
</body>

</html>
