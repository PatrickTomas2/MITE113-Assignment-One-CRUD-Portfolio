<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project</title>
</head>
<body>
    <h1>Add Project</h1>
    <form action="{{ route('portfolio.projects.store') }}" method="POST">
        @csrf
        <label for="project_name">Project Name:</label>
        <input type="text" name="project_name" id="project_name" required><br>

        <label for="project_description">Project Description:</label>
        <textarea name="project_description" id="project_description" required></textarea><br>

        <label for="category">Category:</label>
        <input type="text" name="category" id="category" required><br>

        <label for="technologies_used">Technologies Used:</label>
        <input type="text" name="technologies_used" id="technologies_used" required><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>