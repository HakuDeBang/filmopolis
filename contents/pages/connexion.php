<?php
session_start(); // Permet d'afficher une variable session // Transporte toutes les variables de sessions // Permet d'indiquer à l'utilisateur qu'il est encore connecté
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Filmopolis</title>

        <!-- LINK & SCRIPT -->
        <?php include('../../../FILMOPOLIS/contents/include/head.php'); ?>
    </head>
    <!-- NAVBAR -->
    <?php include('../../../FILMOPOLIS/contents/include/navbar.php'); ?>

    <?php
    if(isset($_SESSION['success_register'])){
        echo $_SESSION['success_register'];
    }
    ?>
    
    <!-- FORM LOGIN -->
    <?php include('../../../FILMOPOLIS/contents/include/form_login.php'); ?>

    <!-- FOOTER -->
    <?php include('../../../FILMOPOLIS/contents/include/footer.php'); ?>
</html>