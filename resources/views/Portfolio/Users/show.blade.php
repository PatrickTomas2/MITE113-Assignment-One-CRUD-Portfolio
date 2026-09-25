<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $user->name }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-black">

    <nav class="sticky top-0 z-50 border-b border-gray-200 bg-white">

        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">

            <div>

                <h1 class="text-xl font-bold tracking-tight">
                    MY PORTFOLIO
                </h1>

                <p class="mt-1 text-xs text-gray-500">
                    Portfolio Management
                </p>

            </div>

            <a href="{{ route('portfolio.users.index') }}"
                class="text-sm font-medium text-gray-600 transition hover:text-black">
                ← Back to Users
            </a>

        </div>

    </nav>

    <main class="mx-auto max-w-7xl px-6 py-12">

        <div class="mb-12 flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">

            <div>

                <p class="mb-2 text-sm font-medium uppercase tracking-widest text-gray-500">
                    User
                </p>

                <h2 class="text-4xl font-bold tracking-tight">
                    {{ $user->name }}
                </h2>

                <p class="mt-3 text-gray-500">
                    {{ $user->email }}
                </p>

            </div>

            <a href="{{ route('portfolio.users.edit', $user->id) }}"
                class="inline-flex items-center justify-center
                       border border-gray-300 px-5 py-2.5 text-sm font-medium
                       transition hover:bg-black hover:text-white">
                Edit User
            </a>

        </div>

        <section class="mb-10 border border-gray-200 bg-white">

            <div class="border-b border-gray-200 px-6 py-6">

                <h3 class="text-xl font-semibold">
                    Profile
                </h3>

            </div>

            <div class="p-6">

                @if ($user->profile)

                    <div class="grid grid-cols-1 gap-x-12 gap-y-8 md:grid-cols-2">

                        <div>

                            <p class="text-xs font-semibold uppercase
                                      tracking-widest text-gray-400">
                                Professional Title
                            </p>

                            <p class="mt-2 text-base font-medium">
                                {{ $user->profile->professional_title }}
                            </p>

                        </div>

                        <div>

                            <p class="text-xs font-semibold uppercase
                                      tracking-widest text-gray-400">
                                Email
                            </p>

                            <p class="mt-2 text-base">
                                {{ $user->profile->email }}
                            </p>

                        </div>

                        <div>

                            <p class="text-xs font-semibold uppercase
                                      tracking-widest text-gray-400">
                                Phone Number
                            </p>

                            <p class="mt-2 text-base">
                                {{ $user->profile->phone_number }}
                            </p>

                        </div>

                        <div>

                            <p class="text-xs font-semibold uppercase
                                      tracking-widest text-gray-400">
                                Address
                            </p>

                            <p class="mt-2 text-base">
                                {{ $user->profile->address }}
                            </p>

                        </div>

                        <div class="md:col-span-2">

                            <p class="text-xs font-semibold uppercase
                                      tracking-widest text-gray-400">
                                Short Introduction
                            </p>

                            <p class="mt-2 max-w-4xl leading-7 text-gray-700">
                                {{ $user->profile->short_introduction }}
                            </p>

                        </div>

                    </div>

                @else

                    <p class="py-8 text-center text-sm text-gray-500">
                        This user has no profile yet.
                    </p>

                @endif

            </div>

        </section>

        <section class="mb-10 border border-gray-200 bg-white">

            <div class="border-b border-gray-200 px-6 py-6">

                <h3 class="text-xl font-semibold">
                    Skills
                </h3>

            </div>

            <div class="divide-y divide-gray-100">

                @forelse ($user->skills as $skill)

                    <div class="flex items-center justify-between px-6 py-4 text-sm">

                        <span class="font-medium">{{ $skill->skill_name }}</span>

                        <span class="text-gray-500">{{ $skill->skill_category }} · {{ $skill->proficiency_level }}</span>

                    </div>

                @empty

                    <p class="py-8 text-center text-sm text-gray-500">
                        No skills yet.
                    </p>

                @endforelse

            </div>

        </section>

        <section class="mb-10 border border-gray-200 bg-white">

            <div class="border-b border-gray-200 px-6 py-6">

                <h3 class="text-xl font-semibold">
                    Projects
                </h3>

            </div>

            <div class="divide-y divide-gray-100">

                @forelse ($user->projects as $project)

                    <div class="px-6 py-4 text-sm">

                        <p class="font-medium">{{ $project->project_name }}</p>

                        <p class="mt-1 text-gray-600">{{ $project->project_description }}</p>

                        <p class="mt-1 text-gray-500">{{ $project->category }} · {{ $project->technologies_used }}</p>

                    </div>

                @empty

                    <p class="py-8 text-center text-sm text-gray-500">
                        No projects yet.
                    </p>

                @endforelse

            </div>

        </section>

        <section class="mb-10 border border-gray-200 bg-white">

            <div class="border-b border-gray-200 px-6 py-6">

                <h3 class="text-xl font-semibold">
                    Education
                </h3>

            </div>

            <div class="divide-y divide-gray-100">

                @forelse ($user->education as $edu)

                    <div class="flex items-center justify-between px-6 py-4 text-sm">

                        <div>

                            <p class="font-medium">{{ $edu->school_name }}</p>

                            <p class="mt-1 text-gray-600">{{ $edu->degree }} · {{ $edu->major }}</p>

                        </div>

                        <span class="text-gray-500">{{ $edu->start_date }} – {{ $edu->end_date }}</span>

                    </div>

                @empty

                    <p class="py-8 text-center text-sm text-gray-500">
                        No education entries yet.
                    </p>

                @endforelse

            </div>

        </section>

        <footer class="border-t border-gray-200 py-8 text-center">

            <p class="text-sm text-gray-400">
                Portfolio Management System
            </p>

        </footer>

    </main>

</body>

</html>
