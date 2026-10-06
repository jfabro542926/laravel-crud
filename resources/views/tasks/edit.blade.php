<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Title:</label><br>
            <input type="text" name="title" value="{{ $task->title }}" required>
        </div>
        <div>
            <label>Description:</label><br>
            <textarea name="description">{{ $task->description }}</textarea>
        </div>
        <div>
            <label>
                <input type="checkbox" name="completed" {{ $task->completed ? 'checked' : '' }}> Completed
            </label>
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html>