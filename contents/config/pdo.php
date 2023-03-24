<?php 
    $host = "localhost";
    $db = "filmopolis";
    $uname = "root";
    $pw = "";
    

    // CONNEXION //
    // On tente d'établir la connexion
    try {
        $connex = new PDO("mysql:host=$host;dbname=$db", $uname, $pw);
        // On défini le mode d'erreur de PDO sur Execption
        $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connexion à la BDD réussie !";

       
    }

    // On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci
    catch(PDOException $e) {
      echo "Connexion échouée : " . $e->getMessage();
    }
?>