<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>

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
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
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

        button a {
            text-decoration: none;
            color: #fff;
        }
    </style>
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