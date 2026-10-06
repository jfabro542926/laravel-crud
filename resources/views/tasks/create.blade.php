<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
</head>
<body>
    <h1>Create Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div>
            <label>Title:</label><br>
            <input type="text" name="title" required>
        </div>
        <div>
            <label>Description:</label><br>
            <textarea name="description"></textarea>
        </div>
        <button type="submit">Save</button>
    </form>
</body>
</html>