<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>

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

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
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
        <label for="location">Location: </label>
        <input type="text" name="location" value="{{$project->location}}">
        <br>

        <button type="submit">Update</button>
    </form>
</body>

</html>