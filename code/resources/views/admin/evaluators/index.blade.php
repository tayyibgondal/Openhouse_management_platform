<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluators</title>

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

        h3 {
            margin-bottom: 5px;
        }

        hr {
            border: 0.5px solid #ddd;
            margin: 10px 0;
        }

        /* Adjustments for better spacing */
        h2 {
            margin-top: 10px;
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
    <h2>List of evaluators</h2>
    <br>

    <button><a href="{{ route('admin.evaluators.create') }}">Create an evaluator</a></button>

    @foreach($evaluators as $evaluator)
    <h3><a href="{{ route('admin.evaluators.show', ['evaluator_id' => $evaluator->id]) }}">{{ $evaluator->name }}</a></h3>
    <hr>
    @endforeach
</body>

</html>