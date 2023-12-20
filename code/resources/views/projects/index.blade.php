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

        button {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button a {
            text-decoration: none;
            color: #fff;
        }

        button:hover {
            background-color: #2980b9;
        }

        h3 {
            margin-bottom: 10px;
        }

        hr {
            margin-bottom: 20px;
            border: 0.5px solid #ccc;
            width: 80%;
        }
    </style>
</head>

<body>
    <h1>Admin portal</h1>
    <h2>List of projects</h2>
    <br>

    <button><a href="{{route('admin.projects.create')}}">Create a project</a></button>

    @foreach($projects as $project)
    <h3><a href="{{route('admin.projects.show', ['project_id' => $project->id])}}">{{$project->name}}</a></h3>
    <hr>
    @endforeach
</body>

</html>