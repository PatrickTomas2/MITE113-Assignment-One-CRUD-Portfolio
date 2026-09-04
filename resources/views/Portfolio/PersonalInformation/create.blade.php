<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Personal Information</title>
</head>
<body>
    <h1>Add Personal Information</h1>
    <form action="{{ route('portfolio.personal-information.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="professional_title">Professional Title:</label>
        <input type="text" name="professional_title" id="professional_title" required><br>

        <label for="short_introduction">Short Introduction:</label>
        <textarea name="short_introduction" id="short_introduction" required></textarea><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" id="phone_number" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>