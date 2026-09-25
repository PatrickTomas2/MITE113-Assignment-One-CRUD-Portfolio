<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Users</title>

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

            <a href="{{ route('portfolio.index') }}"
                class="text-sm font-medium text-gray-600 transition hover:text-black">
                ← Back to Portfolio
            </a>

        </div>

    </nav>

    <main class="mx-auto max-w-7xl px-6 py-12">

        <div class="mb-12">

            <p class="mb-2 text-sm font-medium uppercase tracking-widest text-gray-500">
                Dashboard
            </p>

            <h2 class="text-4xl font-bold tracking-tight">
                Users
            </h2>

            <p class="mt-3 max-w-2xl text-gray-500">
                Manage the users and their portfolio profiles.
            </p>

        </div>

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

        <section class="mb-10 border border-gray-200 bg-white">

            <div class="flex flex-col gap-5 border-b border-gray-200
                        px-6 py-6 sm:flex-row sm:items-center
                        sm:justify-between">

                <div>

                    <h3 class="text-xl font-semibold">
                        All Users
                    </h3>

                    <p class="mt-2 text-sm text-gray-500">
                        Each user has one profile and many skills, projects and education entries.
                    </p>

                </div>

                <a href="{{ route('portfolio.users.create') }}"
                    class="inline-flex items-center justify-center
                           bg-black px-5 py-2.5 text-sm font-medium
                           text-white transition hover:bg-gray-800">

                    <span class="mr-2 text-lg">+</span>
                    Add User

                </a>

            </div>

            <div class="overflow-x-auto">

                <table class="w-full text-left text-sm">

                    <thead class="border-b border-gray-200 bg-gray-50">

                        <tr>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                Name
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                Email
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                Profile
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                Skills
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                Projects
                            </th>

                            <th class="px-6 py-4 text-xs font-semibold
                                       uppercase tracking-widest text-gray-500">
                                Education
                            </th>

                            <th class="px-6 py-4 text-right text-xs
                                       font-semibold uppercase
                                       tracking-widest text-gray-500">
                                Actions
                            </th>

                        </tr>

                    </thead>

                    <tbody class="divide-y divide-gray-100">

                        @forelse ($users as $user)

                            <tr class="transition hover:bg-gray-50">

                                <td class="px-6 py-5 font-medium">
                                    {{ $user->name }}
                                </td>

                                <td class="px-6 py-5 text-gray-600">
                                    {{ $user->email }}
                                </td>

                                <td class="px-6 py-5">

                                    <span class="border border-gray-300
                                                 px-3 py-1 text-xs
                                                 font-medium">

                                        {{ $user->profile->professional_title ?? 'No Profile' }}

                                    </span>

                                </td>

                                <td class="px-6 py-5">
                                    {{ $user->skills_count }}
                                </td>

                                <td class="px-6 py-5">
                                    {{ $user->projects_count }}
                                </td>

                                <td class="px-6 py-5">
                                    {{ $user->education_count }}
                                </td>

                                <td class="whitespace-nowrap px-6 py-5 text-right">

                                    <a href="{{ route('portfolio.users.show', $user->id) }}"
                                        class="mr-2 inline-flex border
                                               border-gray-300 px-3 py-2
                                               text-xs font-medium
                                               transition hover:bg-black
                                               hover:text-white">

                                        View

                                    </a>

                                    <a href="{{ route('portfolio.users.edit', $user->id) }}"
                                        class="mr-2 inline-flex border
                                               border-gray-300 px-3 py-2
                                               text-xs font-medium
                                               transition hover:bg-black
                                               hover:text-white">

                                        Edit

                                    </a>

                                    <form
                                        action="{{ route('portfolio.users.destroy', $user->id) }}"
                                        method="POST"
                                        class="inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                            onclick="return confirm('Deleting this user will also delete their profile, skills, projects and education. Continue?')"
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

                                <td colspan="7"
                                    class="px-6 py-14 text-center">

                                    <p class="font-medium">
                                        No Users Available
                                    </p>

                                    <p class="mt-2 text-sm text-gray-500">
                                        Add a user to start building a portfolio.
                                    </p>

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

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
