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
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
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

            <main class="flex-1 overflow-y-auto px-6 space-y-6 pb-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-semibold mb-2">Add Pet Owners</h1>
                        <p class="text-sm font-semibold">
                            <span class="text-primary cursor-pointer">Clients</span> /
                            <span class="text-primary cursor-pointer">Owners</span> /
                            <span class="text-gray-500">Add Owners</span>
                        </p>
                    </div>
                </div>

                <!-- Add Owner Form -->
                <div class="bg-white p-6 rounded-2xl shadow-lg">
                    <h2 class="text-xl font-semibold">Owner Information</h2>
                    <form action="/clients/owners" method="GET" class="space-y-6">
                        @csrf

                        <!-- Upload Photo -->
                        <div class="flex flex-col items-center">
                            <div class="relative w-32 h-32 border-4 border-primary rounded-full overflow-hidden">
                                <img id="profile-image" src="{{ asset('images/avatar.png') }}" alt="Owner Photo"
                                    class="w-full h-full object-cover">
                                <label
                                    class="absolute inset-0 bg-black bg-opacity-50 text-white flex items-center justify-center opacity-0 hover:opacity-100 cursor-pointer transition">
                                    Upload Photo
                                    <input type="file" id="change-photo" class="hidden" accept="image/*">
                                </label>
                            </div>
                            <p class="text-sm text-gray-500 mt-2">Upload a clear photo of the owner. (Max: 5MB)</p>
                        </div>


                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Left Column -->
                            <div class="space-y-3">
                                <div>
                                    <label for="owner-id" class="block text-sm font-semibold text-gray-700">Owner
                                        ID</label>
                                    <input type="text" id="owner-id" name="owner_id" placeholder="Auto-generated"
                                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary"
                                        disabled>
                                </div>
                                <div>
                                    <label for="owner-name"
                                        class="block text-sm font-semibold text-gray-700">Name</label>
                                    <input type="text" id="owner-name" name="name"
                                        placeholder="Enter owner's name"
                                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                                <div>
                                    <label for="owner-phone" class="block text-sm font-semibold text-gray-700">Phone
                                        Number</label>
                                    <input type="text" id="owner-phone" name="phone"
                                        placeholder="Enter phone number"
                                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="space-y-4">
                                <div>
                                    <label for="owner-email"
                                        class="block text-sm font-semibold text-gray-700">Email</label>
                                    <input type="email" id="owner-email" name="email" placeholder="Enter email"
                                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                                <div>
                                    <label for="owner-address"
                                        class="block text-sm font-semibold text-gray-700">Address</label>
                                    <input type="text" id="owner-address" name="address" placeholder="Enter address"
                                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 text-right">
                            <button type="submit"
                                class="bg-primary text-white px-4 py-2 rounded-lg shadow-lg hover:-translate-y-1 transform transition duration-300">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

</body>

<script>
    document.getElementById("change-photo").addEventListener("change", function(event) {
        const file = event.target.files[0];
        if (file) {
            // Validasi tipe file
            const allowedTypes = ["image/jpeg", "image/png", "image/jpg"];
            if (!allowedTypes.includes(file.type)) {
                alert("Only JPEG, PNG files are allowed.");
                return;
            }

            // Validasi ukuran file (maksimal 5MB)
            const maxSize = 5 * 1024 * 1024; // 5MB
            if (file.size > maxSize) {
                alert("File size exceeds 5MB.");
                return;
            }

            // Pratinjau gambar
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById("profile-image");
                preview.src = e.target.result;
                preview.classList.remove("hidden");
            };
            reader.readAsDataURL(file);
        }
    });
</script>

</html>
