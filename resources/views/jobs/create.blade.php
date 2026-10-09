
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Job</title>
</head>
<body>
    <h1>Create New Job</h1>

    <form>
        <label for="title">Job Title:</label>
        <input type="text" id="title" name="title" required>
        <br><br>

        <label for="company">Company Name:</label>
        <input type="text" id="company" name="company" required>
        <br><br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required>
        <br><br>

        <label for="description">Job Description:</label>
        <textarea id="description" name="description" rows="5"></textarea>
        <br><br>

        <button type="submit">Create Job</button>
    </form>

    <br>
    <a href="{{ route('jobs.index') }}">Back to All Jobs</a>
</body>
</html>
