<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="<?php echo e(route('tasks.update', $task)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div>
            <label>Title:</label><br>
            <input type="text" name="title" value="<?php echo e($task->title); ?>" required>
        </div>
        <div>
            <label>Description:</label><br>
            <textarea name="description"><?php echo e($task->description); ?></textarea>
        </div>
        <div>
            <label>
                <input type="checkbox" name="completed" <?php echo e($task->completed ? 'checked' : ''); ?>> Completed
            </label>
        </div>
        <button type="submit">Update</button>
    </form>
</body>
</html><?php /**PATH C:\Users\Student\laravel-project\my-app\resources\views/tasks/edit.blade.php ENDPATH**/ ?>