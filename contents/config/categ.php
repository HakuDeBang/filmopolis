<?php
include 'admin/pdo.php';
$stmt =$connex->prepare('SELECT * FROM categorie');
$stmt->execute();
$categorieFilm = $stmt->fetchAll();
// var_dump($categorieFilm);
?>