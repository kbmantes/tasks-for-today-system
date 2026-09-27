<h1>Welcome to Tasks for Today</h1>

<p class="subtitle">
    Stay organized by reviewing the tasks scheduled for today.
</p>

<div class="summary">
    <strong>Date:</strong> <?= esc($today) ?><br>
    <strong>Tasks scheduled today:</strong> <?= count($tasks) ?>
</div>

<?php if (! empty($tasks)): ?>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Task Date</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($tasks as $index => $task): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= esc($task['title']) ?></td>
                        <td>
                            <span class="status status-<?= esc($task['status']) ?>">
                                <?= esc($task['status']) ?>
                            </span>
                        </td>
                        <td>
                            <?= date('F j, Y', strtotime($task['task_date'])) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <p class="empty-message">
        There are no tasks scheduled for today.
    </p>
<?php endif; ?>