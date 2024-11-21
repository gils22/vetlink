<!-- dashboard.blade.php -->
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

<body class="font-poppins h-screen flex">
    <div class="w-[17%]">
        <x-sidebar />
    </div>
    <section class="w-[80%]">
        <x-navbar-admin />
        <div class="bg-primary rounded-xl shadow-xl flex mb-6 mx-auto"
            style="background-image: url('images/bg-admin.png');">
            <div class="pl-12 py-12 flex flex-col justify-between text-white">
                <h3>{{ $currentDate }}</h3>
                <div>
                    <h2>Welcome back, admin</h2>
                    <p>Always stay updated in VetLink</p>
                </div>
            </div>
            <img src="{{ asset('images/img-dashboard.png') }}" alt="" class="mx-auto">
        </div>
        <div class="flex justify-between mb-6">
            <div class="w-[30%] border-2 border-primary rounded-2xl flex flex-col justify-between p-6 shadow-md"
                style="background-image: url('images/bg-putih.png');">
                <div class="flex items-center justify-between gap-2">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('images/invoice.svg') }}" alt="">
                        <h3 class="text-primary font-semibold">Total Invoice</h3>
                    </div>
                    <button>
                        <img src="{{ asset('images/titiktiga.svg') }}" alt="">
                    </button>
                </div>
                <div class=" text-textprimary">
                    <h2 class="font-bold text-[24px]">1280</h2>
                    <p class=" text-sm">56 more than yesterday</p>
                </div>
            </div>
            <div class="w-[30%] border-2 border-primary rounded-2xl flex flex-col justify-between p-6 shadow-md"
                style="background-image: url('images/bg-putih.png');">
                <div class="flex items-center justify-between gap-2 mb-8">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('images/total-pasien.svg') }}" alt="">
                        <h3 class="text-primary font-semibold">Total Pasien</h3>
                    </div>
                    <button>
                        <img src="{{ asset('images/titiktiga.svg') }}" alt="">
                    </button>
                </div>
                <div class=" text-textprimary">
                    <h2 class="font-bold text-[24px]">587</h2>
                    <p class=" text-sm">56 more than yesterday</p>
                </div>
            </div>
            <div class="w-[30%] border-2 border-primary rounded-2xl flex flex-col justify-between p-6 shadow-md"
                style="background-image: url('images/bg-putih.png');">
                <div class="flex items-center justify-between gap-2 mb-8">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('images/janjitemu.svg') }}" alt="">
                        <h3 class="text-primary font-semibold">Janji Temu</h3>
                    </div>
                    <button>
                        <img src="{{ asset('images/titiktiga.svg') }}" alt="">
                    </button>
                </div>
                <div class=" text-textprimary">
                    <h2 class="font-bold text-[24px]">20</h2>
                    <p class=" text-sm">56 more than yesterday</p>
                </div>
            </div>
        </div>
        </div>
        <div class="flex h-[35%] justify-between">
            <div class="border-2 border-primary rounded-2xl w-[65%] p-6 shadow-lg">
                <img src="{{ asset('images/vanue.png') }}" alt="">
            </div>
            <div class="border-2 border-primary rounded-2xl w-[30%] p-6 shadow-lg">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-primary font-semibold">Janji Temu</h3>
                    <button>
                        <img src="{{ asset('images/titiktiga.svg') }}" alt="">
                    </button>
                </div>
                <!-- Container untuk Timeline dengan scroll -->
                <div class="overflow">
                    <!-- Timeline Item 1 -->
                    <div class="flex items-start mb-4">
                        <div class="flex flex-col items-center mr-4">
                            <div class="w-4 h-4 bg-white border-2 border-primary rounded-full my-1"></div>
                        </div>
                        <div>
                            <p class="text-black font-semibold">10:00–10:30</p>
                            <p class="text-sm text-gray-500">Catty - Persia (Gilang)</p>
                            <p class="text-sm text-gray-500">drh Agus</p>
                            <p class="text-sm text-gray-500">Konsultasi</p>
                        </div>
                    </div>

                    <!-- Timeline Item 2 -->
                    <div class="flex items-start mb-6">
                        <div class="flex flex-col items-center mr-4">
                            <div class="w-4 h-4 bg-white border-2 border-primary rounded-full my-1"></div>
                        </div>
                        <div>
                            <p class=" text-black font-semibold">11:00–11:30</p>
                            <p class="text-sm text-gray-500">Catty - Persia (Gilang)</p>
                            <p class="text-sm text-gray-500">drh Agus</p>
                            <p class="text-sm text-gray-500">Konsultasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
</body>

</html>
