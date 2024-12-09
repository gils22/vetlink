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
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <title>VetLink</title>
</head>

<body class="font-poppins bg-bgprimary">
    <div class="flex h-screen overflow-hidden"> <!-- Tambahkan gap-16 untuk jarak lebih lebar -->
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
                            <span class="text-gray-500">Owners</span>
                        </p>

                    </div>
                    <a href="/clients/owners/tambahOwners"
                        class="border-2 border-primary bg-primary text-white rounded-lg px-4 py-2 shadow-lg hover:-translate-y-1 transform transition duration-300">
                        Add Owners
                    </a>
                </div>

                <!-- Table Section -->
                <div class="bg-white rounded-2xl shadow-hover-timbul p-6 overflow-x-auto">
                    <table class="w-full text-left bg-white rounded-lg overflow-hidden">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="py-3 px-4">Nama</th>
                                <th class="py-3 px-4">Phone</th>
                                <th class="py-3 px-4">Address</th>
                                <th class="py-3 px-4 text-center">Total Pet</th>
                                <th class="py-3 px-4 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Data Rows -->
                            <tr class="cursor-pointer" data-url="/clients/owners/dataOwners">
                                <td class="py-3 px-4 flex items-center gap-3">
                                    <img src="{{ asset('images/profile.png') }}" alt="Avatar"
                                        class="w-10 h-10 rounded-full">
                                    Gilang
                                </td>
                                <td class="py-3 px-4">0812-1619-0556</td>
                                <td class="py-3 px-4">Yogyakarta</td>
                                <td class="py-3 px-4 text-center">2</td>
                                <td class="py-3 px-4 flex gap-2 justify-center">
                                    <button
                                        class="delete-button text-red-600 hover:text-red-800 transition p-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-700"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-bgprimary cursor-pointer" data-url="/clients/owners/dataOwners">
                                <td class="py-3 px-4 flex items-center gap-3">
                                    <img src="{{ asset('images/profile.png') }}" alt="Avatar"
                                        class="w-10 h-10 rounded-full">
                                    Siti
                                </td>
                                <td class="py-3 px-4">0813-1234-5678</td>
                                <td class="py-3 px-4">Jakarta</td>
                                <td class="py-3 px-4 text-center">3</td>
                                <td class="py-3 px-4 flex gap-2 justify-center">
                                    <button
                                        class="delete-button text-red-600 hover:text-red-800 transition p-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-700"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>

                    </table>


                    <!-- Pagination Section -->
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-sm text-gray-500">Showing 1-10 of 78</span>
                        <div class="flex gap-1">
                            <button
                                class="px-3 py-1 text-sm text-gray-700 bg-gray-100 rounded hover:bg-gray-200">Prev</button>
                            <button
                                class="px-3 py-1 text-sm text-gray-700 bg-gray-100 rounded hover:bg-gray-200">Next</button>
                        </div>
                    </div>

                </div>
            </main>
        </div>
</body>

<!-- Modal -->
<x-deleteModal />


<script>
    document.addEventListener("DOMContentLoaded", () => {
        const deleteButton = document.getElementById("delete-button");
        const deleteModal = document.getElementById("delete-modal");
        const cancelDelete = document.getElementById("cancel-delete");
        const confirmDelete = document.getElementById("confirm-delete");
        const successAlert = document.getElementById("success-alert");
        const deleteButtons = document.querySelectorAll(".delete-button");
        const tableRows = document.querySelectorAll("tr[data-url]");

        tableRows.forEach((row) => {
            row.addEventListener("click", function(event) {
                // Cek apakah klik berasal dari tombol
                if (!event.target.closest("button")) {
                    const url = row.getAttribute("data-url");
                    window.location.href = url; // Pindahkan ke URL
                }
            });
        });

        deleteButtons.forEach((button) => {
            button.addEventListener("click", (event) => {
                event.stopPropagation(); // Mencegah klik tabel
                deleteModal.classList.remove("hidden");
                deleteModal.classList.add("flex");

                // Tambahkan animasi modal
                deleteModal.firstElementChild.classList.remove("scale-95");
                deleteModal.firstElementChild.classList.add("scale-100");
            });
        });

        cancelDelete.addEventListener("click", () => {
            deleteModal.classList.add("hidden");
            deleteModal.classList.remove("flex");
        });

        confirmDelete.addEventListener("click", () => {
            deleteModal.classList.add("hidden");
            deleteModal.classList.remove("flex");

            // Menampilkan notifikasi sukses
            successAlert.classList.remove("hidden");
            successAlert.classList.add("block");

            setTimeout(() => {
                successAlert.classList.add("hidden");
            }, 3000);
        });
    });
</script>

</html>
