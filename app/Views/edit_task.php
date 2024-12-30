<form action="/todo/update/<?= $task['id'] ?>" method="POST">
    <?= csrf_field() ?>
    <label>Category</label>
    <input type="text" name="category" value="<?= htmlspecialchars($task['category']) ?>" required>
    <label>Task</label>
    <input type="text" name="task" value="<?= htmlspecialchars($task['task']) ?>" required>
    <label>Priority</label>
    <input type="text" name="priority" value="<?= htmlspecialchars($task['priority']) ?>" required>
    <label>Due Date</label>
    <input type="date" name="due_date" value="<?= htmlspecialchars($task['due_date']) ?>" required>
    <label>Due Time</label>
    <input type="time" name="due_time" value="<?= htmlspecialchars($task['due_time']) ?>" required>
    <label>Status</label>
    <select name="status" required>
        <option value="Pending" <?= $task['status'] === 'Pending' ? 'selected' : '' ?>>Pending</option>
        <option value="Completed" <?= $task['status'] === 'Completed' ? 'selected' : '' ?>>Completed</option>
    </select>
    <button type="submit">Update Task</button>
</form>
