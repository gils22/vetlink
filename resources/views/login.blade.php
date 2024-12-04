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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>VetLink</title>
</head>

<body class="bg-white-100 flex flex-col items-center justify-center sm:flex-row min-h-screen font-poppins">
    <div class="absolute top-10 left-20">
        <!-- Logo in the top left corner -->
        <img src="{{ asset('images/logo-app.png') }}" alt="VetLink Logo" class=" w-32">
    </div>

    <div class=" w-2/3">
        <img src="{{ asset('images/imac-laptop.png') }}" alt="VetLink Dashboard Preview" class="w[300px]">
    </div>

    <div>
        <!-- Right side form -->
        <div class="p-8 w-full">
            <!-- Title -->
            <h1 class="text-3xl font-semibold text-indigo-700 ">Companion for Veterinary
            </h1>
            <h1 class="text-3xl font-semibold text-indigo-700 mb-2">Clinic
                Management
            </h1>
            <p class=" text-gray-500 text-sm">Solusi dokter hewan dan klinik hewan dalam manajemen</p>
            <p class=" text-gray-500 mb-6 text-sm">operasional klinik hewan secara real-time.</p>

            <!-- Form -->
            <form class=" w-96">
                <div class="mb-4">
                    <label class="block text-gray-600" for="email">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-600" for="password">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required>
                </div>


                <div class="flex items-center justify-between mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="remember" class="text-indigo-600 border-gray-300 rounded">
                        <span class="ml-2 text-gray-600">Remember Me</span>
                    </label>
                    <a href="#" class="text-indigo-600 hover:text-indigo-500">Forget Password?</a>
                </div>

                <button onclick="window.location='/dashboard'" type="submit"
                    class="w-full py-2 bg-indigo-600 hover:bg-indigo-500 text-white font-medium rounded-md">Log
                    in</button>
            </form>

            <!-- Register link -->
            <p class="text-center text-gray-500 mt-4">Don’t have an account? <a href="#"
                    class="text-indigo-600 hover:underline">Create an account</a></p>
        </div>
    </div>
</body>

</html>
