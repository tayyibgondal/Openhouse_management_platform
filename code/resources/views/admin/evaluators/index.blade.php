<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluators</title>
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