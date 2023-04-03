<?php
    session_start();
    include '../../../filmopolis/contents/config/admin/pdo.php';
    include '../../../filmopolis/contents/config/genre.php';
    include '../../../filmopolis/contents/config/categ.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tableau de bord</title>

        <!-- LINK & SCRIPT -->
        <?php include '../../../filmopolis/contents/include/components/head.php'; ?>
    </head>

    <!-- NAVBAR -->
    <?php include '../../../filmopolis/contents/include/components/navbar.php'; ?>

    <!-- TABS -->
    <?php include '../../../filmopolis/contents/include/tab/dashboard_tab.php'; ?>

    <!-- FOOTER -->
    <?php include '../../../filmopolis/contents/include/components/footer.php'; ?>
</html>