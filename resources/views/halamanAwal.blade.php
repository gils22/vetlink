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

<body class="font-poppins overflow-x-hidden">
    <x-navbar />

    <section class="max-w-screen-2xl mx-auto mb-20" id="home">
        <div class="flex justify-between mb-20">
            <div class="mt-8 fade-in-left opacity-0">
                <h1 class="text-5xl text-primary font-semibold pb-6">Companion for Veterinary</h1>
                <h1 class="text-5xl text-primary font-semibold mb-8">Clinic Management</h1>
                <p class="text-2xl mb-2">Solusi Dokter Hewan dan Klinik Hewan dalam</p>
                <p class="text-2xl mb-8">Manajemen Operasional Klinik Hewan Secara Real-time.</p>
                <button
                    class="border-2 border-primary bg-primary rounded-lg px-6 py-3 hover:font-semibold text-white mr-4 shadow-xl">
                    Free Trial
                </button>
                <button
                    class="border-2 border-primary bg-white rounded-lg px-6 py-3 hover:font-semibold text-primary mr-4 shadow-xl">
                    Video Demo
                </button>
            </div>
            <div class="flex md:flex-1 justify-end relative fade-in-right opacity-0">
                <div class="z-[1] fade-to-left">
                    <img src="{{ asset('images/laptop.png') }}" alt="" class="h-[400px] md:block hidden">
                </div>
                <span
                    class="absolute w-[450px] h-[450px] bg-white rounded-full bg-gradient-to-t from-white to-primary opacity-30 -top-30 -right-60">
                </span>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center">
            <p class="text-2xl font-semibold mb-2">Our Clients</p>
            <p class="text-sm mb-8">We have worked with several animal clinics and veterinarians</p>
        </div>
        <div id="carousel" class="flex overflow-hidden whitespace-nowrap gap-32">
            <img src="{{ asset('images/1.png') }}" alt="" class="w-[180px] h-auto">
            <img src="{{ asset('images/3.png') }}" alt="" class="w-[180px] h-auto">
            <img src="{{ asset('images/2.png') }}" alt="" class="w-[180px] h-auto">
            <img src="{{ asset('images/4.png') }}" alt="" class="w-[180px] h-auto">
            <img src="{{ asset('images/5.png') }}" alt="" class="w-[180px] h-auto">
            {{-- duplicated images --}}
            <img src="{{ asset('images/1.png') }}" alt="" class="w-[180px] h-auto">
            <img src="{{ asset('images/3.png') }}" alt="" class="w-[180px] h-auto">
            <img src="{{ asset('images/2.png') }}" alt="" class="w-[180px] h-auto">
            <img src="{{ asset('images/4.png') }}" alt="" class="w-[180px] h-auto">
            <img src="{{ asset('images/5.png') }}" alt="" class="w-[180px] h-auto">
        </div>
    </section>


    <section id="About">
        <div class="flex justify-center space-x-24 mt-4">
            <div
                class="border-2 border-primary flex flex-col items-center bg-white p-6 rounded-lg shadow-md min-h-[320px] w-80 justify-center text-center">
                <img src="{{ asset('images/icon1.png') }}" alt="Rekam Medis Digital" class="w-16 h-16 mb-4">
                <h2 class="text-lg font-semibold text-primary mb-2">Rekam Medis Digital</h2>
                <p class="text-gray-600">Mendigitalkan Data Pasien untuk Akses yang Lebih Cepat dan Akurat</p>
            </div>
            <div
                class="border-2 border-primary flex flex-col items-center bg-white p-6 rounded-lg shadow-md min-h-[320px] w-80 justify-center text-center">
                <img src="{{ asset('images/icon2.png') }}" alt="Efisiensi Operasional Klinik Hewan"
                    class="w-16 h-16 mb-4">
                <h2 class="text-lg font-semibold text-primary mb-2">Efisiensi Operasional Klinik Hewan</h2>
                <p class="text-gray-600">Kelola Operasional Klinik Hewan Harian Hanya Dengan Perangkat</p>
            </div>
            <div
                class="border-2 border-primary flex flex-col items-center bg-white p-6 rounded-lg shadow-md min-h-[320px] w-80 justify-center text-center">
                <img src="{{ asset('images/icon3.png') }}" alt="Manajemen Inventori" class="w-16 h-16 mb-4">
                <h2 class="text-lg font-semibold text-primary mb-2">Manajemen Inventori</h2>
                <p class="text-gray-600">Kelola ketersediaan barang dan obat-obatan</p>
            </div>
        </div>
        </class=>

        <!-- Logo and Description -->
        <section class=" flex flex-col items-center mt-24 bg-gray-100 h-96 justify-center">
            <img src="{{ asset('images/logo-app.png') }}" alt="VetLink Logo" class="h-36 my-3">
            <p class="text-center text-gray-600 max-w-2xl">
                Kami membantu dokter hewan dan pemilik klinik hewan untuk mengelola operasional klinik mulai
                dari kedatangan klien, pemesanan, pembayaran, rawat jalan pasien, database alat dan obat-obatan,
                serta
                laporan keuangan yang dapat diupdate secara real time.
            </p>
        </section>
    </section>

    <section id="Fitur">
        <div class="flex flex-col items-center py-12 min-h-screen justify-center">
            <!-- Judul -->
            <h1 class="text-6xl font-bold text-primary mb-12">Lihat Semua Fitur</h1>

            <!-- Container Video atau Gambar -->
            <div
                class="bg-white rounded-xl shadow-lg border border-primary h-[538px] w-[899px] flex justify-center items-center relative">

                <!-- Logo dan Video -->
                <img id="logo" src="{{ asset('images/logo-app.png') }}" alt="VetLink Logo"
                    class="h-40 w-auto cursor-pointer" onclick="playVideo()">

                <!-- Ikon Play di atas logo -->
                <div id="playIcon" class="absolute inset-0 flex justify-center items-center cursor-pointer"
                    onclick="playVideo()">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-16 w-16 text-gray-200  bg-white border-2 border-gray-200 rounded-full p-2 shadow-lg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z" />
                    </svg>
                </div>

                <!-- Video -->
                <video id="promoVideo" class="hidden rounded-xl w-full h-full object-cover" controls>
                    <source src="{{ asset('videos/video-vetlink.mp4') }}" type="video/mp4">
                    Browser Anda tidak mendukung video tag.
                </video>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex space-x-4 mt-12">
                <button
                    class="border-2 border-primary bg-primary rounded-lg px-6 py-3 hover:font-semibold text-white mr-4 shadow-xl">COBA
                    GRATIS</button>
                <button
                    class="border-2 border-primary bg-white rounded-lg px-6 py-3 hover:font-semibold text-primary mr-4 shadow-xl">Whatsapp
                    Sales</button>
            </div>
        </div>
    </section>

    <section>
        <div class="flex flex-col lg:flex-row items-center justify-center pt-16 pb-8 px-4 lg:px-0">
            <img src="{{ asset('images/laptop.png') }}" alt="Vetlink Dashboard" class="h-[200px] lg:mr-8">
            <div class="text-center">
                <h1 class="text-xl lg:text-2xl font-semibold text-primary mb-4">
                    Kelola Semua Operasional Klinik <br> Hanya dengan Perangkatmu
                </h1>
                <div class="flex justify-center mt-6">
                    <button
                        class="border-2 border-primary bg-primary rounded-lg px-6 py-3 hover:font-semibold text-white shadow-xl">
                        COBA GRATIS
                    </button>
                </div>
            </div>
        </div>
        <!-- Section 2: Testimonials -->
        <div class="text-center pt-12 pb-16">
            <h2 class="text-2xl lg:text-5xl font-bold text-primary mb-12">Apa Kata Mereka?</h2>
            <div class="flex flex-col lg:flex-row justify-center gap-20 px-4 lg:px-0">
                <!-- Card 1 -->
                <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm ">
                    <img src="{{ asset('images/dokter1.jpg') }}" alt="Testimonial"
                        class="w-full h-48 rounded-t-lg object-cover mb-4">
                    <h3 class="text-lg font-semibold text-primary">Drh.</h3>
                    <div class="items-center my-2">
                        <span class="text-yellow-500 text-lg">★ ★ ★ ★ ★</span>
                    </div>
                    <p class="text-gray-600">sangat membantu klinik dalam manajemen operasional</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm">
                    <img src="{{ asset('images/dokter2.jpg') }}" alt="Testimonial"
                        class="w-full h-48 rounded-t-lg object-cover mb-4">
                    <h3 class="text-lg font-semibold text-primary">Drh.</h3>
                    <div class="items-center my-2">
                        <span class="text-yellow-500 text-lg">★ ★ ★ ★ ★</span>
                    </div>
                    <p class="text-gray-600">sangat membantu klinik dalam manajemen operasional</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm">
                    <img src="{{ asset('images/dokter3.jpg') }}" alt="Testimonial"
                        class="w-full h-48 rounded-t-lg object-cover mb-4">
                    <h3 class="text-lg font-semibold text-primary">Drh.</h3>
                    <div class="items-center my-2">
                        <span class="text-yellow-500 text-lg">★ ★ ★ ★ ★</span>
                    </div>
                    <p class="text-gray-600">sangat membantu klinik dalam manajemen operasional</p>
                </div>
            </div>
        </div> <br> <br> <br>
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

    function playVideo() {
        var logo = document.getElementById('logo');
        var video = document.getElementById('promoVideo');
        var playIcon = document.getElementById('playIcon');

        // Sembunyikan logo dan ikon play, tampilkan video
        logo.style.display = 'none';
        playIcon.style.display = 'none';
        video.classList.remove('hidden');

        // Memulai pemutaran video
        video.play().catch(error => console.log("Error saat memutar video:", error));
    }

    document.addEventListener('DOMContentLoaded', () => {
        const fadeInElements = document.querySelectorAll('.fade-in-left, .fade-in-right');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target.classList.contains('fade-in-left')) {
                        entry.target.classList.add('animate-fadeInLeft');
                    } else if (entry.target.classList.contains('fade-in-right')) {
                        entry.target.classList.add('animate-fadeInRight');
                    }
                    entry.target.classList.remove('opacity-0'); // Hapus opacity 0 agar terlihat
                }
            });
        });

        fadeInElements.forEach(el => observer.observe(el));
    });
</script>

</html>
