<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>

<body>
    <h1>Admin portal</h1>
    <h2>Edit Student</h2>
    <form action="{{ route('admin.students.update', ['student_id' => $student->id]) }}" method="post">
        @csrf
        @method('PUT')

        <label for="name">Name: </label>
        <input type="text" name="name" value="{{ $student->name }}">
        <br>
        <label for="email">Email: </label>
        <input type="email" name="email" value="{{ $student->email }}">
        <br>
        <label for="project_id">Project ID: </label>
        <input type="text" name="project_id" value="{{ $student->project_id }}">
        <br>

        <button type="submit">Update</button>
    </form>
</body>

</html>