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
    <div class="flex h-screen gap-6"> <!-- Tambahkan gap-16 untuk jarak lebih lebar -->
        <!-- Sidebar -->
        <aside class="w-[17%] min-w-[220px] bg-white">
            <x-sidebar />
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 space-y-6">
            <!-- Navbar -->
            <x-navbar-admin />

            <!-- Header Section -->
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-semibold mb-2">Data Pemilik Hewan</h1>
                    <p class="text-gray-500 text-sm">Clients / Owners</p>
                </div>
                <button
                    class="bg-primary text-white py-2 px-4 rounded-lg hover:bg-indigo-600 focus:outline-none transition">
                    Add Owners
                </button>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 md:p-12 h-[710px]">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 h-[350px]">
                </div>
            </div>
        </main>
</body>



</html>
