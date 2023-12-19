<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>

<body>
    <h1>Admin portal</h1>
    <h2>Student Details</h2>
    <br>

    <h3>{{ $student->name }}</h3>
    <p><b>Email: </b>{{ $student->email }}</p>
    <p><b>Project ID: </b>{{ $student->project_id }}</p>
    <hr>

    <button><a href="{{ route('admin.students.edit', ['student_id' => $student->id]) }}">Edit</a></button>
    <form action="{{ route('admin.students.destroy', ['student_id' => $student->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>

</html>