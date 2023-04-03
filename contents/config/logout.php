<?php
    session_start();
    session_destroy();
    header("Location: ../../../filmopolis/index.php");
?>