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
            min-height: 100vh;
        }

        h1,
        h2,
        h3 {
            text-align: center;
            color: #333;
        }

        button {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin: 20px;
            transition: background-color 0.3s ease;
        }

        button a {
            text-decoration: none;
            color: #fff;
        }

        button:hover {
            background-color: #c0392b;
        }

        p {
            color: #555;
            margin-bottom: 10px;
        }

        hr {
            border: 0;
            border-top: 1px solid #ccc;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <h1>Admin portal</h1>
    <h2>Project Details</h2>
    <br>

    <h3>{{$project->name}}</h3>
    <p><b>Token: </b> {{$project->token}}</p>
    <p><b>Password: </b> {{$project->password}}</p>
    <p><b>Category: </b> {{$project->category}}</p>
    <p><b>Description: </b> {{$project->description}}</p>
    <p><b>Location: </b> {{$project->location}}</p>
    <hr>

    <button><a href="{{ route('admin.projects.edit', ['project_id' => $project->id]) }}">Edit</a></button>
    <form action="{{ route('admin.projects.destroy', ['project_id' => $project->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>

</html>