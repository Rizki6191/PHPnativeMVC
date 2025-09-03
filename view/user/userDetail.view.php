<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Detail</title>
</head>
<body>
    <?php if ($user): ?>
        <p>ID: <?= $user['id'] ?></p>
        <p>Username: <?= $user['username'] ?></p>
        <p>Email: <?= $user['email'] ?></p>
        <p>Password: <?= $user['password'] ?></p>
    <?php else: ?>
        <p>User not found.</p>
    <?php endif; ?>
</body>
</html>