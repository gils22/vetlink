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

<body class="font-poppins bg-bgprimary min-h-screen">
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

            <main class="flex-1 px-6 py-6 space-y-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-semibold mb-2">Add Patient</h1>
                        <p class="text-sm font-semibold">
                            <span class="text-primary cursor-pointer">Clients</span> /
                            <span class="text-primary cursor-pointer">Patients</span> /
                            <span class="text-gray-500">Add Patient</span>
                        </p>
                    </div>
                </div>

                <!-- Form Section -->
                <form action="/clients/patients" method="POST" enctype="multipart/form-data"
                    class="bg-white p-6 rounded-lg shadow-lg space-y-6">
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

                    <!-- Form Inputs -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="name" required
                                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-primary focus:border-primary">
                        </div>
                        <div>
                            <label for="species" class="block text-sm font-medium text-gray-700">Species</label>
                            <select name="species" id="species" required
                                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-primary focus:border-primary">
                                <option value="" disabled selected>Select Species</option>
                                <option value="Cat">Cat</option>
                                <option value="Dog">Dog</option>
                            </select>
                        </div>
                        <div>
                            <label for="breed" class="block text-sm font-medium text-gray-700">Breed</label>
                            <input type="text" name="breed" id="breed"
                                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-primary focus:border-primary">
                        </div>
                        <div>
                            <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                            <select name="gender" id="gender" required
                                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-primary focus:border-primary">
                                <option value="" disabled selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div>
                            <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                            <input type="date" name="dob" id="dob" required
                                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-primary focus:border-primary">
                        </div>
                        <div>
                            <label for="vaccinated" class="block text-sm font-medium text-gray-700">Vaccinated</label>
                            <select name="vaccinated" id="vaccinated" required
                                class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-primary focus:border-primary">
                                <option value="" disabled selected>Is the pet vaccinated?</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>

                    <!-- Submit and Cancel Buttons -->
                    <div class="flex justify-end gap-4">
                        <button type="button" onclick="window.history.back();"
                            class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition">
                            Save
                        </button>
                    </div>
                </form>
            </main>
        </div>
    </div>

</body>
<!-- Script for Image Preview -->
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
