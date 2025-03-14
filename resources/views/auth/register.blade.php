<div id="registerModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden flex items-center justify-center z-50 modal-background">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md relative">
        <button onclick="closeModal('registerModal')" class="absolute top-2 right-3 text-gray-600 hover:text-gray-900 text-lg">&times;</button>
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input id="name" type="text" name="name" required class="block mt-1 w-full p-2 border border-gray-300 rounded-md">
            </div>

            <!-- Email -->
            <div class="mt-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" name="email" required class="block mt-1 w-full p-2 border border-gray-300 rounded-md">
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" type="password" name="password" required class="block mt-1 w-full p-2 border border-gray-300 rounded-md">
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required class="block mt-1 w-full p-2 border border-gray-300 rounded-md">
            </div>

            <div class="flex items-center justify-between mt-4">
                <!-- Menggunakan onclick untuk berpindah modal -->
                <button type="button" onclick="closeModal('registerModal'); openModal('loginModal')" class="text-sm text-blue-600 hover:underline">
                    Already registered?
                </button>
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Register</button>
            </div>
        </form>
    </div>
</div>