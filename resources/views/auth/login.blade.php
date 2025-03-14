<div id="loginModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden flex items-center justify-center z-50 modal-background">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md relative">
        <!-- Close Button -->
        <button onclick="closeModal('loginModal')" class="absolute top-2 right-3 text-gray-600 hover:text-gray-900 text-lg">
            &times;
        </button>

        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" name="email" required class="block mt-1 w-full p-2 border border-gray-300 rounded-md">
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" type="password" name="password" required class="block mt-1 w-full p-2 border border-gray-300 rounded-md">
            </div>

            <!-- Forgot Password & Login Button -->
            <div class="flex items-center justify-between mt-4">
                <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Login</button>
            </div>
        </form>

        <!-- Register Link -->
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">
                Don't have an account?
                <button type="button" onclick="closeModal('loginModal'); openModal('registerModal')" class="text-sm text-blue-600 hover:underline">
                    Sign up here
                </button>
            </p>
        </div>
    </div>
</div>