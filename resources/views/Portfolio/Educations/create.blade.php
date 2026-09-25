```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Education</title>

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
                Education
            </p>

            <h2 class="text-3xl font-bold">
                Add Education
            </h2>

            <p class="text-gray-500 mt-2">
                Add your educational background to your portfolio.
            </p>

        </div>

        <!-- Form Card -->
        <div class="border border-gray-200 rounded-xl p-8">

            <form action="{{ route('portfolio.educations.store') }}"
                  method="POST"
                  class="space-y-6">

                @csrf

                <!-- School Name -->
                <div>
                    <label for="school_name"
                           class="block text-sm font-semibold mb-2">
                        School Name
                    </label>

                    <input
                        type="text"
                        name="school_name"
                        id="school_name"
                        value="{{ old('school_name') }}"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-black
                               focus:border-black transition"
                        placeholder="e.g. Pangasinan State University"
                    >

                    @error('school_name')
                        <p class="text-sm text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Degree -->
                <div>
                    <label for="degree"
                           class="block text-sm font-semibold mb-2">
                        Degree
                    </label>

                    <input
                        type="text"
                        name="degree"
                        id="degree"
                        value="{{ old('degree') }}"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-black
                               focus:border-black transition"
                        placeholder="e.g. Bachelor of Science in Information Technology"
                    >

                    @error('degree')
                        <p class="text-sm text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Major -->
                <div>
                    <label for="major"
                           class="block text-sm font-semibold mb-2">
                        Major
                    </label>

                    <input
                        type="text"
                        name="major"
                        id="major"
                        value="{{ old('major') }}"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-black
                               focus:border-black transition"
                        placeholder="e.g. Web and Mobile Technologies"
                    >

                    @error('major')
                        <p class="text-sm text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Dates -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Start Date -->
                    <div>
                        <label for="start_date"
                               class="block text-sm font-semibold mb-2">
                            Start Date
                        </label>

                        <input
                            type="date"
                            name="start_date"
                            id="start_date"
                            value="{{ old('start_date') }}"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg
                                   focus:outline-none focus:ring-2 focus:ring-black
                                   focus:border-black transition"
                        >

                        @error('start_date')
                            <p class="text-sm text-red-600 mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- End Date -->
                    <div>
                        <label for="end_date"
                               class="block text-sm font-semibold mb-2">
                            End Date
                        </label>

                        <input
                            type="date"
                            name="end_date"
                            id="end_date"
                            value="{{ old('end_date') }}"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg
                                   focus:outline-none focus:ring-2 focus:ring-black
                                   focus:border-black transition"
                        >

                        @error('end_date')
                            <p class="text-sm text-red-600 mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

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
                        Add Education
                    </button>

                </div>

            </form>

        </div>

        <!-- Footer Note -->
        <p class="text-sm text-gray-400 mt-6">
            Make sure the education information is accurate before submitting.
        </p>

    </main>

</body>
</html>
```
