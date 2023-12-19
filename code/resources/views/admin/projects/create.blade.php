<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project</title>
</head>

<body>
    <h1>Admin portal</h1>
    <h2>Create a new project record</h2>
    <form action="{{ route('admin.projects.store') }}" method="post">
        @csrf

        <label for="token">Token: </label>
        <input type="text" name="token">
        <br>
        <label for="password">Password: </label>
        <input type="text" name="password">
        <br>
        <label for="name">Name: </label>
        <input type="text" name="name">
        <br>
        <label for="description">Description: </label>
        <input type="text" name="description">
        <br>
        <label for="category">Category: </label>
        <input type="text" name="category">
        <br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>