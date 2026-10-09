
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job</title>
</head>
<body>
    <h1>Edit Job</h1>

    <form>
        <label for="title">Job Title:</label>
        <input type="text" id="title" name="title"
               value="Web Developer" required>
        <br><br>

        <label for="company">Company Name:</label>
        <input type="text" id="company" name="company"
               value="ABC Company" required>
        <br><br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location"
               value="Kandahar, Afghanistan" required>
        <br><br>

        <label for="description">Job Description:</label>
        <textarea id="description" name="description"
                  rows="5">We are looking for a Web Developer.</textarea>
        <br><br>

        <button type="submit">Update Job</button>
    </form>

    <br>
    <a href="{{ route('jobs.index') }}">Back to All Jobs</a>
</body>
</html>
