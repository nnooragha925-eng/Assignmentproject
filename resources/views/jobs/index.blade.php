
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Jobs</title>
</head>
<body>
    <h1>All Jobs</h1>

    <a href="{{ route('jobs.create') }}">Create New Job</a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Job Title</th>
                <th>Company</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Web Developer</td>
                <td>ABC Company</td>
                <td>
                    <a href="{{ route('jobs.show', 1) }}">View</a>
                    <a href="{{ route('jobs.edit', 1) }}">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
