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
    <div class="flex h-screen"> <!-- Tambahkan gap-16 untuk jarak lebih lebar -->
        <!-- Sidebar -->
        <aside class="">
            <x-sidebar />
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 space-y-6">
            <!-- Navbar -->
            <x-navbar-admin />

            <header class="mb-6">
                <h1 class="text-3xl font-semibold mb-2">Catty Data</h1>
                <p class="text-gray-500 text-sm">Clients / Patient / Catty</p>
            </header>

            <section class="grid grid-cols-1 lg:grid-cols-[1fr,2fr] gap-6">
                <!-- Left Section: Profile Picture and Basic Info -->
                <div class="bg-white p-6 rounded-2xl shadow-hover-timbul flex items-center">
                    <!-- Profile Picture -->
                    <div class="flex-shrink-0 w-36 h-36 border-4 border-primary rounded-full overflow-hidden mr-6">
                        <img src="{{ asset('images/kucing.png') }}" alt="Profile Picture"
                            class="w-full h-full object-cover">
                    </div>
                    <!-- Pet Name and Info -->
                    <div>
                        <h2 class="text-xl font-semibold">Catty</h2>
                        <p class="text-gray-500">
                            2 Years, <span class="text-primary font-semibold">Male</span>
                        </p>
                    </div>
                </div>


                <div class="bg-white p-6 rounded-2xl shadow-hover-timbul flex items-center">
                    <!-- Details Section -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <div class="flex">
                                <p class="font-semibold w-24">Species</p>
                                <p>: Cat</p>
                            </div>
                            <div class="flex">
                                <p class="font-semibold w-24">Breed</p>
                                <p>: Anggora</p>
                            </div>
                            <div class="flex">
                                <p class="font-semibold w-24">No-RM</p>
                                <p>: 00001</p>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex">
                                <p class="font-semibold w-36">Vaccinated</p>
                                <p>: Yes</p>
                            </div>
                            <div class="flex">
                                <p class="font-semibold w-36">Last Check-Up</p>
                                <p>: 22 Sept 2024</p>
                            </div>
                            <div class="flex">
                                <p class="font-semibold w-36">Date of Birth</p>
                                <p>: 20 Juni 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="bg-white p-6 rounded-2xl shadow-hover-timbul mt-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-semibold">Medical Record</h3>
                    <button
                        class="border-2 border-primary bg-primary text-white rounded-lg px-4 py-2 shadow-lg hover:-translate-y-1 transform transition duration-300"
                        onclick="window.location='/clients/patient/dataPatient/tambahRekamMedis'">
                        Add Medical Record
                    </button>
                </div>
                <!-- Wrapper untuk scroll -->
                <div class="overflow-x-auto max-h-96">
                    <table class="w-full text-left bg-white rounded-lg">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-3 px-4">#</th>
                                <th class="py-3 px-4">Date</th>
                                <th class="py-3 px-4">Doctor's Name</th>
                                <th class="py-3 px-4">Poli</th>
                                <th class="py-3 px-4">Diagnosis</th>
                                <th class="py-3 px-4">Prescription</th>
                                <th class="py-3 px-4">Follow-Up</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data Row -->
                            <tr class="cursor-pointer"
                                onclick="window.location='/clients/patient/dataPatient/rekamMedis'">
                                <td class="py-3 px-4">1</td>
                                <td class="py-3 px-4">22/06/2024</td>
                                <td class="py-3 px-4">drh. Agus</td>
                                <td class="py-3 px-4">Poli Umum</td>
                                <td class="py-3 px-4">Healthy</td>
                                <td class="py-3 px-4">Vitamins</td>
                                <td class="py-3 px-4">12/07/2024</td>
                            </tr>
                            <tr class="bg-bgprimary">
                                <td class="py-3 px-4">2</td>
                                <td class="py-3 px-4">12/08/2024</td>
                                <td class="py-3 px-4">drh. Agus</td>
                                <td class="py-3 px-4">Poli Umum</td>
                                <td class="py-3 px-4">Infection</td>
                                <td class="py-3 px-4">Antibiotics</td>
                                <td class="py-3 px-4">10/09/2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </main>

    </div>
</body>

</html>
