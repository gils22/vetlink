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
                        <h1 class="text-3xl font-semibold mb-2">Data Pet Owners</h1>
                        <p class="text-sm font-semibold">
                            <span class="text-primary cursor-pointer">Clients</span> /
                            <span class="text-primary cursor-pointer">Owners</span> /
                            <span class="text-gray-500">Gilang</span>
                        </p>
                    </div>
                </div>

                <!-- Information Section -->
                <div class="bg-white p-6 rounded-2xl shadow-lg flex items-center relative">
                    <!-- Bagian Informasi -->
                    <div class="flex-1 p-2 max-w-6xl">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-2xl font-semibold">Information</h2>
                        </div>
                        <div id="info-section" class="space-y-4">
                            <div class="flex">
                                <p class="font-semibold w-36">ID</p>
                                <p id="owner-id">: 001</p>
                            </div>
                            <div class="flex">
                                <p class="font-semibold w-36">Name</p>
                                <p id="owner-name">: Gilang</p>
                            </div>
                            <div class="flex">
                                <p class="font-semibold w-36">No. Telp</p>
                                <p id="owner-phone">: 081216190556</p>
                            </div>
                            <div class="flex">
                                <p class="font-semibold w-36">Email</p>
                                <p id="owner-email">: gilangaryatama@gmail.com</p>
                            </div>
                            <div class="flex">
                                <p class="font-semibold w-36">Address</p>
                                <p id="owner-address">: Yogyakarta</p>
                            </div>
                            <div class="flex">
                                <p class="font-semibold w-36">Total Pet</p>
                                <p id="owner-pets">: 2</p>
                            </div>
                        </div>
                        <div id="save-section" class="mt-4 hidden">
                            <button id="save-button"
                                class="border-2 border-primary bg-primary text-white rounded-lg px-4 py-2 shadow-lg hover:-translate-y-1 transform transition duration-300">
                                Save
                            </button>
                            <button id="cancel-button"
                                class="border-2 border-primary bg-white text-primary rounded-lg px-4 py-2 shadow-lg hover:-translate-y-1 transform transition duration-300">
                                Cancel
                            </button>
                        </div>
                    </div>

                    <!-- Bagian Gambar -->
                    <div class="flex-shrink-0">
                        <div class="w-56 h-56 border-4 border-primary rounded-full overflow-hidden mb-2 relative group">
                            <img id="profile-image" src="{{ asset('images/profile.png') }}" alt="Profile Picture"
                                class="w-full h-full object-cover">
                            <label
                                class="absolute inset-0 bg-black bg-opacity-50 text-white flex items-center justify-center opacity-0 group-hover:opacity-100 cursor-pointer transition">
                                Change Photo
                                <input type="file" id="change-photo" class="hidden" accept="image/*">
                            </label>
                        </div>
                        <div class="text-center mt-2 flex justify-center gap-2">
                            <button class="text-indigo-600 hover:text-indigo-800 transition p-2 rounded-lg"
                                id="edit-button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mx-2"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd"
                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button class="text-red-600 hover:text-red-800 transition p-2 rounded-lg"
                                id="delete-button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-700" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>


                <!-- Pet List Section -->
                <div class="bg-white p-6 rounded-2xl shadow-hover-timbul overflow-y-auto">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-semibold">Pet List</h2>
                        <button
                            class="border-2 border-primary bg-primary text-white rounded-lg px-4 py-2 shadow-lg hover:-translate-y-1 transform transition duration-300">
                            Add Pet
                        </button>
                    </div>
                    <table class="w-full text-left bg-white rounded-lg overflow-hidden">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-3 px-4">No-RM</th>
                                <th class="py-3 px-4">Name</th>
                                <th class="py-3 px-4">Species</th>
                                <th class="py-3 px-4">Breed</th>
                                <th class="py-3 px-4">Gender</th>
                                <th class="py-3 px-4">Age</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="cursor-pointer" onclick="window.location='/clients/patient/dataPatient'">
                                <td class="py-3 px-4">00001</td>
                                <td class="py-3 px-4">Catty</td>
                                <td class="py-3 px-4">Cat</td>
                                <td class="py-3 px-4">Anggora</td>
                                <td class="py-3 px-4">Male</td>
                                <td class="py-3 px-4">2 Years</td>
                            </tr>
                            <tr class="bg-bgprimary cursor-pointer"
                                onclick="window.location='/clients/patient/dataPatient'">
                                <td class="py-3 px-4">00001</td>
                                <td class="py-3 px-4">Catty</td>
                                <td class="py-3 px-4">Cat</td>
                                <td class="py-3 px-4">Anggora</td>
                                <td class="py-3 px-4">Male</td>
                                <td class="py-3 px-4">2 Years</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>

<!-- Modal -->
<x-deleteModal />


<script>
    document.addEventListener("DOMContentLoaded", () => {
        const editButton = document.getElementById("edit-button");
        const saveButton = document.getElementById("save-button");
        const cancelButton = document.getElementById("cancel-button");
        const deleteButton = document.getElementById("delete-button");
        const deleteModal = document.getElementById("delete-modal");
        const cancelDelete = document.getElementById("cancel-delete");
        const confirmDelete = document.getElementById("confirm-delete");
        const profileImage = document.getElementById("profile-image");
        const changePhoto = document.getElementById("change-photo");
        const infoSection = document.getElementById("info-section");
        const saveSection = document.getElementById("save-section");

        // Edit functionality
        editButton.addEventListener("click", () => {
            [...infoSection.querySelectorAll("p")].forEach((p) => {
                if (p.id) {
                    const input = document.createElement("input");
                    input.type = "text";
                    input.value = p.textContent.slice(2);
                    input.classList.add("border", "rounded-lg", "px-2", "py-1", "w-full", );
                    p.replaceWith(input);
                }
            });
            saveSection.classList.remove("hidden");
        });

        // Save functionality
        saveButton.addEventListener("click", () => {
            [...infoSection.querySelectorAll("input")].forEach((input) => {
                const p = document.createElement("p");
                p.textContent = `: ${input.value}`;
                p.id = input.id;
                p.classList.add("text-gray-600");
                input.replaceWith(p);
            });
            saveSection.classList.add("hidden");
        });

        // Cancel functionality
        cancelButton.addEventListener("click", () => {
            window.location.reload();
        });

        // Show modal when delete button is clicked
        deleteButton.addEventListener("click", () => {
            deleteModal.classList.remove("hidden");
            deleteModal.classList.add("flex");
            deleteModal.firstElementChild.classList.remove("scale-95");
            deleteModal.firstElementChild.classList.add("scale-100");
        });

        // Hide modal when cancel button is clicked
        cancelDelete.addEventListener("click", () => {
            deleteModal.classList.add("hidden");
            deleteModal.classList.remove("flex");
        });

        // Confirm delete action
        confirmDelete.addEventListener("click", () => {
            deleteModal.classList.add("hidden");
            deleteModal.classList.remove("flex");

            // Show success alert
            successAlert.classList.remove("hidden");
            successAlert.classList.add("block");

            // Hide success alert after 3 seconds
            setTimeout(() => {
                successAlert.classList.add("hidden");
            }, 3000);
        });

        // Change photo functionality
        changePhoto.addEventListener("change", (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    profileImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>

</html>
