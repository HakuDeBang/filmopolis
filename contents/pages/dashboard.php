<?php
    session_start();
    include '../../../FILMOPOLIS/contents/config/pdo.php';
    include '../../../FILMOPOLIS/contents/config/trait_genre.php';
    include '../../../FILMOPOLIS/contents/config/trait_categ.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Filmopolis</title>

        <!-- LINK & SCRIPT -->
        <?php include '../../../FILMOPOLIS/contents/include/components/head.php'; ?>
    </head>

    <!-- NAVBAR -->
    <?php include '../../../FILMOPOLIS/contents/include/components/navbar.php'; ?>

    <!-- TABS -->
    <?php include '../../../FILMOPOLIS/contents/include/tab/dashboard_tab.php'; ?>

    <!-- FOOTER -->
    <?php include '../../../FILMOPOLIS/contents/include/components/footer.php'; ?>
</html>