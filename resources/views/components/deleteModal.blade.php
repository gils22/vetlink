<div id="delete-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg p-6 w-96 shadow-lg transform scale-95 transition-all">
        <h3 class="text-xl font-semibold mb-4 text-center">Delete Confirmation</h3>
        <p class="text-gray-600 text-center mb-6">Are you sure you want to delete?</p>
        <div class="flex justify-between gap-4">
            <button id="cancel-delete"
                class="flex-1 px-4 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 transition">
                Cancel
            </button>
            <button id="confirm-delete"
                class="flex-1 px-4 py-2 bg-primary text-white rounded-lg hover:bg-indigo-500 transition">
                Delete
            </button>
        </div>
    </div>
</div>
