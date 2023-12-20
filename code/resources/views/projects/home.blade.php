<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>

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

        p {
            margin-bottom: 10px;
            color: #555;
        }

        button {
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
    </style>
</head>

<body>
    <h1>Student Project Portal</h1>
    <h2>Project Details</h2>
    <br>

    <h3>Your project has been marked by {{$done}} evaluators.</h3>

    <h3>{{$project->name}}</h3>
    <p><b>Token: </b> {{$project->token}}</p>
    <p><b>Password: </b> {{$project->password}}</p>
    <p><b>Category: </b> {{$project->category}}</p>
    <p><b>Description: </b> {{$project->description}}</p>
    <p><b>Location: </b> {{$project->location}}</p>
    <hr>

    <button><a href="{{ route('project.edit', ['project_id' => $project->id]) }}">Edit</a></button>
</body>

</html>