<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD</title>
</head>
<body>
    <h1>Task List</h1>
    <a href="<?php echo e(route('tasks.create')); ?>">Create New Task</a>

    <?php if(session('success')): ?>
        <p style="color: green;"><?php echo e(session('success')); ?></p>
    <?php endif; ?>

    <ul>
        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <strong><?php echo e($task->title); ?></strong> - <?php echo e($task->completed ? 'Done' : 'Pending'); ?>

                <a href="<?php echo e(route('tasks.edit', $task)); ?>">Edit</a>
                
                <form action="<?php echo e(route('tasks.destroy', $task)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">Delete</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html><?php /**PATH C:\Users\Student\laravel-project\my-app\resources\views/tasks/index.blade.php ENDPATH**/ ?>