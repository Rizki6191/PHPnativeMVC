<?php
require_once 'connection.php';
require_once 'model/user.model.php';
require_once 'controller/user.controller.php';
require_once 'view/user/user.view.php';
require_once 'view/utils/user.utils.php';

$user = new UserView();
$users = $user->getUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

<?php if (isset($_GET['id'])): ?>
    <!-- Jika ada parameter id di URL -->
    <?php $user->find(); ?>

<?php else: ?>
    <!-- Jika tidak ada parameter id, tampilkan tabel -->
    <table class="user-table">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php foreach ($users as $row): ?>
            <tr>
                <td><?=$row['id']; ?></td>
                <td><?=$row['username']; ?></td>
                <td><?=$row['email']; ?></td>
                <td><?=$row['password']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

</body>
</html>
