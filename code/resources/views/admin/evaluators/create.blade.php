<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Evaluator</title>
</head>

<body>
    <h1>Admin portal</h1>
    <h2>Create a new evaluator record</h2>
    <form action="{{ route('admin.evaluators.store') }}" method="post">
        @csrf

        <label for="name">Name: </label>
        <input type="text" name="name">
        <br>
        <label for="email">Email: </label>
        <input type="email" name="email">
        <br>
        <label for="password">Password: </label>
        <input type="password" name="password">
        <br>
        <label for="category">Category: </label>
        <input type="text" name="category">
        <br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>