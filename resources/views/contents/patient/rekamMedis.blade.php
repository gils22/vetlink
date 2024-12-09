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

<body class="font-poppins bg-bgprimary">
    <div class="flex h-screen overflow-hidden">
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

            <!-- Content -->
            <main class="flex-1 overflow-y-auto px-6 space-y-6 pb-6">
                <!-- Header Section -->
                <div>
                    <h1 class="text-3xl font-semibold mb-2">Medical Record</h1>
                    <p class="text-gray-500 text-sm">Clients / Patient / Catty</p>
                </div>

                <section class="grid grid-cols-1 lg:grid-cols-[2fr,1fr] gap-6">
                    <!-- Left Section: Medical Record Patient -->
                    <div class="bg-white p-6 rounded-2xl shadow-hover-timbul">
                        <h2 class="text-xl font-semibold mb-4">Medical Record Patient</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <!-- Info Left -->
                            <div>
                                <div class="flex mb-4">
                                    <p class="font-semibold w-36">NO-RM</p>
                                    <p>: 00001</p>
                                </div>
                                <div class="flex mb-4">
                                    <p class="font-semibold w-36">Patient Name</p>
                                    <p>: Catty</p>
                                </div>
                                <div class="flex mb-4">
                                    <p class="font-semibold w-36">Gender</p>
                                    <p>: Male</p>
                                </div>
                                <div class="flex mb-4">
                                    <p class="font-semibold w-36">Age</p>
                                    <p>: 2 Years</p>
                                </div>

                            </div>
                            <!-- Info Right -->
                            <div>
                                <div class="flex mb-4">
                                    <p class="font-semibold w-36">Date</p>
                                    <p>: 22/06/2024</p>
                                </div>
                                <div class="flex mb-4">
                                    <p class="font-semibold w-36">Poli</p>
                                    <p>: Poli Umum</p>
                                </div>
                                <div class="flex mb-4">
                                    <p class="font-semibold w-36">Doctor's Name</p>
                                    <p>: drh. Agus</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Section: Profile Picture -->
                    <div class="bg-white p-6 rounded-2xl shadow-hover-timbul flex justify-center items-center">
                        <div class="w-36 h-36 border-4 border-primary rounded-full overflow-hidden">
                            <img src="{{ asset('images/kucing.png') }}" alt="Profile Picture"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                </section>

                <!-- Form Section -->
                <div class="bg-white p-6 rounded-2xl shadow-hover-timbul">
                    <h2 class="text-xl font-semibold mb-4">Details</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Diagnosis -->
                        <div class="flex mb-4 items-center">
                            <p class="font-semibold w-36">Diagnosis:</p>
                            <input type="text" value="Flu" readonly
                                class="w-full border border-bgprimary rounded-lg px-3 py-2 bg-bgprimary text-gray-700" />
                        </div>
                        <!-- Keluhan -->
                        <div class="flex mb-4 items-center">
                            <p class="font-semibold w-36">Keluhan:</p>
                            <input type="text" value="Fever and sneezing" readonly
                                class="w-full border border-bgprimary rounded-lg px-3 py-2 bg-bgprimary text-gray-700" />
                        </div>
                        <!-- Pemeriksaan -->
                        <div class="flex mb-4 items-center">
                            <p class="font-semibold w-36">Pemeriksaan:</p>
                            <input type="text" value="Normal temperature, no critical findings" readonly
                                class="w-full border border-bgprimary rounded-lg px-3 py-2 bg-bgprimary text-gray-700" />
                        </div>
                        <!-- Terapi -->
                        <div class="flex mb-4 items-center">
                            <p class="font-semibold w-36">Terapi:</p>
                            <input type="text" value="Rest and hydration" readonly
                                class="w-full border border-bgprimary rounded-lg px-3 py-2 bg-bgprimary text-gray-700" />
                        </div>
                        <!-- Hasil Lab -->
                        <div class="flex mb-4 items-center">
                            <p class="font-semibold w-36">Hasil Lab:</p>
                            <input type="text" value="Blood test normal" readonly
                                class="w-full border border-bgprimary rounded-lg px-3 py-2 bg-bgprimary text-gray-700" />
                        </div>
                        <!-- Resep -->
                        <div class="flex mb-4 items-center">
                            <p class="font-semibold w-36">Resep:</p>
                            <input type="text" value="Paracetamol, Vitamin C" readonly
                                class="w-full border border-bgprimary rounded-lg px-3 py-2 bg-bgprimary text-gray-700" />
                        </div>
                        <!-- Kesimpulan -->
                        <div class="flex mb-4 items-center">
                            <p class="font-semibold w-36">Kesimpulan:</p>
                            <input type="text" value="Recovering well" readonly
                                class="w-full border border-bgprimary rounded-lg px-3 py-2 bg-bgprimary text-gray-700" />
                        </div>
                        <!-- Kondisi Keluar -->
                        <div class="flex mb-4 items-center">
                            <p class="font-semibold w-36">Kondisi Keluar:</p>
                            <input type="text" value="Stable" readonly
                                class="w-full border border-bgprimary rounded-lg px-3 py-2 bg-bgprimary text-gray-700" />
                        </div>
                    </div>
                    <div class="flex justify-end items-center space-x-4 mt-4">
                        <!-- Cetak PDF Button -->
                        <button
                            class="bg-white shadow-lg border border-gray-200 rounded-lg w-10 h-10 flex items-center justify-center hover:-translate-y-1 transform transition duration-300">
                            <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000" class="w-8 h-8">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M0 0h48v48H0z" fill="none"></path>
                                    <g id="Shopicon">
                                        <path
                                            d="M8,36h4v8h24v-8h4c2.2,0,4-1.8,4-4V20c0-2.2-1.8-4-4-4h-4V4H12v12H8c-2.2,0-4,1.8-4,4v12C4,34.2,5.8,36,8,36z M32,40H16V28 h16V40z M16,8h16v8H16V8z M8,20h32v12h-4v-8H12v8H8V20z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </button>

                        <!-- Back Button -->
                        <button onclick="history.back()"
                            class="bg-primary text-white px-6 py-2 rounded-lg shadow-lg hover:-translate-y-1 transform transition duration-300">
                            Back
                        </button>

                    </div>

                </div>

            </main>


        </div>
</body>

</html>
