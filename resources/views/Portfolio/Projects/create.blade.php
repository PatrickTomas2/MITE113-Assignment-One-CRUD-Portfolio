<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Project</title>

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
                Projects
            </p>

            <h2 class="text-3xl font-bold">
                Add Project
            </h2>

            <p class="text-gray-500 mt-2">
                Add a new project to your portfolio.
            </p>

        </div>

        <!-- Form Card -->
        <div class="border border-gray-200 rounded-xl p-8">

            <form action="{{ route('portfolio.projects.store') }}"
                  method="POST"
                  class="space-y-6">

                @csrf

                <!-- Project Name -->
                <div>
                    <label for="project_name"
                           class="block text-sm font-semibold mb-2">
                        Project Name
                    </label>

                    <input
                        type="text"
                        name="project_name"
                        id="project_name"
                        value="{{ old('project_name') }}"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-black
                               focus:border-black transition"
                        placeholder="e.g. Student Management System"
                    >

                    @error('project_name')
                        <p class="text-sm text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Project Description -->
                <div>
                    <label for="project_description"
                           class="block text-sm font-semibold mb-2">
                        Project Description
                    </label>

                    <textarea
                        name="project_description"
                        id="project_description"
                        rows="5"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-black
                               focus:border-black transition resize-none"
                        placeholder="Describe your project..."
                    >{{ old('project_description') }}</textarea>

                    @error('project_description')
                        <p class="text-sm text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Category -->
                <div>
                    <label for="category"
                           class="block text-sm font-semibold mb-2">
                        Category
                    </label>

                    <input
                        type="text"
                        name="category"
                        id="category"
                        value="{{ old('category') }}"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-black
                               focus:border-black transition"
                        placeholder="e.g. Web Application"
                    >

                    @error('category')
                        <p class="text-sm text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Technologies Used -->
                <div>
                    <label for="technologies_used"
                           class="block text-sm font-semibold mb-2">
                        Technologies Used
                    </label>

                    <input
                        type="text"
                        name="technologies_used"
                        id="technologies_used"
                        value="{{ old('technologies_used') }}"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-black
                               focus:border-black transition"
                        placeholder="e.g. Laravel, MySQL, Tailwind CSS"
                    >

                    <p class="text-xs text-gray-400 mt-2">
                        Separate multiple technologies with commas.
                    </p>

                    @error('technologies_used')
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
                        Add Project
                    </button>

                </div>

            </form>

        </div>

        <!-- Footer Note -->
        <p class="text-sm text-gray-400 mt-6">
            Make sure the project information is accurate before submitting.
        </p>

    </main>

</body>
</html>
```
