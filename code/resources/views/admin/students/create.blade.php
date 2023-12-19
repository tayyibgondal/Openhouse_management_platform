<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
</head>

<body>
    <h1>Admin portal</h1>
    <h2>Create a new student record</h2>
    <form action="{{ route('admin.students.store') }}" method="post">
        @csrf

        <label for="name">Name: </label>
        <input type="text" name="name">
        <br>
        <label for="email">Email: </label>
        <input type="email" name="email">
        <br>
        <label for="project_id">Project ID: </label>
        <input type="text" name="project_id">
        <br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>