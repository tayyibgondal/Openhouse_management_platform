<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
    <h1>Admin portal</h1>
    <h2>List of students</h2>
    <br>

    <button><a href="{{ route('admin.students.create') }}">Create a student</a></button>

    @foreach($students as $student)
    <h3><a href="{{ route('admin.students.show', ['student_id' => $student->id]) }}">{{ $student->name }}</a></h3>
    <hr>
    @endforeach
</body>

</html>