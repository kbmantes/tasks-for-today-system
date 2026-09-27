<h1>Complete Task List</h1>

<p class="subtitle">
    This page displays every task in the database, ordered by task date.
</p>

<div class="summary">
    <strong>Total number of tasks:</strong> <?= count($tasks) ?>
</div>

<?php if (! empty($tasks)): ?>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Task Date</th>
                    <th>Date Created</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= esc($task['id']) ?></td>
                        <td><?= esc($task['title']) ?></td>
                        <td>
                            <span class="status status-<?= esc($task['status']) ?>">
                                <?= esc($task['status']) ?>
                            </span>
                        </td>
                        <td>
                            <?= date('F j, Y', strtotime($task['task_date'])) ?>
                        </td>
                        <td>
                            <?= date('F j, Y g:i A', strtotime($task['created_at'])) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <p class="empty-message">
        No tasks were found in the database.
    </p>
<?php endif; ?>