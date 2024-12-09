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
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <title>VetLink - Subscription</title>
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
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-3xl font-semibold mb-2">Subscription Info</h1>
                        <p class="text-sm font-semibold text-primary">Manage your subscription and plan details.</p>
                    </div>
                </div>

                <!-- Subscription Section -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Additional License Section -->
                    <div class="col-span-1 bg-white p-6 rounded-lg shadow-lg">
                        <div class="flex flex-col">
                            <h2 class="text-xl font-bold text-gray-700 mb-2">Pilih Paket</h2>
                            <select
                                class="w-full border-4 border-bgprimary rounded-lg px-4 py-2 focus:ring-2 focus:ring-bgprimary focus:border-bgprimary mb-4">
                                <option value="1-bulan">Paket 1 Bulan - Rp. 300.000</option>
                                <option value="6-bulan">Paket 6 Bulan - Rp. 550.000</option>
                                <option value="12-bulan">Paket 12 Bulan - Rp. 1.000.000</option>
                            </select>
                            <ul class="text-gray-500 mb-4 space-y-2">
                                <li>✔ Akun tak terbatas</li>
                                <li>✔ Tanpa biaya instalasi</li>
                                <li>✔ Tanpa biaya pemeliharaan</li>
                                <li>✔ Tanpa biaya pembaruan</li>
                            </ul>
                            <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark">Pilih
                                Paket</button>
                        </div>
                    </div>


                    <!-- Yearly Subscription Section -->
                    <div class="col-span-2 md:col-span-1 bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-xl font-bold text-gray-700 mb-4">Langganan Tahunan</h2>
                        <div class="space-y-2">
                            <p class="text-gray-500">Tanggal Pembayaran: <span class="font-bold">28 March 2024</span>
                            </p>
                        </div>
                        <h2 class="text-xl font-bold text-gray-700 my-4">Pembayaran Terakhir</h2>
                        <div class="space-y-2">
                            <p class="text-gray-500">Payment Success</p>
                            <div class="flex justify-between items-center">
                                <p class="text-gray-500">**** **** **** 0009 <span class="text-primary">(VISA)</span>
                                </p>
                                <p class="font-bold text-lg">Rp. 1.000.000</p>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Info Section -->
                    <div class="col-span-2 md:col-span-1 bg-white p-6 rounded-lg shadow-lg">
                        <!-- Status Klinik -->
                        <div class="flex items-center justify-between mb-4">
                            <p class="text-xs text-gray-500">Berlaku hingga: 28 Maret 2025</p>
                            <h3 class="text-sm font-medium text-green-600 bg-green-100 px-3 py-1 rounded-full">
                                Active
                            </h3>
                        </div>
                        <!-- Next Payment Section -->
                        <h2 class="text-xl font-bold text-gray-700 mb-4">Pembayaran Berikutnya</h2>
                        <div class="flex justify-between items-center">
                            <p class="text-gray-500">28 Maret 2025</p>
                            <p class="font-bold text-lg">Rp. 1.000.000</p>
                        </div>
                        <div class="flex flex-col justify-between mt-4">
                            <a href="/change-payment" class="text-primary font-medium hover:underline mb-4">
                                Pembayaran</a>
                        </div>
                    </div>


                    <!-- Billing Info Section -->
                    <div class="col-span-3 bg-white p-4 rounded-lg shadow-lg">
                        <div class="col-span-3 bg-white p-6 rounded-lg shadow-lg">
                            <div class="flex justify-between items-center">
                                <h2 class="text-xl font-bold text-gray-700">Billing</h2>
                                <div class="flex items-center">
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
                                </div>
                            </div>
                            <!-- Read-Only View -->
                            <div id="billing-info" class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4">
                                <div>
                                    <p class="text-gray-500 text-sm">Nama Klinik</p>
                                    <p id="clinic-name-view" class="text-gray-700 font-medium">VetLink Clinic</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Nama Pemilik</p>
                                    <p id="owner-name-view" class="text-gray-700 font-medium">Gils</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">No. Telp Pemilik</p>
                                    <p id="owner-phone-view" class="text-gray-700 font-medium">0812-3456-7890</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-sm">Email</p>
                                    <p id="clinic-email-view" class="text-gray-700 font-medium">vetlink@gmail.com</p>
                                </div>
                            </div>
                            <!-- Editable Form -->
                            <form id="billing-form" class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-4 hidden">
                                <div>
                                    <label for="clinic-name" class="text-gray-500 text-sm">Nama Klinik</label>
                                    <input type="text" id="clinic-name"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2"
                                        value="VetLink Clinic">
                                </div>
                                <div>
                                    <label for="owner-name" class="text-gray-500 text-sm">Nama Pemilik</label>
                                    <input type="text" id="owner-name"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2" value="Gils">
                                </div>
                                <div>
                                    <label for="owner-phone" class="text-gray-500 text-sm">No. Telp Pemilik</label>
                                    <input type="text" id="owner-phone"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2"
                                        value="0812-3456-7890">
                                </div>
                                <div>
                                    <label for="clinic-email" class="text-gray-500 text-sm">Email</label>
                                    <input type="email" id="clinic-email"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2"
                                        value="vetlink@gmail.com">
                                </div>
                                <div class="col-span-4 flex justify-end">
                                    <button type="button" id="save-button"
                                        class="bg-primary text-white px-4 py-2 rounded-lg shadow-lg hover:bg-primary-dark">Save</button>
                                    <button type="button" id="cancel-button"
                                        class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg shadow-lg hover:bg-gray-400 ml-4">Cancel</button>
                                </div>
                            </form>
                        </div>


                        <!-- Invoice History Section -->
                        <div class="mt-6">
                            <h3 class="text-lg font-bold text-gray-700 mb-4">Riwayat Pembayaran (Invoice)</h3>
                            <div class="overflow-x-auto">
                                <table class="min-w-full bg-white border rounded-lg shadow-md">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-600 uppercase">
                                                Invoice</th>
                                            <th
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-600 uppercase">
                                                Tanggal</th>
                                            <th
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-600 uppercase">
                                                Deskripsi</th>
                                            <th
                                                class="px-6 py-3 text-left text-sm font-medium text-gray-600 uppercase">
                                                Jumlah</th>
                                            <th
                                                class="px-6 py-3 text-center text-sm font-medium text-gray-600 uppercase">
                                                Status</th>
                                            <th
                                                class="px-6 py-3 text-center text-sm font-medium text-gray-600 uppercase">
                                                Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="px-6 py-4 text-sm text-gray-700">003</td>
                                            <td class="px-6 py-4 text-sm text-gray-700">28 Maret 2024</td>
                                            <td class="px-6 py-4 text-sm text-gray-700">Langganan Tahunan</td>
                                            <td class="px-6 py-4 text-sm text-left text-gray-700">Rp. 1.000.000</td>
                                            <td class="px-6 py-4 text-sm text-center">
                                                <span
                                                    class="text-green-600 font-medium bg-green-100 px-4 py-1 rounded-full">Paid</span>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-center">
                                                <a href="/invoice/123"
                                                    class="text-primary font-medium hover:underline">Lihat Invoice</a>
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-50">
                                            <td class="px-6 py-4 text-sm text-gray-700">002</td>
                                            <td class="px-6 py-4 text-sm text-gray-700">20 Febuari 2024</td>
                                            <td class="px-6 py-4 text-sm text-gray-700">Langganan Bulanan</td>
                                            <td class="px-6 py-4 text-sm text-left text-gray-700">Rp. 300.000</td>
                                            <td class="px-6 py-4 text-sm text-center">
                                                <span
                                                    class="text-green-600 font-medium bg-green-100 px-4 py-1 rounded-full">Paid</span>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-center">
                                                <a href="/invoice/456"
                                                    class="text-primary font-medium hover:underline">Lihat Invoice</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-4 text-sm text-gray-700">001</td>
                                            <td class="px-6 py-4 text-sm text-gray-700">01 Februari 2024</td>
                                            <td class="px-6 py-4 text-sm text-gray-700">Langganan Bulanan</td>
                                            <td class="px-6 py-4 text-sm text-left text-gray-700">Rp. 300.000</td>
                                            <td class="px-6 py-4 text-sm text-center">
                                                <span
                                                    class="text-red-600 font-medium bg-red-100 px-4 py-1 rounded-full">Fail</span>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-center">
                                                <a href="/invoice/789"
                                                    class="text-primary font-medium hover:underline">Lihat Invoice</a>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </main>
        </div>
    </div>
