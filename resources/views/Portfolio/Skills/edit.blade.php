<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Skill</title>
</head>
<body>
    <h1>Edit Skill</h1>
    <form action="{{ route('portfolio.skills.update', $skill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="skill_name">Skill Name:</label>
        <input type="text" name="skill_name" id="skill_name" value="{{ $skill->skill_name }}" required><br>

        <label for="skill_category">Skill Category:</label>
        <input type="text" name="skill_category" id="skill_category" value="{{ $skill->skill_category }}" required><br>

        <label for="proficiency_level">Proficiency Level:</label>
        <input type="text" name="proficiency_level" id="proficiency_level" value="{{ $skill->proficiency_level }}" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>