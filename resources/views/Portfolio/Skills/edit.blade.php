<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Skill</title>

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
                Skills
            </p>

            <h2 class="text-3xl font-bold">
                Edit Skill
            </h2>

            <p class="text-gray-500 mt-2">
                Update the information for this skill.
            </p>
        </div>

        <!-- Form Card -->
        <div class="border border-gray-200 rounded-xl p-8">

            <form action="{{ route('portfolio.skills.update', $skill->id) }}"
                  method="POST"
                  class="space-y-6">

                @csrf
                @method('PUT')

                <!-- Skill Name -->
                <div>
                    <label for="skill_name"
                           class="block text-sm font-semibold mb-2">
                        Skill Name
                    </label>

                    <input
                        type="text"
                        name="skill_name"
                        id="skill_name"
                        value="{{ old('skill_name', $skill->skill_name) }}"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-black
                               focus:border-black transition"
                        placeholder="e.g. JavaScript"
                    >

                    @error('skill_name')
                        <p class="text-sm text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Skill Category -->
                <div>
                    <label for="skill_category"
                           class="block text-sm font-semibold mb-2">
                        Skill Category
                    </label>

                    <input
                        type="text"
                        name="skill_category"
                        id="skill_category"
                        value="{{ old('skill_category', $skill->skill_category) }}"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-black
                               focus:border-black transition"
                        placeholder="e.g. Programming Language"
                    >

                    @error('skill_category')
                        <p class="text-sm text-red-600 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Proficiency Level -->
                <div>
                    <label for="proficiency_level"
                           class="block text-sm font-semibold mb-2">
                        Proficiency Level
                    </label>

                    <select
                        name="proficiency_level"
                        id="proficiency_level"
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg
                               bg-white
                               focus:outline-none focus:ring-2 focus:ring-black
                               focus:border-black transition"
                    >
                        <option value="">Select proficiency level</option>

                        <option value="Beginner"
                            {{ old('proficiency_level', $skill->proficiency_level) == 'Beginner' ? 'selected' : '' }}>
                            Beginner
                        </option>

                        <option value="Intermediate"
                            {{ old('proficiency_level', $skill->proficiency_level) == 'Intermediate' ? 'selected' : '' }}>
                            Intermediate
                        </option>

                        <option value="Advanced"
                            {{ old('proficiency_level', $skill->proficiency_level) == 'Advanced' ? 'selected' : '' }}>
                            Advanced
                        </option>

                        <option value="Expert"
                            {{ old('proficiency_level', $skill->proficiency_level) == 'Expert' ? 'selected' : '' }}>
                            Expert
                        </option>
                    </select>

                    @error('proficiency_level')
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
                        Update Skill
                    </button>

                </div>

            </form>
        </div>

        <!-- Footer Note -->
        <p class="text-sm text-gray-400 mt-6">
            Make sure the skill information is accurate before updating.
        </p>

    </main>

</body>
</html>
```
