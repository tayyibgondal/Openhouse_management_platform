<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
</head>

<body>
    <h1>Welcome Home Admin!</h1>
    <div>
        <div>
            <h2>Click to fire project assignment</h2>
            <a href="{{ route('admin.assign') }}">Assign</a>
        </div>

        <div>
            <h2>Project Evaluations</h2>
            <a href="{{ route('admin.evaluations') }}">View</a>
        </div>

        <div>
            <h2>Projects Section</h2>
            <a href="{{ route('admin.projects.index') }}">View</a>
        </div>

        <div>
            <h2>Evaluators Section</h2>
            <a href="{{ route('admin.evaluators.index') }}">View</a>
        </div>

        <div>
            <h2>Students Section</h2>
            <a href="{{ route('admin.students.index') }}">View</a>
        </div>
    </div>
</body>

</html>