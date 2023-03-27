<?php
    session_start();
    session_destroy();
    header("Location: ../../../FILMOPOLIS/index.php");
?>