<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Education</title>
</head>
<body>
    <h1>Edit Education</h1>
    <form action="{{ route('portfolio.educations.update', $education->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="school_name">School Name:</label>
        <input type="text" name="school_name" id="school_name" value="{{ $education->school_name }}" required><br>

        <label for="degree">Degree:</label>
        <input type="text" name="degree" id="degree" value="{{ $education->degree }}" required><br>

        <label for="major">Major:</label>
        <input type="text" name="major" id="major" value="{{ $education->major }}" required><br>

        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" id="start_date" value="{{ $education->start_date }}" required><br>

        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" id="end_date" value="{{ $education->end_date }}" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>