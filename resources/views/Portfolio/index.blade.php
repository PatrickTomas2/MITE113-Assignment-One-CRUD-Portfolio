<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
</head>
<body>
    <h1>My Portfolio</h1>
    <hr>

    <h2>Personal Information</h2>
    <a href="{{ route('portfolio.personal-information.create') }}">Add Personal Information</a>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <ul>
        @forelse ($personalInformation as $info)
            <li>
                <strong>Name:</strong> {{ $info->name }}<br>
                <strong>Email:</strong> {{ $info->email }}<br>
                <strong>Professional Title:</strong> {{ $info->professional_title }}<br>
                <strong>Short Introduction:</strong> {{ $info->short_introduction }}<br>
                <strong>Phone Number:</strong> {{ $info->phone_number }}<br>
                <strong>Address:</strong> {{ $info->address }}<br>
            </li>
        @empty
            <li>No personal information available.</li>
        @endforelse
    </ul>

    <hr>
    <h2>Skills</h2>
    <a href="{{ route('portfolio.skills.create') }}">Add Skills</a>
    <table border="1">
        <thead>
            <tr>
                <th>Skill Name</th>
                <th>Skill Category</th>
                <th>Proficiency Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($skills as $skill)
                <tr>
                    <td>{{ $skill->skill_name }}</td>
                    <td>{{ $skill->skill_category }}</td>
                    <td>{{ $skill->proficiency_level }}</td>
                    <td>
                        <a href="{{ route('portfolio.skills.edit', $skill->id) }}">Edit</a>
                        <form action="{{ route('portfolio.skills.destroy', $skill->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this skill?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No skills available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>