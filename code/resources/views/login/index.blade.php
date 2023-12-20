<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        div {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            text-align: center;
            font-size: 18px;
            color: #333;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <h1>Openhouse Management System</h1>
    <div>
        <p>Select your role:</p>
        <div><a href="{{route('login.admin')}}">Admin</a></div>
        <div><a href="{{route('login.evaluator')}}">Evaluator</a></div>
        <div><a href="{{route('login.project')}}">FYP group</a></div>
    </div>
</body>

</html>