</body>


</html>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Mendapatkan elemen-elemen DOM
        const editButton = document.getElementById("edit-button");
        const editLink = document.getElementById("edit-link");
        const billingInfo = document.getElementById("billing-info");
        const billingForm = document.getElementById("billing-form");
        const saveButton = document.getElementById("save-button");
        const cancelButton = document.getElementById("cancel-button");

        const clinicNameView = document.getElementById("clinic-name-view");
        const ownerNameView = document.getElementById("owner-name-view");
        const ownerPhoneView = document.getElementById("owner-phone-view");
        const clinicEmailView = document.getElementById("clinic-email-view");

        const clinicNameInput = document.getElementById("clinic-name");
        const ownerNameInput = document.getElementById("owner-name");
        const ownerPhoneInput = document.getElementById("owner-phone");
        const clinicEmailInput = document.getElementById("clinic-email");

        // Helper function untuk mengatur visibilitas
        const toggleVisibility = (showForm) => {
            if (showForm) {
                billingInfo.classList.add("hidden");
                billingForm.classList.remove("hidden");
            } else {
                billingForm.classList.add("hidden");
                billingInfo.classList.remove("hidden");
            }
        };

        // Fungsi saat tombol Edit atau link Edit diklik
        const handleEditClick = (event) => {
            event.preventDefault(); // Mencegah perilaku default untuk link
            toggleVisibility(true);
        };

        // Menambahkan event listener pada tombol Edit dan link Edit
        if (editButton) editButton.addEventListener("click", handleEditClick);
        if (editLink) editLink.addEventListener("click", handleEditClick);

        // Fungsi untuk menyimpan data
        const handleSaveClick = () => {
            // Validasi sederhana
            if (
                !clinicNameInput.value.trim() ||
                !ownerNameInput.value.trim() ||
                !ownerPhoneInput.value.trim() ||
                !clinicEmailInput.value.trim()
            ) {
                alert("Semua kolom wajib diisi!");
                return;
            }

            // Memperbarui tampilan dengan nilai input
            clinicNameView.textContent = clinicNameInput.value;
            ownerNameView.textContent = ownerNameInput.value;
            ownerPhoneView.textContent = ownerPhoneInput.value;
            clinicEmailView.textContent = clinicEmailInput.value;

            toggleVisibility(false);
            alert("Informasi billing berhasil disimpan!");
        };

        // Fungsi untuk membatalkan perubahan
        const handleCancelClick = () => {
            // Mengembalikan input ke nilai saat ini pada tampilan
            clinicNameInput.value = clinicNameView.textContent;
            ownerNameInput.value = ownerNameView.textContent;
            ownerPhoneInput.value = ownerPhoneView.textContent;
            clinicEmailInput.value = clinicEmailView.textContent;

            toggleVisibility(false);
        };

        // Menambahkan event listener pada tombol Save dan Cancel
        if (saveButton) saveButton.addEventListener("click", handleSaveClick);
        if (cancelButton) cancelButton.addEventListener("click", handleCancelClick);
    });
</script>
