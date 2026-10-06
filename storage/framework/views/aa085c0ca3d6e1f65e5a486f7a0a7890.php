<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
</head>
<body>
    <h1>Create Task</h1>
    <form action="<?php echo e(route('tasks.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
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
</html><?php /**PATH C:\Users\Student\laravel-project\my-app\resources\views/tasks/create.blade.php ENDPATH**/ ?>