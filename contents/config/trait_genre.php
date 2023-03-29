<?php
include 'pdo.php';
$stmt =$connex->prepare('SELECT * FROM genre');
$stmt->execute();
$genreFilm = $stmt->fetchAll();
// var_dump($genreFilm);
?>