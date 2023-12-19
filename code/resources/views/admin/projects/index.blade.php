<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
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