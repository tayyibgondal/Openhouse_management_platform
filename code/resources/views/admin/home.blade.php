<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        div {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        div>div {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            text-align: center;
        }

        h2 {
            color: #555;
        }

        a {
            display: block;
            margin-top: 10px;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #3498db;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <h1>Welcome Home Admin!</h1>
    <div>
        <div>
            <h2>Assign projects to evaluators</h2>
            <a href="{{ route('admin.assign') }}">Assign</a>
        </div>

        <div>
            <h2>Marks by Evaluators on Projects of Students</h2>
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