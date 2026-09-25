<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-black min-h-screen">

    <header class="border-b border-gray-200">
        <div class="max-w-4xl mx-auto px-6 py-5 flex items-center justify-between">
            <h1 class="text-lg font-bold tracking-wide">
                MY PORTFOLIO
            </h1>
        </div>
    </header>

    <main class="max-w-md mx-auto px-6 py-12">

        <div class="mb-8">
            <p class="text-sm text-gray-500 uppercase tracking-widest mb-2">
                Account
            </p>

            <h2 class="text-3xl font-bold">
                Login
            </h2>

            <p class="text-gray-500 mt-2">
                Sign in to manage your portfolio.
            </p>
        </div>

        <div class="border border-gray-200 rounded-xl p-8">

            <form action="{{ route('login.store') }}"
                  method="POST"
                  class="space-y-6">

                @csrf

                <div>
                    <label for="email"
                           class="block text-sm font-semibold mb-2">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-black
                               focus:border-black transition"
                        placeholder="e.g. juan@example.com"
                    >

                    @error('email')
                        <p class="text-sm text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label for="password"
                           class="block text-sm font-semibold mb-2">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        id="password"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-black
                               focus:border-black transition"
                    >

                    @error('password')
                        <p class="text-sm text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="pt-4">
                    <button
                        type="submit"
                        class="w-full px-5 py-3 bg-black text-white rounded-lg
                               text-sm font-medium
                               hover:bg-gray-800 transition">
                        Login
                    </button>
                </div>

            </form>
        </div>

    </main>

</body>
</html>
