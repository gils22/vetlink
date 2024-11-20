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

    <section class="max-w-screen-2xl mx-auto mb-20">
        <div class="flex-col justify-between mb-10">
            <div class="text-center">
                <h1 class="text-5xl text-primary font-semibold pb-6">Solusi Lengkap Manajemen Klinik</h1>
                <h1 class="text-5xl text-primary font-semibold mb-8">Lebih Mudah dan Efisien</h1>
                <button
                    class="border-2 border-primary bg-primary rounded-lg px-6 py-3 hover:font-semibold text-white mr-4 shadow-xl mb-8">
                    COBA SEKARANG
                </button>
            </div>
            <img src="{{ asset('images/laptop.png') }}" alt="" class=" mx-auto h-[450px]">
        </div>

    </section>

    <section class="items-center justify-center max-w-screen-lg mx-auto p-10">
        <h2 class="text-5xl font-bold text-center text-primary mb-12">Pilih Paket Langganan Anda</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Paket 3 Bulan -->
            <div class="border-2 border-primary rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition">
                <h3 class="text-2xl font-semibold text-primary mb-4">Paket 3 Bulan</h3>
                <p class="text-gray-600 mb-6">Langganan selama 3 bulan dengan akses ke semua fitur.</p>
                <div class="text-4xl font-bold text-primary mb-6">Rp 300,000</div>
                <button class="bg-primary text-white py-2 px-6 rounded-lg shadow hover:font-semibold">
                    Pilih Paket
                </button>
                <ul class="mt-6 text-left space-y-3">
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Dashboard Laporan Digital
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Rekam Medis Digital
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Pendaftaran Pasien
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Penjadwalan Pasien
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Penjadwalan Dokter
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Transaksi dan Kasir Digital
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Manajemen Iventori Klinik
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Manajemen Database Pasien
                    </li>
                </ul>
            </div>

            <!-- Paket 6 Bulan  -->
            <div
                class="border-4 border-primary bg-primary text-white rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition transform scale-105">
                <h3 class="text-2xl font-semibold mb-4">Paket 6 Bulan</h3>
                <p class="mb-6">Langganan selama 6 bulan dan hemat lebih banyak!</p>
                <div class="text-4xl font-bold mb-6">Rp 550,000</div>
                <button class="bg-white text-primary py-2 px-6 rounded-lg shadow hover:font-semibold">
                    Pilih Paket
                </button>
                <ul class="mt-6 text-left space-y-3">
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang-putih.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Dashboard Laporan Digital
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang-putih.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Rekam Medis Digital
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang-putih.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Pendaftaran Pasien
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang-putih.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Penjadwalan Pasien
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang-putih.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Penjadwalan Dokter
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang-putih.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Transaksi dan Kasir Digital
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang-putih.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Manajemen Iventori Klinik
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang-putih.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Manajemen Database Pasien
                    </li>
                </ul>
            </div>

            <!-- Paket 12 Bulan -->
            <div class="border-2 border-primary rounded-lg p-6 text-center shadow-lg hover:shadow-xl transition">
                <h3 class="text-2xl font-semibold text-primary mb-4">Paket 12 Bulan</h3>
                <p class="text-gray-600 mb-6">Langganan selama 12 bulan dengan harga terbaik.</p>
                <div class="text-4xl font-bold text-primary mb-6">Rp 1,000,000</div>
                <button class="bg-primary text-white py-2 px-6 rounded-lg shadow hover:font-semibold">
                    Pilih Paket
                </button>
                <ul class="mt-6 text-left space-y-3">
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang.png') }}" alt="Icon"
                            class="w-5 h-5 text-white mr-2">
                        Dashboard Laporan Digital
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Rekam Medis Digital
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Pendaftaran Pasien
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Penjadwalan Pasien
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Penjadwalan Dokter
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Transaksi dan Kasir Digital
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Manajemen Iventori Klinik
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icon-centang.png') }}" alt="Icon" class="w-5 h-5 mr-2">
                        Manajemen Database Pasien
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex items-center justify-center space-x-4 mt-12 mb-20">
            <button
                class="border-2 border-primary bg-primary rounded-lg px-6 py-3 hover:font-semibold text-white mr-4 shadow-xl">
                COBA GRATIS
            </button>
            <button
                class="border-2 border-primary bg-white rounded-lg px-6 py-3 hover:font-semibold text-primary mr-4 shadow-xl">
                Whatsapp Sales
            </button>
        </div>

    </section>

    <section class="max-w-screen-xl mx-auto">
        <!-- Section Main Content -->
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-5xl font-semibold text-primary mb-6">Say Goodbye to Hassles Meet Your
            </h1>
            <h1 class="text-5xl font-semibold text-primary mb-6">Effortless Vet Clinics
                Operations</h1>
            <button
                class="bg-primary text-white rounded-lg px-6 py-3 shadow-lg hover:shadow-xl hover:font-semibold mb-12">
                Book FREE Demo Now
            </button>
            <img src="{{ asset('images/imac-laptop.png') }}" alt="Vetlink Dashboard"class="h-[500px">
        </div>
    </section>

    <footer class="bg-primary py-4">
        <div class="container mx-auto text-center">
            <p class="text-white font-semibold">2024 VetLink</p>
        </div>
    </footer>




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
