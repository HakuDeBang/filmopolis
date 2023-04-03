<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profil</title>

        <!-- LINK & SCRIPT -->
        <?php include '../../../filmopolis/contents/include/components/head.php'; ?>
    </head>

    <!-- NAVBAR -->
    <?php include '../../../filmopolis/contents/include/components/navbar.php'; ?>

    <?php 
        echo '<div class="flex flex-col items-center justify-center my-10"><h2 class="text-antiflashWhite bg-cardinal font-medium rounded-lg text-lg px-10 py-2 text-center">Bonjour ' . $_SESSION['pseudo_users'] . '</h2></div>';
    ?>

    <!-- FOOTER -->
    <?php include '../../../filmopolis/contents/include/components/footer.php'; ?>
</html>