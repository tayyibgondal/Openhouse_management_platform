<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluations</title>
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