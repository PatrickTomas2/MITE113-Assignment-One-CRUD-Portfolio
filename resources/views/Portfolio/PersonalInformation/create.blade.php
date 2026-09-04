<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Personal Information</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-black min-h-screen">

    <!-- Header -->
    <header class="border-b border-gray-200">
        <div class="max-w-4xl mx-auto px-6 py-5 flex items-center justify-between">

            <h1 class="text-lg font-bold tracking-wide">
                MY PORTFOLIO
            </h1>

            <a href="{{ url()->previous() }}"
               class="text-sm text-gray-600 hover:text-black transition">
                ← Back
            </a>

        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-6 py-12">

        <!-- Page Header -->
        <div class="mb-8">

            <p class="text-sm text-gray-500 uppercase tracking-widest mb-2">
                Personal Information
            </p>

            <h2 class="text-3xl font-bold">
                Add Personal Information
            </h2>

            <p class="text-gray-500 mt-2">
                Add your personal and professional information to your portfolio.
            </p>

        </div>

        <!-- Form Card -->
        <div class="border border-gray-200 rounded-xl p-8">

            <form action="{{ route('portfolio.personal-information.store') }}"
                  method="POST"
                  class="space-y-6">

                @csrf

                <!-- Name -->
                <div>
                    <label for="name"
                           class="block text-sm font-semibold mb-2">
                        Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        id="name"
                        value="{{ old('name') }}"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-black
                               focus:border-black transition"
                        placeholder="e.g. Juan Dela Cruz"
                    >

                    @error('name')
                        <p class="text-sm text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Email -->
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

                <!-- Professional Title -->
                <div>
                    <label for="professional_title"
                           class="block text-sm font-semibold mb-2">
                        Professional Title
                    </label>

                    <input
                        type="text"
                        name="professional_title"
                        id="professional_title"
                        value="{{ old('professional_title') }}"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-black
                               focus:border-black transition"
                        placeholder="e.g. Web Developer"
                    >

                    @error('professional_title')
                        <p class="text-sm text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Short Introduction -->
                <div>
                    <label for="short_introduction"
                           class="block text-sm font-semibold mb-2">
                        Short Introduction
                    </label>

                    <textarea
                        name="short_introduction"
                        id="short_introduction"
                        rows="5"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-black
                               focus:border-black transition resize-none"
                        placeholder="Write a short introduction about yourself..."
                    >{{ old('short_introduction') }}</textarea>

                    @error('short_introduction')
                        <p class="text-sm text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Phone Number -->
                <div>
                    <label for="phone_number"
                           class="block text-sm font-semibold mb-2">
                        Phone Number
                    </label>

                    <input
                        type="text"
                        name="phone_number"
                        id="phone_number"
                        value="{{ old('phone_number') }}"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-black
                               focus:border-black transition"
                        placeholder="e.g. 09123456789"
                    >

                    @error('phone_number')
                        <p class="text-sm text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Address -->
                <div>
                    <label for="address"
                           class="block text-sm font-semibold mb-2">
                        Address
                    </label>

                    <input
                        type="text"
                        name="address"
                        id="address"
                        value="{{ old('address') }}"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-black
                               focus:border-black transition"
                        placeholder="e.g. Urdaneta City, Pangasinan"
                    >

                    @error('address')
                        <p class="text-sm text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="pt-4 flex items-center justify-end gap-3">

                    <a href="{{ url()->previous() }}"
                       class="px-5 py-3 border border-gray-300 rounded-lg
                              text-sm font-medium
                              hover:border-black hover:bg-gray-50
                              transition">
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="px-5 py-3 bg-black text-white rounded-lg
                               text-sm font-medium
                               hover:bg-gray-800 transition">
                        Add Information
                    </button>

                </div>

            </form>

        </div>

        <!-- Footer Note -->
        <p class="text-sm text-gray-400 mt-6">
            Make sure your personal information is accurate before submitting.
        </p>

    </main>

</body>
</html>
```
