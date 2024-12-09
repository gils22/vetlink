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

            <main class="flex-1 px-6 space-y-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-semibold mb-2">Data Doctor</h1>
                        <p class="text-sm font-semibold">
                            <span class="text-primary cursor-pointer">Doctor</span>
                        </p>
                    </div>
                    <button
                        class="border-2 border-primary bg-primary text-white rounded-lg px-4 py-2 shadow-lg hover:-translate-y-1 transform transition duration-300">
                        Add Doctor
                    </button>
                </div>

                <!-- Doctor Cards Section -->
                <div class="bg-white rounded-2xl shadow-hover-timbul p-6 md:p-12 h-auto overflow-y-auto pb-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 mx-8">
                        <!-- Doctor Card 1 -->
                        <div
                            class="bg-white border-2 border-gray-200 rounded-lg p-12 shadow-md hover:shadow-lg transition flex flex-col items-center text-center">
                            <img src="{{ asset('images/profile.png') }}" alt="Doctor Avatar"
                                class="w-24 h-24 border-4 rounded-full mb-4 shadow-lg bg-gray-200">
                            <h3 class="text-lg font-bold text-gray-700">drh. Gilang Arya</h3>
                            <p class="text-gray-500 text-sm">Doctor</p>
                            <p class="text-gray-400 text-sm">gilangarya@gmail.com</p>
                        </div>

                        <!-- Doctor Card 2 -->
                        <div
                            class="bg-white border-2 border-gray-200 rounded-lg p-12 shadow-md hover:shadow-lg transition flex flex-col items-center text-center">
                            <img src="{{ asset('images/profile.png') }}" alt="Doctor Avatar"
                                class="w-24 h-24 border-4 rounded-full mb-4 shadow-lg bg-gray-200">
                            <h3 class="text-lg font-bold text-gray-700">drh. Siti Nurjanah</h3>
                            <p class="text-gray-500 text-sm">Doctor</p>
                            <p class="text-gray-400 text-sm">siti.nurjanah@gmail.com</p>
                        </div>

                        <!-- Doctor Card 3 -->
                        <div
                            class="bg-white border-2 border-gray-200 rounded-lg p-12 shadow-md hover:shadow-lg transition flex flex-col items-center text-center">
                            <img src="{{ asset('images/profile.png') }}" alt="Doctor Avatar"
                                class="w-24 h-24 border-4 rounded-full mb-4 shadow-lg bg-gray-200">
                            <h3 class="text-lg font-bold text-gray-700">drh. Budi Santoso</h3>
                            <p class="text-gray-500 text-sm">Doctor</p>
                            <p class="text-gray-400 text-sm">budi.santoso@gmail.com</p>
                        </div>
                    </div>
                </div>



            </main>
</body>



</html>
