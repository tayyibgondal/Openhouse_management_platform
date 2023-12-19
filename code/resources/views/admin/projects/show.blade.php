<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
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
    <hr>

    <button><a href="{{ route('admin.projects.edit', ['project_id' => $project->id]) }}">Edit</a></button>
    <form action="{{ route('admin.projects.destroy', ['project_id' => $project->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>

</html>