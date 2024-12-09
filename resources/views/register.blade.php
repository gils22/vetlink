<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/logo-vetlink.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>VetLink - Register Clinic</title>
</head>

<body class="font-poppins">
    <x-navbar />

    <div class="container mx-auto py-6">
        <h1 class="text-2xl md:text-3xl font-bold text-center text-primary mb-6">Pendaftaran Klinik</h1>
        <form action="/register-clinic" method="POST" enctype="multipart/form-data"
            class="bg-bgprimary p-6 md:p-8 rounded-lg shadow-lg max-w-4xl mx-auto">
            @csrf

            <!-- Informasi Pribadi -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold text-primary mb-4">Informasi Pribadi</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="full-name" class="block text-gray-700 font-medium">Nama Lengkap *</label>
                        <input type="text" id="full-name" name="full_name" required
                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label for="position" class="block text-gray-700 font-medium">Jabatan *</label>
                        <input type="text" id="position" name="position" required
                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 font-medium">Email *</label>
                        <input type="email" id="email" name="email" required
                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label for="whatsapp" class="block text-gray-700 font-medium">No. WhatsApp Aktif *</label>
                        <input type="text" id="whatsapp" name="whatsapp" required
                            class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                </div>
            </div>

            <!-- Informasi Klinik -->
            <div>
                <h2 class="text-xl font-semibold text-blue-600 mb-4">Informasi Klinik</h2>
                <div class="mb-4">
                    <label for="clinic-name" class="block text-gray-700 font-medium">Nama Klinik *</label>
                    <input type="text" id="clinic-name" name="clinic_name" required
                        class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium">Jenis Klinik *</label>
                    <div class="flex items-center gap-4 mt-2">
                        <label class="flex items-center">
                            <input type="radio" name="clinic_type" value="Praktik Mandiri" required
                                class="text-primary border-gray-300 focus:ring-primary">
                            <span class="ml-2 text-gray-700">Praktik Mandiri</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="clinic_type" value="Klinik Hewan" required
                                class="text-primary border-gray-300 focus:ring-primary">
                            <span class="ml-2 text-gray-700">Klinik Hewan</span>
                        </label>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="clinic-address" class="block text-gray-700 font-medium">Alamat *</label>
                    <textarea id="clinic-address" name="clinic_address" rows="3" required
                        class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                </div>
                <div class="mb-4">
                    <label for="logo" class="block text-gray-700 font-medium">Logo Klinik</label>
                    <input type="file" id="logo" name="logo" accept="image/*"
                        class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
            </div>

            <!-- Persetujuan -->
            <div class="flex items-center">
                <input type="checkbox" id="terms" name="terms" class="mr-2" required />
                <label for="terms" class="text-sm">Saya menyetujui <a href="/terms"
                        class="text-primary underline">syarat dan ketentuan</a></label>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit"
                    class="bg-primary text-white px-6 py-2 rounded-lg shadow-lg hover:-translate-y-1 transform transition duration-300">
                    Daftar Sekarang
                </button>
            </div>
        </form>
    </div>
</body>

</html>
