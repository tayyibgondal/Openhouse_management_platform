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
            min-height: 100vh;
        }

        h1,
        h2 {
            text-align: center;
            color: #333;
        }


        h3 {
            color: #333;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>Student Project portal</h1>
    <h2>List of projects</h2>
    <br>

    <button><a href="{{route('admin.projects.create')}}">Create a project</a></button>

    @foreach($projects as $project)
    <h3><a href="{{route('admin.projects.show', ['project_id' => $project->id])}}">{{$project->name}}</a></h3>
    <hr>
    @endforeach
</body>

</html>