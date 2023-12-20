<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluator</title>

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
        h2,
        h3 {
            text-align: center;
            color: #333;
        }

        p {
            text-align: center;
            margin: 5px 0;
            color: #555;
        }

        button {
            margin: 20px 0;
        }

        a {
            text-decoration: none;
            color: #3498db;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #2980b9;
        }

        hr {
            border: 0.5px solid #ddd;
            margin: 10px 0;
        }

        button a {
            color: #fff;
            text-decoration: none;
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
    <h2>Evaluator Details</h2>
    <br>

    <h3>{{ $evaluator->name }}</h3>
    <p><b>Email: </b>{{ $evaluator->email }}</p>
    <p><b>Category: </b>{{ $evaluator->category }}</p>
    <p><b>Password: </b>{{ $evaluator->password }}</p>
    <hr>

    <button><a href="{{ route('admin.evaluators.edit', ['evaluator_id' => $evaluator->id]) }}">Edit</a></button>
    <form action="{{ route('admin.evaluators.destroy', ['evaluator_id' => $evaluator->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>

</html>