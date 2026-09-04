<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Education</title>
</head>
<body>
    <h1>Add Education</h1>
    <form action="{{ route('portfolio.educations.store') }}" method="POST">
        @csrf
        <label for="school_name">School Name:</label>
        <input type="text" name="school_name" id="school_name" required><br>

        <label for="degree">Degree:</label>
        <input type="text" name="degree" id="degree" required><br>

        <label for="major">Major:</label>
        <input type="text" name="major" id="major" required><br>

        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" id="start_date" required><br>

        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" id="end_date" required><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>