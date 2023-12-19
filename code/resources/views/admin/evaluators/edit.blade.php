<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Evaluator</title>
</head>

<body>
    <h1>Admin portal</h1>
    <h2>Edit Evaluator</h2>
    <form action="{{ route('admin.evaluators.update', ['evaluator_id' => $evaluator->id]) }}" method="post">
        @csrf
        @method('PUT')

        <label for="name">Name: </label>
        <input type="text" name="name" value="{{ $evaluator->name }}">
        <br>
        <label for="email">Email: </label>
        <input type="email" name="email" value="{{ $evaluator->email }}">
        <br>
        <label for="password">Password: </label>
        <input type="password" name="password">
        <br>
        <label for="category">Category: </label>
        <input type="text" name="category" value="{{ $evaluator->category }}">
        <br>

        <button type="submit">Update</button>
    </form>
</body>

</html>