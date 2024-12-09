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
    <title>VetLink - Clinic Profile</title>
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
                        <h1 class="text-3xl font-semibold mb-2">Clinic Profile</h1>
                        <p class="text-sm font-semibold text-primary">Manage and update your clinic's information.</p>
                    </div>
                </div>

                <!-- Profile Section -->
                <div class="bg-white p-6 rounded-2xl shadow-lg space-y-6">
                    <!-- Upload Photo Section -->
                    <div class="flex flex-col items-center">
                        <div class="relative w-32 h-32 border-4 border-primary rounded-full overflow-hidden">
                            <img id="clinic-logo" src="{{ asset('images/profile.png') }}" alt="Clinic Logo"
                                class="w-full h-full object-cover">
                            <label id="change-logo-label"
                                class="absolute inset-0 bg-black bg-opacity-50 text-white flex items-center justify-center opacity-0 hover:opacity-100 cursor-pointer transition hidden">
                                Change Logo
                                <input type="file" id="change-logo" class="hidden" accept="image/*">
                            </label>
                        </div>
                        <p class="text-sm text-primary font-semibold mt-2">VetLink Clinic</p>
                    </div>

                    <!-- Clinic Information -->
                    <form id="clinic-form" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-4">
                                <div>
                                    <label for="owner-name" class="block text-sm font-semibold text-gray-700">
                                        Owner Name
                                    </label>
                                    <input type="text" id="owner-name" name="owner-name" value="Gils"
                                        placeholder="Enter owner's name"
                                        class="w-full bg-bgprimary border-bgprimary rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary"
                                        disabled required>
                                </div>
                                <div>
                                    <label for="clinic-phone" class="block text-sm font-semibold text-gray-700">
                                        Phone Number
                                    </label>
                                    <input type="text" id="clinic-phone" name="clinic-phone" value="0812-3456-7890"
                                        placeholder="Enter phone number"
                                        class="w-full bg-bgprimary border-bgprimary rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary"
                                        disabled required>
                                </div>
                                <div>
                                    <label for="clinic-hours" class="block text-sm font-semibold text-gray-700">
                                        Operating Hours
                                    </label>
                                    <input type="text" id="clinic-hours" name="clinic-hours"
                                        value="Mon - Sat: 9 AM - 6 PM" placeholder="Enter operating hours"
                                        class="w-full bg-bgprimary border-bgprimary rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary"
                                        disabled required>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div>
                                    <label for="clinic-address" class="block text-sm font-semibold text-gray-700">
                                        Address
                                    </label>
                                    <textarea id="clinic-address" name="clinic-address" rows="4" placeholder="Enter address"
                                        class="w-full bg-bgprimary border-bgprimary rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary"
                                        disabled required>Yogyakarta</textarea>
                                </div>
                                <div>
                                    <label for="clinic-email" class="block text-sm font-semibold text-gray-700">
                                        Email Address
                                    </label>
                                    <input type="email" id="clinic-email" name="clinic-email"
                                        value="vetlink@gmail.com" placeholder="Enter email address"
                                        class="w-full bg-bgprimary border-bgprimary rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary"
                                        disabled required>
                                </div>
                            </div>
                        </div>

                        <!-- Change Password Section -->
                        <div class="space-y-4 hidden" id="password-section">
                            <div>
                                <label for="new-password" class="block text-sm font-semibold text-gray-700">
                                    New Password
                                </label>
                                <input type="password" id="new-password" name="new-password"
                                    placeholder="Enter new password"
                                    class="w-full border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary">
                            </div>
                            <div>
                                <label for="confirm-password" class="block text-sm font-semibold text-gray-700">
                                    Confirm Password *
                                </label>
                                <input type="password" id="confirm-password" name="confirm-password"
                                    placeholder="Confirm new password"
                                    class="w-full border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary">
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex justify-end gap-4">
                            <button id="cancel-button" type="button"
                                class="border-2 border-primary bg-white text-primary rounded-lg px-4 py-2 shadow-lg hover:-translate-y-1 transform transition duration-300 hidden">
                                Cancel
                            </button>
                            <button id="edit-button" type="button"
                                class="border-2 border-primary bg-primary text-white rounded-lg px-4 py-2 shadow-lg hover:-translate-y-1 transform transition duration-300">
                                Edit
                            </button>
                            <button id="save-button" type="submit"
                                class="border-2 border-primary bg-primary text-white rounded-lg px-4 py-2 shadow-lg hover:-translate-y-1 transform transition duration-300 hidden">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>

</body>


<script>
    const editButton = document.getElementById("edit-button");
    const saveButton = document.getElementById("save-button");
    const cancelButton = document.getElementById("cancel-button");
    const changeLogoLabel = document.getElementById("change-logo-label");
    const passwordSection = document.getElementById("password-section");
    const formFields = document.querySelectorAll("#clinic-form input, #clinic-form textarea");

    editButton.addEventListener("click", () => {
        formFields.forEach(field => field.disabled = false);
        saveButton.classList.remove("hidden");
        cancelButton.classList.remove("hidden");
        passwordSection.classList.remove("hidden");
        editButton.classList.add("hidden");
        changeLogoLabel.classList.remove("hidden");
    });

    cancelButton.addEventListener("click", () => {
        formFields.forEach(field => field.disabled = true);
        saveButton.classList.add("hidden");
        cancelButton.classList.add("hidden");
        passwordSection.classList.add("hidden");
        editButton.classList.remove("hidden");
        changeLogoLabel.classList.add("hidden");
    });

    document.getElementById("change-logo").addEventListener("change", function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById("clinic-logo").src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
</script>

</html>
