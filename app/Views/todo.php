<style>
    /* CSS */
    @import url('https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap');

    .lexend-<uniquifier> {
    font-family: "Lexend", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    }

    body {
        font-family: "Lexend", sans-serif;
        font-style: bold;
        font-weight: 100;
        margin: 0;
        padding: 0;
        background: white;
    }

    .header {
        margin-left: 15px;
        margin-top: 0px;
        padding: 50px 20px;
    }

    .header h1 {
        font-size: 2.5rem;
        color: black;
    }

    .todo-container {
        margin: 20px auto;
        width: 95%;
    }

    .todo-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        font-size: 1rem;
    }

    .todo-table th, .todo-table td {
        text-align: center;
        padding: 10px;
        border: 1px solid #ccc;
    }

    .todo-table th {
        background-color: #f4f4f4;
        color: #333;
    }

    .todo-table td {
        background-color: #fff;
    }

    .todo-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .add-task-form {
        margin-top: 20px;
        font-size: 1rem;
    }

    .add-task-form input,
    .add-task-form select {
        margin: 5px 0;
        padding: 8px;
        width: calc(100% - 20px);
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .add-task-form button {
        padding: 10px 15px;
        background-color: black;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .add-task-form button:hover {
        background-color: #ef436b;
    }

</style>

<body>

<div class="header">
    <h1> Welcome Back, <?= htmlspecialchars($full_name ?? 'User') ?>. </h1>
</div>

<div class="todo-container">
    <h2>Your To-Do List</h2>

    <!-- Add Task Form -->
    <form class="add-task-form" action="/todo/add-task" method="POST">
        <input type="text" name="category" placeholder="Category" required>
        <input type="text" name="task" placeholder="Task" required>
        <input type="text" name="priority" placeholder="Priority (e.g., High, Medium, Low)" required>
        <input type="date" name="due_date" placeholder="Due Date" required>
        <input type="time" name="due_time" placeholder="Due Time" required>
        <select name="status" required>
            <option value="" disabled selected>Status</option>
            <option value="Pending">Pending</option>
            <option value="Completed">Completed</option>
        </select>
        <button type="submit">Add Task</button>
    </form>

    <!-- To-Do List Table -->
    <table class="todo-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Category</th>
                <th>Task</th>
                <th>Priority</th>
                <th>Due Date</th>
                <th>Due Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($tasks)): ?>
                <?php foreach ($tasks as $index => $task): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($task['category']) ?></td>
                        <td><?= htmlspecialchars($task['task']) ?></td>
                        <td><?= htmlspecialchars($task['priority']) ?></td>
                        <td><?= htmlspecialchars($task['due_date']) ?></td>
                        <td><?= htmlspecialchars($task['due_time']) ?></td>
                        <td><?= htmlspecialchars($task['status']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" style="text-align: center;">You have completed all tasks! 🎉</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
