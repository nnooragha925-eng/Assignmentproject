
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details</title>
</head>
<body>
    <h1>Job Details</h1>

    <h2>Web Developer</h2>

    <p><strong>Company:</strong> ABC Company</p>

    <p><strong>Location:</strong> Kandahar, Afghanistan</p>

    <p><strong>Description:</strong></p>
    <p>We are looking for a Web Developer.</p>

    <a href="{{ route('jobs.index') }}">Back to All Jobs</a>

    <br><br>

    <a href="{{ route('jobs.edit', 1) }}">Edit Job</a>
</body>
</html>
