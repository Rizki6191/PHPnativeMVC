<?php if (isset($_GET['id'])): ?>
    <!-- Jika ada parameter id di URL -->
    <?php $user->find(); ?>

<?php else: ?>
    <!-- Jika tidak ada parameter id, tampilkan tabel -->
     <?php $user->show(); ?>