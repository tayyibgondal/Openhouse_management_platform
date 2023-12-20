<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluations</title>

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

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            background-color: #fff;
            padding: 10px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }

        hr {
            border: 1px solid #ddd;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    @if(session('success'))
    <div>{{ session('success') }}</div>
    @endif

    <h1>Admin portal</h1>
    <h2>Evaluations</h2>

    @foreach($data as $evaluatorName => $projectsMarks)
    <h3>Evaluator: {{ $evaluatorName }}</h3>
    <ul>
        @forelse($projectsMarks as $projectName => $marks)
        <li>Project: {{ $projectName }}, Marks: {{ $marks }}</li>
        @empty
        <li>Unmarked</li>
        @endforelse
    </ul>
    <hr>
    @endforeach
</body>

</html>