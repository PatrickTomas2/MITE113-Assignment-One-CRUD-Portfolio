<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Portfolio</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-black">

    {{-- NAVIGATION --}}
    <nav class="sticky top-0 z-50 border-b border-gray-200 bg-white">

        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">

            {{-- LOGO / TITLE --}}
            <div>

                <h1 class="text-xl font-bold tracking-tight">
                    MY PORTFOLIO
                </h1>

                <p class="mt-1 text-xs text-gray-500">
                    Portfolio Management
                </p>

            </div>


            {{-- NAVIGATION LINKS --}}
            <div class="hidden items-center gap-8 text-sm md:flex">

                <a href="#personal-information"
                    class="font-medium text-gray-600 transition hover:text-black">
                    Personal Information
                </a>

                <a href="#skills"
                    class="font-medium text-gray-600 transition hover:text-black">
                    Skills
                </a>

                <a href="#projects"
                    class="font-medium text-gray-600 transition hover:text-black">
                    Projects
                </a>

                <a href="#education"
                    class="font-medium text-gray-600 transition hover:text-black">
                    Education
                </a>

            </div>

        </div>

    </nav>


    {{-- MAIN --}}
    <main class="mx-auto max-w-7xl px-6 py-12">


        {{-- PAGE HEADER --}}
        <div class="mb-12">

            <p class="mb-2 text-sm font-medium uppercase tracking-widest text-gray-500">
                Dashboard
            </p>

            <h2 class="text-4xl font-bold tracking-tight">
                Portfolio Information
            </h2>

            <p class="mt-3 max-w-2xl text-gray-500">
                Manage the information displayed on your personal portfolio.
            </p>

        </div>


        {{-- SUCCESS MESSAGE --}}
        @if (session('success'))

            <div class="mb-8 flex items-center justify-between
                        border border-gray-300 bg-gray-50
                        px-5 py-4">

                <div class="flex items-center gap-3">

                    <span class="flex h-7 w-7 items-center justify-center
                                 rounded-full bg-black text-sm text-white">
                        ✓
                    </span>

                    <p class="text-sm font-medium">
                        {{ session('success') }}
                    </p>

                </div>

                <button
                    onclick="this.parentElement.remove()"
                    class="text-xl text-gray-500 hover:text-black">

                    &times;

                </button>

            </div>

        @endif


        {{-- PERSONAL INFORMATION --}}
        <section id="personal-information"
            class="mb-10 border border-gray-200 bg-white">

            {{-- SECTION HEADER --}}
            <div class="flex flex-col gap-5 border-b border-gray-200
                        px-6 py-6 sm:flex-row sm:items-center
                        sm:justify-between">

                <div>

                    <div class="mb-2 flex items-center gap-3">

                        <span class="flex h-9 w-9 items-center justify-center
                                     rounded-full bg-black text-sm text-white">
                            01
                        </span>

                        <h3 class="text-xl font-semibold">
                            Personal Information
                        </h3>

                    </div>

                    <p class="text-sm text-gray-500">
                        Your basic and professional information.
                    </p>

                </div>


                <a href="{{ route('portfolio.personal-information.create') }}"
                    class="inline-flex items-center justify-center
                           bg-black px-5 py-2.5 text-sm font-medium
                           text-white transition hover:bg-gray-800">

                    <span class="mr-2 text-lg">+</span>
                    Add Information

                </a>

            </div>


            {{-- SECTION CONTENT --}}
            <div class="p-6">

                @forelse ($personalInformation as $info)

                    <div class="grid grid-cols-1 gap-x-12 gap-y-8 md:grid-cols-2">

                        <div>

                            <p class="text-xs font-semibold uppercase
                                      tracking-widest text-gray-400">
                                Name
                            </p>

                            <p class="mt-2 text-base font-medium">
                                {{ $info->name }}
                            </p>

                        </div>


                        <div>

                            <p class="text-xs font-semibold uppercase
                                      tracking-widest text-gray-400">
                                Professional Title
                            </p>

                            <p class="mt-2 text-base font-medium">
                                {{ $info->professional_title }}
                            </p>

                        </div>


                        <div>

                            <p class="text-xs font-semibold uppercase
                                      tracking-widest text-gray-400">
                                Email
                            </p>

                            <p class="mt-2 text-base">
                                {{ $info->email }}
                            </p>

                        </div>


                        <div>

                            <p class="text-xs font-semibold uppercase
                                      tracking-widest text-gray-400">
                                Phone Number
                            </p>

                            <p class="mt-2 text-base">
                                {{ $info->phone_number }}
                            </p>

                        </div>


                        <div>

                            <p class="text-xs font-semibold uppercase
                                      tracking-widest text-gray-400">
                                Address
                            </p>

                            <p class="mt-2 text-base">
                                {{ $info->address }}
                            </p>

                        </div>


                        <div class="md:col-span-2">

                            <p class="text-xs font-semibold uppercase
                                      tracking-widest text-gray-400">
                                Short Introduction
                            </p>

                            <p class="mt-2 max-w-4xl leading-7 text-gray-700">
                                {{ $info->short_introduction }}
                            </p>

                        </div>

                    </div>

                @empty

                    <div class="py-14 text-center">

                        <div class="mx-auto mb-5 flex h-14 w-14
                                    items-center justify-center
                                    border border-gray-200
                                    text-xl">
                            +
                        </div>

                        <h4 class="font-semibold">
                            No Personal Information
                        </h4>

                        <p class="mt-2 text-sm text-gray-500">
                            Add your personal information to get started.
                        </p>

                    </div>

                @endforelse

            </div>

        </section>


        {{-- SKILLS --}}
        <section id="skills"
            class="mb-10 border border-gray-200 bg-white">

            {{-- HEADER --}}
            <div class="flex flex-col gap-5 border-b border-gray-200
                        px-6 py-6 sm:flex-row sm:items-center
                        sm:justify-between">

                <div>

                    <div class="mb-2 flex items-center gap-3">

                        <span class="flex h-9 w-9 items-center justify-center
                                     rounded-full bg-black text-sm text-white">
                            02
                        </span>

                        <h3 class="text-xl font-semibold">
                            Skills
                        </h3>

                    </div>

                    <p class="text-sm text-gray-500">
                        Manage your technical and professional skills.
                    </p>

                </div>


                <a href="{{ route('portfolio.skills.create') }}"
                    class="inline-flex items-center justify-center
                           bg-black px-5 py-2.5 text-sm font-medium
                           text-white transition hover:bg-gray-800">

                    <span class="mr-2 text-lg">+</span>
                    Add Skill

                </a>

            </div>


            {{-- TABLE --}}
            <div class="overflow-x-auto">

                <table class="w-full text-left text-sm">

                    <thead class="border-b border-gray-200 bg-gray-50">

                        <tr>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                Skill
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                Category
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                Proficiency
                            </th>

                            <th class="px-6 py-4 text-right text-xs
                                       font-semibold uppercase
                                       tracking-widest text-gray-500">
                                Actions
                            </th>

                        </tr>

                    </thead>


                    <tbody class="divide-y divide-gray-100">

                        @forelse ($skills as $skill)

                            <tr class="transition hover:bg-gray-50">

                                <td class="px-6 py-5 font-medium">
                                    {{ $skill->skill_name }}
                                </td>

                                <td class="px-6 py-5">

                                    <span class="border border-gray-300
                                                 px-3 py-1 text-xs
                                                 font-medium">

                                        {{ $skill->skill_category }}

                                    </span>

                                </td>

                                <td class="px-6 py-5">

                                    <span class="bg-black px-3 py-1
                                                 text-xs font-medium text-white">

                                        {{ $skill->proficiency_level }}

                                    </span>

                                </td>

                                <td class="px-6 py-5 text-right">

                                    <a href="{{ route('portfolio.skills.edit', $skill->id) }}"
                                        class="mr-2 inline-flex border
                                               border-gray-300 px-3 py-2
                                               text-xs font-medium
                                               transition hover:bg-black
                                               hover:text-white">

                                        Edit

                                    </a>


                                    <form
                                        action="{{ route('portfolio.skills.destroy', $skill->id) }}"
                                        method="POST"
                                        class="inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this skill?')"
                                            class="inline-flex border
                                                   border-gray-300 px-3 py-2
                                                   text-xs font-medium
                                                   transition hover:bg-black
                                                   hover:text-white">

                                            Delete

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="4"
                                    class="px-6 py-14 text-center">

                                    <p class="font-medium">
                                        No Skills Available
                                    </p>

                                    <p class="mt-2 text-sm text-gray-500">
                                        Add your skills to showcase your expertise.
                                    </p>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </section>


        {{-- PROJECTS --}}
        <section id="projects"
            class="mb-10 border border-gray-200 bg-white">

            {{-- HEADER --}}
            <div class="flex flex-col gap-5 border-b border-gray-200
                        px-6 py-6 sm:flex-row sm:items-center
                        sm:justify-between">

                <div>

                    <div class="mb-2 flex items-center gap-3">

                        <span class="flex h-9 w-9 items-center justify-center
                                     rounded-full bg-black text-sm text-white">
                            03
                        </span>

                        <h3 class="text-xl font-semibold">
                            Projects
                        </h3>

                    </div>

                    <p class="text-sm text-gray-500">
                        Showcase the projects you have worked on.
                    </p>

                </div>


                <a href="{{ route('portfolio.projects.create') }}"
                    class="inline-flex items-center justify-center
                           bg-black px-5 py-2.5 text-sm font-medium
                           text-white transition hover:bg-gray-800">

                    <span class="mr-2 text-lg">+</span>
                    Add Project

                </a>

            </div>


            {{-- TABLE --}}
            <div class="overflow-x-auto">

                <table class="w-full text-left text-sm">

                    <thead class="border-b border-gray-200 bg-gray-50">

                        <tr>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                Project
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                Description
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                Category
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                Technologies
                            </th>

                            <th class="px-6 py-4 text-right text-xs
                                       font-semibold uppercase
                                       tracking-widest text-gray-500">
                                Actions
                            </th>

                        </tr>

                    </thead>


                    <tbody class="divide-y divide-gray-100">

                        @forelse ($projects as $project)

                            <tr class="transition hover:bg-gray-50">

                                <td class="px-6 py-5 font-medium">
                                    {{ $project->project_name }}
                                </td>

                                <td class="max-w-sm px-6 py-5 text-gray-600">
                                    {{ $project->project_description }}
                                </td>

                                <td class="px-6 py-5">

                                    <span class="border border-gray-300
                                                 px-3 py-1 text-xs
                                                 font-medium">

                                        {{ $project->category }}

                                    </span>

                                </td>

                                <td class="px-6 py-5 text-gray-600">
                                    {{ $project->technologies_used }}
                                </td>

                                <td class="whitespace-nowrap px-6 py-5 text-right">

                                    <a href="{{ route('portfolio.projects.edit', $project->id) }}"
                                        class="mr-2 inline-flex border
                                               border-gray-300 px-3 py-2
                                               text-xs font-medium
                                               transition hover:bg-black
                                               hover:text-white">

                                        Edit

                                    </a>


                                    <form
                                        action="{{ route('portfolio.projects.destroy', $project->id) }}"
                                        method="POST"
                                        class="inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this project?')"
                                            class="inline-flex border
                                                   border-gray-300 px-3 py-2
                                                   text-xs font-medium
                                                   transition hover:bg-black
                                                   hover:text-white">

                                            Delete

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="5"
                                    class="px-6 py-14 text-center">

                                    <p class="font-medium">
                                        No Projects Available
                                    </p>

                                    <p class="mt-2 text-sm text-gray-500">
                                        Add your projects to showcase your work.
                                    </p>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </section>


        {{-- EDUCATION --}}
        <section id="education"
            class="mb-10 border border-gray-200 bg-white">

            {{-- HEADER --}}
            <div class="flex flex-col gap-5 border-b border-gray-200
                        px-6 py-6 sm:flex-row sm:items-center
                        sm:justify-between">

                <div>

                    <div class="mb-2 flex items-center gap-3">

                        <span class="flex h-9 w-9 items-center justify-center
                                     rounded-full bg-black text-sm text-white">
                            04
                        </span>

                        <h3 class="text-xl font-semibold">
                            Education
                        </h3>

                    </div>

                    <p class="text-sm text-gray-500">
                        Manage your educational background.
                    </p>

                </div>


                <a href="{{ route('portfolio.educations.create') }}"
                    class="inline-flex items-center justify-center
                           bg-black px-5 py-2.5 text-sm font-medium
                           text-white transition hover:bg-gray-800">

                    <span class="mr-2 text-lg">+</span>
                    Add Education

                </a>

            </div>


            {{-- TABLE --}}
            <div class="overflow-x-auto">

                <table class="w-full text-left text-sm">

                    <thead class="border-b border-gray-200 bg-gray-50">

                        <tr>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                School
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                Degree
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                Major
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                Start Date
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                End Date
                            </th>

                            <th class="px-6 py-4 text-right text-xs
                                       font-semibold uppercase
                                       tracking-widest text-gray-500">
                                Actions
                            </th>

                        </tr>

                    </thead>


                    <tbody class="divide-y divide-gray-100">

                        @forelse ($education as $edu)

                            <tr class="transition hover:bg-gray-50">

                                <td class="px-6 py-5 font-medium">
                                    {{ $edu->school_name }}
                                </td>

                                <td class="px-6 py-5">
                                    {{ $edu->degree }}
                                </td>

                                <td class="px-6 py-5">
                                    {{ $edu->major }}
                                </td>

                                <td class="px-6 py-5 text-gray-600">
                                    {{ $edu->start_date }}
                                </td>

                                <td class="px-6 py-5 text-gray-600">
                                    {{ $edu->end_date }}
                                </td>

                                <td class="whitespace-nowrap px-6 py-5 text-right">

                                    <a href="{{ route('portfolio.educations.edit', $edu->id) }}"
                                        class="mr-2 inline-flex border
                                               border-gray-300 px-3 py-2
                                               text-xs font-medium
                                               transition hover:bg-black
                                               hover:text-white">

                                        Edit

                                    </a>


                                    <form
                                        action="{{ route('portfolio.educations.destroy', $edu->id) }}"
                                        method="POST"
                                        class="inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this education entry?')"
                                            class="inline-flex border
                                                   border-gray-300 px-3 py-2
                                                   text-xs font-medium
                                                   transition hover:bg-black
                                                   hover:text-white">

                                            Delete

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="6"
                                    class="px-6 py-14 text-center">

                                    <p class="font-medium">
                                        No Education Entries
                                    </p>

                                    <p class="mt-2 text-sm text-gray-500">
                                        Add your educational background.
                                    </p>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </section>


        {{-- FOOTER --}}
        <footer class="border-t border-gray-200 py-8 text-center">

            <p class="text-sm text-gray-400">
                Portfolio Management System
            </p>

        </footer>

    </main>

</body>

</html>
```
