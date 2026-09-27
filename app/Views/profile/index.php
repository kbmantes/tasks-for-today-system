<h1>User Profile</h1>

<p class="subtitle">
    Demo user information retrieved from the users table.
</p>

<?php if ($user): ?>
    <div class="profile-card">
        <p>
            <strong>User ID:</strong>
            <?= esc($user['id']) ?>
        </p>

        <p>
            <strong>Username:</strong>
            <?= esc($user['username']) ?>
        </p>

        <p>
            <strong>Full Name:</strong>
            <?= esc($user['full_name']) ?>
        </p>

        <p>
            <strong>Email Address:</strong>
            <?= esc($user['email']) ?>
        </p>

        <p>
            <strong>Account Created:</strong>
            <?= date('F j, Y g:i A', strtotime($user['created_at'])) ?>
        </p>
    </div>
<?php else: ?>
    <p class="empty-message">
        No demo user was found in the database.
    </p>
<?php endif; ?>