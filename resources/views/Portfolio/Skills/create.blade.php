<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Skill | My Portfolio</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-white text-black">

    {{-- HEADER --}}
    <header class="border-b border-gray-200">

        <div class="mx-auto max-w-3xl px-6 py-5">

            <div class="flex items-center justify-between">

                <div>

                    <h1 class="text-xl font-bold tracking-tight">
                        MY PORTFOLIO
                    </h1>

                    <p class="mt-1 text-xs text-gray-500">
                        Portfolio Management
                    </p>

                </div>

                <a href="{{ url()->previous() }}"
                    class="text-sm font-medium text-gray-500
                           transition hover:text-black">

                    ← Back

                </a>

            </div>

        </div>

    </header>


    {{-- MAIN CONTENT --}}
    <main class="mx-auto max-w-3xl px-6 py-12">

        {{-- PAGE HEADER --}}
        <div class="mb-8">

            <p class="mb-2 text-sm font-medium uppercase
                      tracking-widest text-gray-400">
                Skills
            </p>

            <h2 class="text-3xl font-bold tracking-tight">
                Add Skill
            </h2>

            <p class="mt-2 text-gray-500">
                Add a new skill to your portfolio.
            </p>

        </div>


        {{-- FORM CARD --}}
        <div class="border border-gray-200 bg-white">

            <div class="border-b border-gray-200 px-6 py-5">

                <h3 class="font-semibold">
                    Skill Information
                </h3>

                <p class="mt-1 text-sm text-gray-500">
                    Provide the details of your skill below.
                </p>

            </div>


            <form action="{{ route('portfolio.skills.store') }}"
                method="POST"
                class="p-6">

                @csrf


                {{-- SKILL NAME --}}
                <div class="mb-6">

                    <label for="skill_name"
                        class="mb-2 block text-sm font-medium">

                        Skill Name
                        <span class="text-gray-400">*</span>

                    </label>

                    <input
                        type="text"
                        name="skill_name"
                        id="skill_name"
                        value="{{ old('skill_name') }}"
                        placeholder="e.g. Laravel"
                        required
                        class="w-full border border-gray-300
                               bg-white px-4 py-3 text-sm
                               outline-none transition
                               placeholder:text-gray-400
                               focus:border-black focus:ring-1
                               focus:ring-black">

                    @error('skill_name')

                        <p class="mt-2 text-sm text-gray-600">
                            {{ $message }}
                        </p>

                    @enderror

                </div>


                {{-- SKILL CATEGORY --}}
                <div class="mb-6">

                    <label for="skill_category"
                        class="mb-2 block text-sm font-medium">

                        Skill Category
                        <span class="text-gray-400">*</span>

                    </label>

                    <input
                        type="text"
                        name="skill_category"
                        id="skill_category"
                        value="{{ old('skill_category') }}"
                        placeholder="e.g. Programming Language"
                        required
                        class="w-full border border-gray-300
                               bg-white px-4 py-3 text-sm
                               outline-none transition
                               placeholder:text-gray-400
                               focus:border-black focus:ring-1
                               focus:ring-black">

                    @error('skill_category')

                        <p class="mt-2 text-sm text-gray-600">
                            {{ $message }}
                        </p>

                    @enderror

                </div>


                {{-- PROFICIENCY LEVEL --}}
                <div class="mb-8">

                    <label for="proficiency_level"
                        class="mb-2 block text-sm font-medium">

                        Proficiency Level
                        <span class="text-gray-400">*</span>

                    </label>

                    <select
                        name="proficiency_level"
                        id="proficiency_level"
                        required
                        class="w-full border border-gray-300
                               bg-white px-4 py-3 text-sm
                               outline-none transition
                               focus:border-black focus:ring-1
                               focus:ring-black">

                        <option value="" disabled
                            {{ old('proficiency_level') ? '' : 'selected' }}>
                            Select proficiency level
                        </option>

                        <option value="Beginner"
                            {{ old('proficiency_level') == 'Beginner' ? 'selected' : '' }}>
                            Beginner
                        </option>

                        <option value="Intermediate"
                            {{ old('proficiency_level') == 'Intermediate' ? 'selected' : '' }}>
                            Intermediate
                        </option>

                        <option value="Advanced"
                            {{ old('proficiency_level') == 'Advanced' ? 'selected' : '' }}>
                            Advanced
                        </option>

                        <option value="Expert"
                            {{ old('proficiency_level') == 'Expert' ? 'selected' : '' }}>
                            Expert
                        </option>

                    </select>

                    @error('proficiency_level')

                        <p class="mt-2 text-sm text-gray-600">
                            {{ $message }}
                        </p>

                    @enderror

                </div>


                {{-- FORM ACTIONS --}}
                <div class="flex flex-col-reverse gap-3
                            border-t border-gray-200 pt-6
                            sm:flex-row sm:justify-end">

                    <a href="{{ url()->previous() }}"
                        class="inline-flex items-center justify-center
                               border border-gray-300 px-5 py-2.5
                               text-sm font-medium
                               transition hover:bg-gray-100">

                        Cancel

                    </a>


                    <button type="submit"
                        class="inline-flex items-center justify-center
                               bg-black px-5 py-2.5
                               text-sm font-medium text-white
                               transition hover:bg-gray-800">

                        Add Skill

                    </button>

                </div>

            </form>

        </div>


        {{-- FOOTER --}}
        <div class="mt-8 text-center">

            <p class="text-xs text-gray-400">
                All fields marked with * are required.
            </p>

        </div>

    </main>

</body>

</html>
```
