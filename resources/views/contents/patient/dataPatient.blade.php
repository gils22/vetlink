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
                    <h1 class="text-3xl font-semibold mb-2">Catty Data</h1>
                    <p class="text-sm font-semibold">
                        <span class="text-primary cursor-pointer">Clients</span> /
                        <span class="text-primary cursor-pointer">Patient</span> /
                        <span class="text-gray-500">Catty</span>
                    </p>
                </div>

                <!-- Overview Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-[2fr,1fr] gap-6">
                    <!-- Pet Details -->
                    <div class="bg-white p-6 rounded-2xl shadow-lg flex flex-col items-center relative">
                        <!-- Edit and Delete Icons -->
                        <div class="absolute top-4 right-4 flex">
                            <button id="edit-button"
                                class="text-indigo-600 hover:text-indigo-800 transition rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary mx-2"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                    <path fill-rule="evenodd"
                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                            <button id="delete-button" class="text-red-600 hover:text-red-800 transition rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-700" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <!-- Profile Image -->
                        <div class="relative w-32 h-32 border-4 border-primary rounded-full overflow-hidden mb-4">
                            <img id="profile-image" src="{{ asset('images/kucing.png') }}" alt="Catty Image"
                                class="w-full h-full object-cover">
                            <label
                                class="absolute inset-0 bg-black bg-opacity-50 text-white flex items-center justify-center opacity-0 hover:opacity-100 cursor-pointer transition">
                                Change Photo
                                <input type="file" id="change-photo" class="hidden" accept="image/*">
                            </label>
                        </div>

                        <!-- Information Section -->
                        <h2 class="text-xl font-semibold">Catty</h2>
                        <p class="text-gray-500">2 Years, <span class="text-primary font-semibold">Male</span></p>
                        <div class="grid grid-cols-2 mt-4 gap-4" id="catty-section">
                            <div class="space-y-2">
                                <div class="flex">
                                    <p class="font-semibold w-24">Species</p>
                                    <p id="species">: Cat</p>
                                </div>
                                <div class="flex">
                                    <p class="font-semibold w-24">Breed</p>
                                    <p id="breed">: Anggora</p>
                                </div>
                                <div class="flex">
                                    <p class="font-semibold w-24">No-RM</p>
                                    <p id="no-rm">: 00001</p>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex">
                                    <p class="font-semibold w-36">Vaccinated</p>
                                    <p id="vaccinated">: Yes</p>
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

                        <!-- Edit Buttons -->
                        <div id="edit-section" class="hidden mt-4">
                            <button id="save-button"
                                class="border-2 border-primary bg-primary text-white rounded-lg px-4 py-2 shadow-lg hover:-translate-y-1 transform transition duration-300">
                                Save</button>
                            <button id="cancel-button"
                                class="border-2 border-primary bg-white text-primary rounded-lg px-4 py-2 shadow-lg hover:-translate-y-1 transform transition duration-300">
                                Cancel</button>
                        </div>
                    </div>

                    <!-- Owner Details -->
                    <div class="bg-white p-6 rounded-2xl shadow-lg">
                        <h3 class="text-lg font-semibold mb-6">Owner Details</h3>
                        <div class="space-y-4 text-sm text-gray-700">
                            <div class="flex items-center">
                                <p class="font-semibold w-28 text-gray-900">ID</p>
                                <p>: 001</p>
                            </div>
                            <div class="flex items-center">
                                <p class="font-semibold w-28 text-gray-900">Name</p>
                                <p>: Gilang</p>
                            </div>
                            <div class="flex items-center">
                                <p class="font-semibold w-28 text-gray-900">No. Telp</p>
                                <p>: 081216190556</p>
                            </div>
                            <div class="flex items-center">
                                <p class="font-semibold w-28 text-gray-900">Email</p>
                                <p>: gilangaryatama12@gmail.com</p>
                            </div>
                            <div class="flex items-center">
                                <p class="font-semibold w-28 text-gray-900">Address</p>
                                <p>: Yogyakarta</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Medical Record Section -->
                <div class="bg-white p-6 rounded-2xl shadow-lg">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold">Medical Record</h3>
                        <button
                            class="border-2 border-primary bg-primary text-white rounded-lg px-4 py-2 shadow-lg hover:-translate-y-1 transform transition duration-300"
                            onclick="window.location='/clients/patient/dataPatient/tambahRekamMedis'">
                            Add Medical Record
                        </button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left bg-white rounded-lg overflow-hidden">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="py-3 px-4">#</th>
                                    <th class="py-3 px-4">Date</th>
                                    <th class="py-3 px-4">Doctor's Name</th>
                                    <th class="py-3 px-4">Poli</th>
                                    <th class="py-3 px-4">Kesimpulan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cursor-pointer"
                                    onclick="window.location='/clients/patient/dataPatient/rekamMedis'">
                                    <td class="py-3 px-4">1</td>
                                    <td class="py-3 px-4">22/06/2024</td>
                                    <td class="py-3 px-4">drh. Agus</td>
                                    <td class="py-3 px-4">Poli Umum</td>
                                    <td class="py-3 px-4">-</td>
                                </tr>
                                <tr class="bg-bgprimary">
                                    <td class="py-3 px-4">2</td>
                                    <td class="py-3 px-4">12/08/2024</td>
                                    <td class="py-3 px-4">drh. Agus</td>
                                    <td class="py-3 px-4">Poli Umum</td>
                                    <td class="py-3 px-4">-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
        const EditSection = document.getElementById("edit-section");

        // Editable fields
        const editableFields = {
            species: document.getElementById("species"),
            breed: document.getElementById("breed"),
            noRM: document.getElementById("no-rm"),
            vaccinated: document.getElementById("vaccinated"),
        };

        // Edit functionality
        editButton.addEventListener("click", () => {
            Object.keys(editableFields).forEach((key) => {
                const field = editableFields[key];
                const input = document.createElement("input");
                input.type = "text";
                input.value = field.textContent.slice(2);
                input.classList.add("border", "rounded-lg", "px-2", "py-1", "w-full");
                field.replaceWith(input);
                editableFields[key] = input;
            });
            EditSection.classList.remove("hidden");
        });

        // Save functionality
        saveButton.addEventListener("click", () => {
            Object.keys(editableFields).forEach((key) => {
                const input = editableFields[key];
                const p = document.createElement("p");
                p.textContent = `: ${input.value}`;
                p.id = input.id;
                p.classList.add("text-gray-600");
                input.replaceWith(p);
                editableFields[key] = p;
            });
            EditSection.classList.add("hidden");
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
        document.getElementById("change-photo").addEventListener("change", (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    document.getElementById("profile-image").src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>


</html>
