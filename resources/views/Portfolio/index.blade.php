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
</body>
</html>