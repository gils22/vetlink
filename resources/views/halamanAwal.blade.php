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

    <section class="max-w-screen-xl mx-auto mb-20 px-4" id="home">
        <!-- Header Section -->
        <div class="flex flex-col lg:flex-row justify-between items-center mb-12">
            <div class="mt-8 fade-in-left opacity-0 text-center lg:text-left">
                <h1 class="text-2xl md:text-3xl text-primary font-semibold pb-2">Companion for Veterinary</h1>
                <h1 class="text-2xl md:text-3xl text-primary font-semibold mb-4">Clinic Management</h1>
                <p class="text-base md:text-lg">VetLink Merupakan Solusi Dokter Hewan dan Klinik Hewan dalam</p>
                <p class="text-base md:text-lg mb-8">Manajemen Operasional Klinik Hewan Secara Real-time.</p>
                <div class="flex justify-center lg:justify-start gap-4">
                    <button
                        class="border-2 border-primary bg-primary rounded-lg px-4 py-2 hover:-translate-y-1 transform transition duration-300 text-white shadow-lg">
                        Free Trial
                    </button>
                    <button
                        class="border-2 border-primary bg-white rounded-lg px-4 py-2 hover:-translate-y-1 transform transition duration-300 text-primary shadow-lg">
                        Video Demo
                    </button>
                </div>
            </div>
            <div class="relative fade-in-right opacity-0 mt-8 lg:mt-0 hidden md:flex justify-end">
                <div class="z-[1] fade-to-left flex justify-center">
                    <img src="{{ asset('images/laptop.png') }}" alt="Laptop Image" class="h-[300px]">
                </div>
                <span
                    class="absolute w-[350px] h-[350px] bg-white rounded-full bg-gradient-to-t from-white to-primary opacity-30 -top-30 -right-40">
                </span>
            </div>
        </div>

        <!-- Clients Section -->
        <div class="flex flex-col justify-center items-center">
            <p class="text-lg md:text-2xl font-semibold mb-2">Our Clients</p>
            <p class="text-sm md:text-base mb-6">We have worked with several animal clinics and veterinarians</p>
        </div>
        <div id="carousel" class="flex overflow-hidden whitespace-nowrap gap-8 md:gap-16 px-4">
            <img src="{{ asset('images/1.png') }}" alt="Client 1" class="w-[70px] md:w-[130px] h-auto">
            <img src="{{ asset('images/3.png') }}" alt="Client 3" class="w-[70px] md:w-[130px] h-auto">
            <img src="{{ asset('images/2.png') }}" alt="Client 2" class="w-[70px] md:w-[130px] h-auto">
            <img src="{{ asset('images/4.png') }}" alt="Client 4" class="w-[70px] md:w-[130px] h-auto">
            <img src="{{ asset('images/5.png') }}" alt="Client 5" class="w-[70px] md:w-[130px] h-auto">
            <!-- duplicated images -->
            <img src="{{ asset('images/1.png') }}" alt="Client 1 Duplicate" class="w-[70px] md:w-[130px] h-auto">
            <img src="{{ asset('images/3.png') }}" alt="Client 3 Duplicate" class="w-[70px] md:w-[130px] h-auto">
            <img src="{{ asset('images/2.png') }}" alt="Client 2 Duplicate" class="w-[70px] md:w-[130px] h-auto">
            <img src="{{ asset('images/4.png') }}" alt="Client 4 Duplicate" class="w-[70px] md:w-[130px] h-auto">
            <img src="{{ asset('images/5.png') }}" alt="Client 5 Duplicate" class="w-[70px] md:w-[130px] h-auto">
        </div>
    </section>

    <section id="About" class="bg-gradient-to-t from-bgprimary to-white py-16">
        <div class="container mx-auto">
            <!-- Feature Cards -->
            <div class="flex flex-wrap justify-center gap-8">
                <!-- Card 1 -->
                <div class="bg-white border border-primary rounded-lg shadow-md p-6 w-80 text-center">
                    <img src="{{ asset('images/icon1.png') }}" alt="Rekam Medis Digital"
                        class="w-16 h-16 mx-auto mb-4">
                    <h2 class="text-lg font-semibold text-primary mb-2">Efisiensi Operasional Klinik Hewan</h2>
                    <p class="text-gray-600 text-sm">Kelola operasional klinik hewan harian dengan perangkat digital</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white border border-primary rounded-lg shadow-md p-6 w-80 text-center">
                    <img src="{{ asset('images/icon2.png') }}" alt="Rekam Medis Digital"
                        class="w-16 h-16 mx-auto mb-4">
                    <h2 class="text-lg font-semibold text-primary mb-2">Automasi Reservasi dan Rekam Medis</h2>
                    <p class="text-gray-600 text-sm">Akses data pemilik hewan dan pasien lebih efisien</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white border border-primary rounded-lg shadow-md p-6 w-80 text-center">
                    <img src="{{ asset('images/icon3.png') }}" alt="Manajemen Inventori"
                        class="w-16 h-16 mx-auto mb-4">
                    <h2 class="text-lg font-semibold text-primary mb-2">Manajemen Inventori</h2>
                    <p class="text-gray-600 text-sm">Kelola ketersediaan barang dan obat-obatan dengan mudah</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Logo and Description -->
    <section class="bg-bgprimary py-16">
        <div class="container mx-auto text-center">
            <img src="{{ asset('images/logo-app.png') }}" alt="VetLink Logo" class="h-20 mx-auto mb-6">
            <p class="text-gray-600 max-w-2xl mx-auto">
                Kami membantu dokter hewan dan pemilik klinik hewan untuk mengelola operasional klinik mulai dari
                kedatangan klien, pemesanan, pembayaran, rawat jalan pasien, database alat dan obat-obatan, serta
                laporan keuangan yang dapat diupdate secara real time.
            </p>
        </div>
    </section>


    <section id="Fitur" class="bg-gray-50">
        <div class="flex flex-col items-center py-12 min-h-screen justify-center px-4 md:px-8">
            <!-- Judul -->
            <h1 class="text-4xl md:text-5xl font-bold text-primary mt-4 mb-8 text-center">
                Lihat Semua Fitur
            </h1>

            <!-- Container Video atau Gambar -->
            <div
                class="bg-white rounded-xl shadow-lg border border-primary w-full max-w-[800px] aspect-video flex justify-center items-center relative">

                <!-- Logo dan Video -->
                <img id="logo" src="{{ asset('images/logo-app.png') }}" alt="VetLink Logo"
                    class="h-20 md:h-40 w-auto cursor-pointer" onclick="playVideo()">

                <!-- Ikon Play di atas logo -->
                <div id="playIcon" class="absolute inset-0 flex justify-center items-center cursor-pointer"
                    onclick="playVideo()">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-12 w-12 md:h-16 md:w-16 text-gray-200 bg-white border-2 border-gray-200 rounded-full p-2 shadow-lg hover:-translate-y-1 transform transition duration-300"
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
            <div class="flex flex-wrap justify-center md:justify-start gap-4 mt-8">
                <button
                    class="border-2 border-primary bg-primary rounded-lg px-6 py-3 hover:-translate-y-1 transform transition duration-300 text-white shadow-hover-timbul">
                    COBA GRATIS
                </button>
                <button
                    class="border-2 border-primary bg-white rounded-lg px-6 py-3 hover:-translate-y-1 transform transition duration-300 text-primary shadow-hover-timbul">
                    Whatsapp Sales
                </button>
            </div>

        </div>
    </section>

    <section>
        <!-- Section 1 -->
        <div class="flex flex-col lg:flex-row items-center justify-center pt-16 pb-8 px-4 lg:px-8">
            <img src="{{ asset('images/laptop.png') }}" alt="Vetlink Dashboard"
                class="h-40 md:h-60 lg:h-60 lg:mr-8 mb-6 lg:mb-0">
            <div class="text-center">
                <h1 class="text-lg md:text-xl lg:text-2xl font-semibold text-primary mb-4">
                    Kelola Semua Operasional Klinik <br> Hanya dengan Perangkatmu
                </h1>
                <div class="flex justify-center mt-6">
                    <button
                        class="border-2 border-primary bg-primary rounded-lg px-6 py-3 hover:-translate-y-1 transform transition duration-300 text-white shadow-hover-timbul">
                        COBA GRATIS
                    </button>
                </div>
            </div>
        </div>

        <!-- Section 2: Testimonials -->
        <div class="text-center pt-12 pb-16">
            <h2 class="text-2xl md:text-3xl lg:text-5xl font-bold text-primary mb-12">Apa Kata Mereka?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-4 lg:px-16">
                <!-- Card 1 -->
                <div
                    class="bg-white shadow-lg rounded-lg overflow-hidden max-w-xs mx-auto cursor-pointer hover:-translate-y-3 transform transition duration-300">
                    <div class="relative w-full h-48">
                        <img src="{{ asset('images/dokter1.jpg') }}" alt="Testimonial"
                            class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-primary">Drh.</h3>
                        <div class="flex justify-center items-center my-2">
                            <span class="text-yellow-500 text-lg">★ ★ ★ ★ ★</span>
                        </div>
                        <p class="text-gray-600">sangat membantu klinik dalam manajemen operasional</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-white shadow-lg rounded-lg overflow-hidden max-w-xs mx-auto cursor-pointer hover:-translate-y-3 transform transition duration-300">
                    <div class="relative w-full h-48">
                        <img src="{{ asset('images/dokter2.jpg') }}" alt="Testimonial"
                            class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-primary">Drh.</h3>
                        <div class="flex justify-center items-center my-2">
                            <span class="text-yellow-500 text-lg">★ ★ ★ ★ ★</span>
                        </div>
                        <p class="text-gray-600">sangat membantu klinik dalam manajemen operasional</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-white shadow-lg rounded-lg overflow-hidden max-w-xs mx-auto cursor-pointer hover:-translate-y-3 transform transition duration-300">
                    <div class="relative w-full h-48">
                        <img src="{{ asset('images/dokter3.jpg') }}" alt="Testimonial"
                            class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-primary">Drh.</h3>
                        <div class="flex justify-center items-center my-2">
                            <span class="text-yellow-500 text-lg">★ ★ ★ ★ ★</span>
                        </div>
                        <p class="text-gray-600">sangat membantu klinik dalam manajemen operasional</p>
                    </div>
                </div>
            </div>
        </div>
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
            <img src="{{ asset('images/imac-laptop.png') }}" alt="Vetlink Dashboard"
                class="w-full max-w-4xl h-auto">
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
