<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD</title>
</head>
<body>
    <h1>Task List</h1>
    <a href="{{ route('tasks.create') }}">Create New Task</a>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($tasks as $task)
            <li>
                <strong>{{ $task->title }}</strong> - {{ $task->completed ? 'Done' : 'Pending' }}
                <a href="{{ route('tasks.edit', $task) }}">Edit</a>
                
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>