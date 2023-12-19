<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
</head>

<body>
    <h1>Admin portal</h1>
    <h2>Edit Project</h2>
    <form action="{{ route('admin.projects.update', ['project_id' => $project->id]) }}" method="post">
        @csrf
        @method('PUT')

        <label for="token">Token: </label>
        <input type="text" name="token" value="{{$project->token}}">
        <br>
        <label for="password">Password: </label>
        <input type="text" name="password" value="{{$project->password}}">
        <br>
        <label for="name">Name: </label>
        <input type="text" name="name" value="{{$project->name}}">
        <br>
        <label for="description">Description: </label>
        <input type="text" name="description" value="{{$project->description}}">
        <br>
        <label for="category">Category: </label>
        <input type="text" name="category" value="{{$project->category}}">
        <br>

        <button type="submit">Update</button>
    </form>
</body>

</html>