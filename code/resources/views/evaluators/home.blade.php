<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>

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
            height: 100vh;
        }

        h1,
        h2,
        h3 {
            text-align: center;
            color: #333;
        }

        h3 {
            margin-bottom: 10px;
        }

        p {
            margin: 5px 0;
        }

        a {
            text-decoration: none;
            color: #3498db;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #2980b9;
        }

        hr {
            margin-bottom: 20px;
            border: 0.5px solid #ccc;
            width: 80%;
        }
    </style>
</head>

<body>
    <h1>Evaluator portal</h1>
    <h2>List of projects</h2>
    <br>

    @foreach($projects as $project)
    <h3>{{ $project->name }}</h3>
    <p><b>Category:</b> {{ $project->category }}</p>
    <p><b>Description:</b> {{ $project->description }}</p>
    <p><b>Location:</b> {{ $project->location }}</p>

    <a href="{{ route('evaluator.mark', ['evaluator_id' => $evaluator_id, 'project_id' => $project->id]) }}">Mark Project</a>
    <hr>
    @endforeach
</body>

</html>