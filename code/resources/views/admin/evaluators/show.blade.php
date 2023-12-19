<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluator</title>
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