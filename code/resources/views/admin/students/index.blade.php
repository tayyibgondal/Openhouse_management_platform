<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>

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

        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
        }

        button a {
            text-decoration: none;
            color: #fff;
        }

        button:hover {
            background-color: #2980b9;
        }

        h3 {
            background-color: #fff;
            padding: 10px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }

        h3 a {
            text-decoration: none;
            color: #333;
        }

        hr {
            border: 1px solid #ddd;
            margin: 10px 0;
        }
    </style>
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