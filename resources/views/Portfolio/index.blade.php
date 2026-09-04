<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
</head>
<body>
    <h1>My Portfolio</h1>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <hr>

    <h2>Personal Information</h2>
    <a href="{{ route('portfolio.personal-information.create') }}">Add Personal Information</a>

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

    <hr>
    <h2>Projects</h2>
    <a href="{{ route('portfolio.projects.create') }}">Add Project</a>
    <table border="1">
        <thead>
            <tr>
                <th>Project Name</th>
                <th>Project Description</th>
                <th>Category</th>
                <th>Technologies Used</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project)
                <tr>
                    <td>{{ $project->project_name }}</td>
                    <td>{{ $project->project_description }}</td>
                    <td>{{ $project->category }}</td>
                    <td>{{ $project->technologies_used }}</td>
                    <td>
                        <a href="{{ route('portfolio.projects.edit', $project->id) }}">Edit</a>
                        <form action="{{ route('portfolio.projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No projects available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <hr>
    <h2>Education</h2>
    <a href="{{ route('portfolio.educations.create') }}">Add Education</a>
    <table border="1">
        <thead>
            <tr>
                <th>School Name</th>
                <th>Degree</th>
                <th>Major</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($education as $edu)
                <tr>
                    <td>{{ $edu->school_name }}</td>
                    <td>{{ $edu->degree }}</td>
                    <td>{{ $edu->major }}</td>
                    <td>{{ $edu->start_date }}</td>
                    <td>{{ $edu->end_date }}</td>
                    <td>
                        <a href="{{ route('portfolio.educations.edit', $edu->id) }}">Edit</a>
                        <form action="{{ route('portfolio.educations.destroy', $edu->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this education entry?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No education entries available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>