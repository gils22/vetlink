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

<body class="font-poppins">
    <x-navbar></x-navbar>

    <section class="max-w-screen-2xl mx-auto mb-20 px-4">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-5xl text-primary font-semibold pb-6">
                Solusi Lengkap Manajemen Klinik
            </h1>
            <h1 class="text-3xl md:text-5xl text-primary font-semibold mb-8">
                Lebih Mudah dan Efisien
            </h1>
            <button
                class="border-2 border-primary bg-primary rounded-lg px-6 py-3 hover:-translate-y-3 transform transition duration-300 text-white shadow-hover-timbul">
                COBA SEKARANG
            </button>
        </div>
        <img src="{{ asset('images/laptop.png') }}" alt="Laptop Image"
            class="mx-auto w-full max-w-md md:max-w-lg h-auto">

        <!-- Pricing Section -->
        <section class="max-w-screen-lg mx-auto mt-12">
            <h2 class="text-3xl md:text-5xl font-bold text-center text-primary mb-12">
                Pilih Paket Langganan Anda
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Paket 3 Bulan -->
                <div class="border-2 border-primary rounded-lg p-6 text-center shadow-lg">
                    <h3 class="text-xl md:text-2xl font-semibold text-primary mb-4">Paket 3 Bulan</h3>
                    <p class="text-gray-600 mb-4">Langganan selama 3 bulan dengan akses ke semua fitur.</p>
                    <div class="text-2xl md:text-4xl font-bold text-primary mb-4">Rp 300,000</div>
                    <button
                        class="bg-primary text-white py-2 px-6 rounded-lg shadow hover:-translate-y-1 transform transition duration-300 mb-4">
                        Pilih Paket
                    </button>
                    <ul class="text-left space-y-3 text-sm md:text-base">
                        <li>Dashboard Laporan Digital</li>
                        <li>Rekam Medis Digital</li>
                        <li>Pendaftaran Pasien</li>
                        <li>Penjadwalan Pasien</li>
                        <li>Penjadwalan Dokter</li>
                        <li>Transaksi dan Kasir Digital</li>
                        <li>Manajemen Inventori Klinik</li>
                        <li>Manajemen Database Pasien</li>
                    </ul>
                </div>
                <!-- Paket 6 Bulan -->
                <div class="border-4 border-primary bg-primary text-white rounded-lg p-6 text-center shadow-lg">
                    <h3 class="text-xl md:text-2xl font-semibold mb-4">Paket 6 Bulan</h3>
                    <p class="mb-4">Langganan selama 6 bulan dan hemat lebih banyak!</p>
                    <div class="text-2xl md:text-4xl font-bold mb-4">Rp 550,000</div>
                    <button
                        class="bg-white text-primary py-2 px-6 rounded-lg shadow hover:-translate-y-1 transform transition duration-300 mb-4">
                        Pilih Paket
                    </button>
                    <ul class="text-left space-y-3 text-sm md:text-base">
                        <li>Dashboard Laporan Digital</li>
                        <li>Rekam Medis Digital</li>
                        <li>Pendaftaran Pasien</li>
                        <li>Penjadwalan Pasien</li>
                        <li>Penjadwalan Dokter</li>
                        <li>Transaksi dan Kasir Digital</li>
                        <li>Manajemen Inventori Klinik</li>
                        <li>Manajemen Database Pasien</li>
                    </ul>
                </div>
                <!-- Paket 12 Bulan -->
                <div class="border-2 border-primary rounded-lg p-6 text-center shadow-lg">
                    <h3 class="text-xl md:text-2xl font-semibold text-primary mb-4">Paket 12 Bulan</h3>
                    <p class="text-gray-600 mb-4">Langganan selama 12 bulan dengan harga terbaik.</p>
                    <div class="text-2xl md:text-4xl font-bold text-primary mb-4">Rp 1,000,000</div>
                    <button
                        class="bg-primary text-white py-2 px-6 rounded-lg shadow hover:-translate-y-1 transform transition duration-300 mb-4">
                        Pilih Paket
                    </button>
                    <ul class="text-left space-y-3 text-sm md:text-base">
                        <li>Dashboard Laporan Digital</li>
                        <li>Rekam Medis Digital</li>
                        <li>Pendaftaran Pasien</li>
                        <li>Penjadwalan Pasien</li>
                        <li>Penjadwalan Dokter</li>
                        <li>Transaksi dan Kasir Digital</li>
                        <li>Manajemen Inventori Klinik</li>
                        <li>Manajemen Database Pasien</li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center justify-center space-y-4 md:space-y-0 md:space-x-4 mt-8">
                <button
                    class="border-2 border-primary bg-primary rounded-lg px-6 py-3 hover:-translate-y-1 transform transition duration-300 text-white shadow-hover-timbul">
                    COBA GRATIS
                </button>
                <button
                    class="border-2 border-primary bg-white rounded-lg px-6 py-3 hover:-translate-y-1 transform transition duration-300 text-primary shadow-hover-timbul">
                    Whatsapp Sales
                </button>
            </div>
        </section>
    </section>


    <section class="max-w-screen-xl mx-auto px-4 lg:px-8 py-12">
        <!-- Section Main Content -->
        <div class="flex flex-col justify-center items-center text-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-primary mb-4">
                Say Goodbye to Hassles, Meet Your
            </h1>
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-primary mb-6">
                Effortless Vet Clinics Operations
            </h1>
            <button
                class="bg-primary text-white rounded-lg px-6 py-3 shadow-lg hover:shadow-hover-timbul hover:-translate-y-1 transform transition duration-300 mb-12">
                Book FREE Demo Now
            </button>
            <img src="{{ asset('images/imac-laptop.png') }}" alt="Vetlink Dashboard" class="w-full max-w-4xl h-auto">
        </div>
    </section>
    <x-whatsapp-button />
    <x-footer />





</body>

<script>
    const carousel = document.getElementById('carousel');
    let scrollAmount = 0;
    const scrollSpeed = 1;

    function autoScroll() {
        scrollAmount += scrollSpeed;
        if (scrollAmount >= carousel.scrollWidth / 2) {
            scrollAmount = 0; // Reset smoothly to the start of the images
        }
        carousel.scrollLeft = scrollAmount;
        requestAnimationFrame(autoScroll);
    }

    window.onload = () => {
        autoScroll();
    };
</script>

</html>
