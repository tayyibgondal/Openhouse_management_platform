<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>

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

        h3 {
            background-color: #fff;
            padding: 10px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }

        p {
            margin: 5px 0;
        }

        button {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        button a {
            text-decoration: none;
            color: #fff;
        }

        button:hover {
            background-color: #c0392b;
        }

        hr {
            border: 1px solid #ddd;
            margin: 10px 0;
        }
    </style>
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